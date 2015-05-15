<?php

namespace app\modules\scaffold\controllers;

use yii\web\Controller;

class FooController extends Controller
{
    public function actionIndex()
    {
        return $this->render( 'index' );
    }
}
