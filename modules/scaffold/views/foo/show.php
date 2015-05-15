<?php /* @var $this yii\web\View */ ?>
<?php /** @var $foo \app\modules\scaffold\models\Foo */ ?>
<?php $this->title = 'Show @foo'; ?>

<div class="page-header">
    <h1>Show @foo</h1>
</div>

<div class="row">

    <div class="col-md-8">

        <table class="table table-hover table-bordered">

            <thead>
            <tr>
                <th>ID</th>
                <th><?php echo $foo->id; ?></th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <th>@one</th>
                <td>@one</td>
            </tr>
            <tr>
                <th>@two</th>
                <td>@two</td>
            </tr>
            <tr>
                <th>@three</th>
                <td>@three</td>
            </tr>
            </tbody>

        </table>

    </div>

    <div class="col-md-4">

        <div class="panel panel-default">
            <div class="panel-body">

                <div class="pull-left"></div>

                <div class="pull-right">

                    <a class="btn btn-default" href="#">Cancel</a>
                    <a class="btn btn-primary" href="#">Edit</a>

                </div>

            </div>

            <ul class="list-group">
                <li class="list-group-item">
                    Would you like to destroy @foo?
                    <a class="text-danger" href="#">Yes!</a>
                </li>
            </ul>

        </div>

    </div>

</div>