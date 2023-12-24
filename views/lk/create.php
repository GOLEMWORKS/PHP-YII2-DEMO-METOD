<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Zaya $model */

$this->title = 'Create Zaya';
$this->params['breadcrumbs'][] = ['label' => 'Zayas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zaya-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="zaya-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'number_auto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

</div>
