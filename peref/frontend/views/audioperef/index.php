<?php

use frontend\models\Audioperef;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AudioperefSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Аудио периферия';

?>
<div class="audioperef-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать периферию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'brand',
            'type',
            'model',
            //'color',
            //'guarantee',
            //'country_manufacturer',
            //'description:ntext',
            'price',
            [
                'class' => ActionColumn::className(),
                'visible'=> !Yii::$app->user->isGuest && Yii::$app->user->identity->username=='admin',
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
