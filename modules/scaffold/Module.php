<?php

namespace app\modules\scaffold;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\scaffold\controllers';
    public $defaultRoute = 'to-do/index';

    public function init()
    {
        parent::init();
    }
}
