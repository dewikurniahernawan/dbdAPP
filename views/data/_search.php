<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\dataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    
    <div class="box box-info">
    <div class="box-header with-border">
    </div>

    <?php //echo $form->field($model, 'id') ?>

    <?php //echo $form->field($model, 'timestamp') ?>

    <?php //echo $form->field($model, 'coordinates') ?>

    <?php //echo $form->field($model, 'ns_1') ?>

    <?php //echo $form->field($model, 'fday') ?>

    <?= $form->field($model, 'age') ?>

    <?php //echo$form->field($model, 'sex') ?>

    <?php //echo $form->field($model, 'prevd') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
