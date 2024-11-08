<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\VideoperefSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="videoperef-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'brand') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'model') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'guarantee') ?>

    <?php // echo $form->field($model, 'country_manufacturer') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'price') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
