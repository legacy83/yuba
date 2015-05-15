<?php

namespace app\modules\scaffold\models;

class Foo
{
    public $id;

    static function buildFromId( $id )
    {
        $foo = new Foo();
        $foo->id = $id;

        return $foo;
    }
}
