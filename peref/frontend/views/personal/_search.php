<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PersonalSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="personal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'surname') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'middlename') ?>

    <?= $form->field($model, 'birthday') ?>

    <?= $form->field($model, 'phonenumber') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'experience') ?>

    <?= $form->field($model, 'passport') ?>

    <?= $form->field($model, 'salary') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
