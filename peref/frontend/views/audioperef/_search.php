<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AudioperefSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="audioperef-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'brand') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'model') ?>

    <?= $form->field($model, 'color') ?>

    <?= $form->field($model, 'guarantee') ?>

    <?= $form->field($model, 'country_manufacturer') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'price') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
