<?php
/** @var yii\web\View $this */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\bootstrap5\Button;

$this->title="Add Animals";
$this->params['breadcrumbs'][]=$this->title;
$form =ActiveForm::begin(['id'=>'form-addanimals']);
?>

  <?= $form->field($model, "animals_name"); ?>
  <?= $form->field($model, "scientific_name"); ?>
  <?= $form->field($model, "type");?>
  <?= $form->field($model, "category"); ?>
 <?php  
echo $form->field($model2, "zoo_name")->dropDownList($list) ;
 ?>

  <div class="form-group">
  
  <?= Button::widget([
      'label'=>'Submit',
      'options' =>['class'=>'btn1 btn-primary','onclick'=>'addanimalsbtn()'],
    ]);
    ?>
  </div>


  <?php ActiveForm::end();
    ?>