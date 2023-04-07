<?php
/** @var yii\web\View $this */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\bootstrap5\Button;
$this->title="Edit User";
$this->params['breadcrumbs'][]=$this->title;
$form =ActiveForm::begin(['id'=>'form-editusers']);
?>

  <?= $form->field($model, "uname"); ?>
  <?= $form->field($model, "email"); ?>
  <?= $form->field($model, "phn_no");?>
  <?= $form->field($model, "role"); ?>

  <div class="form-group">
     <?= Button::widget([
      'label'=>'Submit',
      'options' =>['class'=>'btn1 btn-primary','onclick'=>'editusersbtn(this.id)','id' => $model->user_id],
    ]);
    ?>
  </div>


  <?php ActiveForm::end();
    ?>