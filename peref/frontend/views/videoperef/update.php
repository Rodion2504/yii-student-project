<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Videoperef $model */

$this->title = 'Редактировать периферию: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Видео периферия', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="videoperef-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
