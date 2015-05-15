<?php /* @var $this \yii\web\View */ ?>
<?php /* @var $content string */ ?>
<?php \app\assets\AppAsset::register( $this ); ?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language; ?>">
<head>
    <meta charset="<?= Yii::$app->charset; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= \yii\helpers\Html::encode( $this->title ); ?></title>
    <?php $this->head(); ?>
</head>
<body>

<?php $this->beginBody(); ?>

<?php
\yii\bootstrap\NavBar::begin( [
    'brandLabel' => 'Yuba',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-default navbar-fixed-top',
    ],
] );
echo \yii\bootstrap\Nav::widget( [
    'options' => [ 'class' => 'navbar-nav navbar-left' ],
    'items' => [
        [ 'label' => 'Home', 'url' => Yii::$app->homeUrl ],
        [ 'label' => 'About', 'url' => [ '/scaffold/to-do' ] ],
    ],
] );
echo \yii\bootstrap\Nav::widget( [
    'options' => [ 'class' => 'navbar-nav navbar-right' ],
    'items' => [
        [ 'label' => '@todo', 'url' => [ '/scaffold/to-do' ] ],
        [ 'label' => '@foo', 'url' => [ '/scaffold/foo' ] ],
    ],
] );
\yii\bootstrap\NavBar::end();
?>

<div class="container">

    <?= $content; ?>

    <hr>

    <footer>
        <p>&copy; Yuba <?php echo date( 'Y' ); ?></p>
    </footer>

</div>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
