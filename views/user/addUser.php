<?php
/** @var yii\web\View $this */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\bootstrap5\Button;
$this->title="Add User";
$this->params['breadcrumbs'][]=$this->title;
$form =ActiveForm::begin(['id'=>'form-addusers']);

?>

  <?= $form->field($model, "uname"); ?>
  <?= $form->field($model, "email"); ?>
  <?= $form->field($model, "phn_no");?>
  <?= $form->field($model, "role"); ?>
  <?= $form->field($model, "pass"); ?>
  <?= $form->field($model, 'profile')->fileInput() ?>

  <div class="form-group">
  <?= Button::widget([
      'label'=>'Submit',
      'options' =>['class'=>'btn1 btn-primary','onclick'=>'addusersbtn()'],
    ]);
    ?>
  </div>


  <?php ActiveForm::end();
    ?>