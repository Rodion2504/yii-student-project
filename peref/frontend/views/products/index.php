<?php

use frontend\models\Products;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ProductsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            //'id',
            'name',
            'brand',
            'type',
            'color',
            //'guarantee',
            //'country_manufacturer',
            'image',
            //'description:ntext',
            //'price',
            //'price_old',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $producti, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $producti->id]);
                 }
            ],
        ],
    ]); ?>


</div>
