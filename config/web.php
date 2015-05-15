<?php

$config = [
    'id' => 'basic',
    'basePath' => dirname( __DIR__ ),
    'bootstrap' => [ 'log' ],

    /*
     * components
     */

    'components' => [

        /*
         * components/request
         */

        'request' => [

            /*
             * Insert a secret key in the following
             * This is required by cookie validation
             */

            'cookieValidationKey' => 'W8p?(G4k32p@S5M',
        ],

        /*
         * components/cache
         */

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => TRUE,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => TRUE,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => [ 'error', 'warning' ],
                ],
            ],
        ],
        'db' => require( __DIR__ . '/db.php' ),
    ],
    'params' => require( __DIR__ . '/params.php' ),
];

if ( YII_ENV_DEV ) {
    // configuration adjustments for 'dev' environment
    $config[ 'bootstrap' ][ ] = 'debug';
    $config[ 'modules' ][ 'debug' ] = 'yii\debug\Module';

    $config[ 'bootstrap' ][ ] = 'gii';
    $config[ 'modules' ][ 'gii' ] = 'yii\gii\Module';
}

return $config;
