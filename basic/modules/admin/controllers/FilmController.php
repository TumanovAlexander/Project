<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Film;
use app\modules\admin\models\FilmSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\modules\admin\models\Studio;
use app\modules\admin\models\Genre;
use app\modules\admin\models\Director;

/**
 * FilmController implements the CRUD actions for Film model.
 */
class FilmController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Film models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FilmSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Film model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $name_genre = Genre::findOne($this->findModel($id)->id_genre_film);
		$name_studio = Studio::findOne($this->findModel($id)->id_studio_film);
		$name_director = Director::findOne($this->findModel($id)->id_director_film);
        return $this->render('view', [
            'model' => $this->findModel($id),
			'name_genre' => $name_genre,
			'name_studio' => $name_studio,
			'name_director' => $name_director,
        ]);
    }

    /**
     * Creates a new Film model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $name_genre = Genre::find()->orderBy('id_genre')->all();
		$name_studio = Studio::find()->orderBy('id_studio')->all();
		$name_director = Director::find()->orderBy('id_director')->all();
		$model = new Film();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_film]);
        }

        return $this->render('create', [
            'model' => $model,
			'name_genre' => $name_genre,
			'name_studio' => $name_studio,
			'name_director' => $name_director,
        ]);
    }

    /**
     * Updates an existing Film model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
		$name_genre = Genre::find()->orderBy('id_genre')->all();
		$name_studio = Studio::find()->orderBy('id_studio')->all();
		$name_director = Director::find()->orderBy('id_director')->all();
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_film]);
        }

        return $this->render('update', [
            'model' => $model,
			'name_genre' => $name_genre,
			'name_studio' => $name_studio,
			'name_director' => $name_director,
        ]);
    }

    /**
     * Deletes an existing Film model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Film model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Film the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Film::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
