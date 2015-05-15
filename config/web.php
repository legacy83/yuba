<?php

$config = [

    'id' => 'yuba',
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

        /*
         * components/errorHandler
         */

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        /*
         * components/log
         */

        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => [ 'error', 'warning' ],
                ],
            ],
        ],

        /*
         * components/db
         */

        'db' => require( __DIR__ . '/db.php' ),
    ],

    /*
     * params
     */

    'params' => require( __DIR__ . '/params.php' ),

    /*
     * modules
     */

    'modules' => [
        'scaffold' => [
            'class' => 'app\modules\scaffold\Module',
        ],
    ],
];

if ( YII_ENV_DEV ) {

    /*
     * configuration adjustments for 'dev' environment
     */

    $config[ 'bootstrap' ][ ] = 'debug';
    $config[ 'modules' ][ 'debug' ] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' => [ '*' ],
    ];

    $config[ 'bootstrap' ][ ] = 'gii';
    $config[ 'modules' ][ 'gii' ] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => [ '*' ],
    ];
}

return $config;
