<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Otherperef $model */

$this->title = 'Добавить переферию';
$this->params['breadcrumbs'][] = ['label' => 'Другая периферия', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otherperef-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
