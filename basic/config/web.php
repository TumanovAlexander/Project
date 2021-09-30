<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
	'layout' => 'shablon',
	'name'=>'Diplom',
	'language'=>'ru',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
	'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'Diplom',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
			'search' => 'site/search',
			'category' => 'pages/category',
			'admin' => 'admin/default/index',
			'site' => 'site/index',
			'signup' => 'pages/signup',
			'login' => 'site/login',
			'director' => 'admin/director',
			'film' => 'admin/film',
			'genre' => 'admin/genre',
			'studio' => 'admin/studio',
			'user' => 'admin/user',
			'userrate' => 'admin/userrate',
			'library' => 'admin/library',
			'filmv' => 'film/view',
			'filmcr' => 'admin/film/create',
			'afilmv' => 'admin/film/view',
			'filmu' => 'admin/film/update',
			'filmd' => 'admin/film/delete',
			'directorv' => 'director/view',
			'directorcr' => 'admin/director/create',
			'adirectorv' => 'admin/director/view',
			'directoru' => 'admin/director/update',
			'directord' => 'admin/director/delete',
			'genrev' => 'genre/view',
			'genrecr' => 'admin/genre/create',
			'agenrev' => 'admin/genre/view',
			'genreu' => 'admin/genre/update',
			'genred' => 'admin/genre/delete',
			'studiov' => 'studio/view',
			'studiocr' => 'admin/studio/create',
			'astudiov' => 'admin/studio/view',
			'studiou' => 'admin/studio/update',
			'studiod' => 'admin/studio/delete',
			'userv' => 'user/view',
			'usercr' => 'admin/user/create',
			'auserv' => 'admin/user/view',
			'useru' => 'admin/user/update',
			'vuseru' => 'user/update',
			'userd' => 'admin/user/delete',
			'userratev' => 'userrate/view',
			'userratecr' => 'admin/userrate/create',
			'auserratev' => 'admin/userrate/view',
			'userrateu' => 'admin/userrate/update',
			'userrated' => 'admin/userrate/delete',
			'libraryv' => 'library/view',
			'librarycr' => 'admin/library/create',
			'alibraryv' => 'admin/library/view',
			'libraryu' => 'admin/library/update',
			'libraryd' => 'admin/library/delete',
			'ajax' => 'site/ajax',
			'ajaxdelete' => 'site/ajaxdelete',
			'logout' => '/site/logout',
            ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
