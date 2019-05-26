<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php
$f = ActiveForm::begin();
?>
<?=$f->field($form, 'name')?>
<?= Html::submitButton('delete');?>
<?php
ActiveForm::end();
?>