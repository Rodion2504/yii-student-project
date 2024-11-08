<?php

use frontend\models\Personal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PersonalSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Сотрудники';
?>
<div class="personal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <p>
        <?=
        Html::a('Добавить сотрудника', ['create'], ['class' => 'btn btn-success'])?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'surname',
            'name',
            'middlename',
            'birthday',
            //'phonenumber',
            //'address',
            //'experience',
            //'passport',
            //'salary',
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
