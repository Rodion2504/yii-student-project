<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Audioperef $model */

$this->title = 'Редактировать периферию: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Аудио периферия', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="audioperef-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
