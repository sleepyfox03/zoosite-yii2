<?php
/** @var yii\web\View $this */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\bootstrap5\Button;
$this->title="Add User";
$this->params['breadcrumbs'][]=$this->title;
$form =ActiveForm::begin(['id'=>'form-addusers']);
?>

  <?= $form->field($model, "uname")->label("Name"); ?>
  <?= $form->field($model, "email")->label("Email"); ?>
  <?= $form->field($model, "phn_no")->label("Phone No");?>
  <?= $form->field($model, "role")->label("Role"); ?>
  <?= $form->field($model, "pass")->label("Password"); ?>
  <div class="form-group">
  <?= Button::widget([
      'label'=>'Submit',
      'options' =>['class'=>'btn1 btn-primary','onclick'=>'signUpBtn()'],
    ]);
    ?>
  </div>


  <?php ActiveForm::end();
    ?>