<?php
/** @var yii\web\View $this */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\bootstrap5\Button;

$this->title="Add Zoo";
$this->params['breadcrumbs'][]=$this->title;
$form =ActiveForm::begin(['id'=>'form-addzoo']);
?>

  <?= $form->field($model, "zoo_name"); ?>
  <?= $form->field($model, "state"); ?>
  <?= $form->field($model, "city");?>
  <?= $form->field($model, "area"); ?>

  <div class="form-group">

  <?= Button::widget([
      'label'=>'Submit',
      'options' =>['class'=>'btn1 btn-primary','onclick'=>'addzoobtn()'],
    ]);
    ?>
  </div>


  <?php ActiveForm::end();
    ?>