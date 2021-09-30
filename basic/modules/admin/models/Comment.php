<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property int $id_comment
 * @property string $comment
 * @property int $id_user_comment
 * @property int $id_film_comment
 *
 * @property Film $filmComment
 * @property User $userComment
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['comment', 'id_user_comment', 'id_film_comment'], 'required'],
            [['comment'], 'string'],
            [['id_user_comment', 'id_film_comment'], 'integer'],
            [['id_film_comment'], 'exist', 'skipOnError' => true, 'targetClass' => Film::className(), 'targetAttribute' => ['id_film_comment' => 'id_film']],
            [['id_user_comment'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user_comment' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_comment' => 'Номер комментария',
            'comment' => 'Комментарий',
            'id_user_comment' => 'Номер пользователя',
            'id_film_comment' => 'Номер фильма',
        ];
    }

    /**
     * Gets query for [[FilmComment]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFilmComment()
    {
        return $this->hasOne(Film::className(), ['id_film' => 'id_film_comment']);
    }

    /**
     * Gets query for [[UserComment]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserComment()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user_comment']);
    }
}
