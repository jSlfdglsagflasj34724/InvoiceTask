<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Create Invoice Item';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="invoice-item-create">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ItemName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ItemQty')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'ItemPrice')->textInput(['type' => 'number', 'step' => '0.01']) ?>

    <div class="form-group">
        <?= Html::submitButton('Create', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
