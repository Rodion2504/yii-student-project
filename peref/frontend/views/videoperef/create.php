<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Videoperef $model */

$this->title = 'Создать периферию';
$this->params['breadcrumbs'][] = ['label' => 'Видео периферия', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="videoperef-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
