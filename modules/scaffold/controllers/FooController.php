<?php

namespace app\modules\scaffold\controllers;

use app\modules\scaffold\models\Foo;
use yii\web\Controller;

class FooController extends Controller
{
    public function actionIndex()
    {
        $foos = array();
        foreach ( range( 1, 6 ) as $id ) {
            $foos[ ] = Foo::buildFromId( $id );
        }

        return $this->render( 'index', [
            'foos' => $foos,
        ] );
    }

    public function actionShow()
    {
        $request = \Yii::$app->request;

        $foo = Foo::buildFromId(
            $request->get( 'id' )
        );

        return $this->render( 'show', [
            'foo' => $foo
        ] );
    }

    public function actionCreate()
    {
        $request = \Yii::$app->request;
        $session = \Yii::$app->session;

        if ( $request->post( 'createSubmitCreate' ) ) {
            $session->setFlash( 'success', '@foo created successfully' );
            $this->redirect( [ '/scaffold/foo' ] );
        }

        if ( $request->post( 'createSubmitCancel' ) ) {
            $this->redirect( [ '/scaffold/foo' ] );
        }

        return $this->render( 'create' );
    }

    public function actionEdit()
    {
        $request = \Yii::$app->request;
        $session = \Yii::$app->session;

        if ( $request->post( 'editSubmitSave' ) ) {
            $session->setFlash( 'success', '@foo modified successfully' );
            $this->redirect( [ '/scaffold/foo' ] );
        }

        if ( $request->post( 'editSubmitCancel' ) ) {
            $this->redirect( [ '/scaffold/foo' ] );
        }

        $foo = Foo::buildFromId(
            $request->get( 'id' )
        );

        return $this->render( 'edit', [
            'foo' => $foo
        ] );
    }

    public function actionDestroy()
    {
        $request = \Yii::$app->request;
        $session = \Yii::$app->session;

        if ( $request->post( 'destroySubmitYes' ) ) {
            $session->setFlash( 'success', '@foo destroyed successfully' );
            $this->redirect( [ '/scaffold/foo' ] );
        }

        if ( $request->post( 'destroySubmitNo' ) ) {
            $this->redirect( [ '/scaffold/foo' ] );
        }

        $foo = Foo::buildFromId(
            $request->get( 'id' )
        );

        return $this->render( 'destroy', [
            'foo' => $foo
        ] );
    }
}
