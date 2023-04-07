<?php
/** @var yii\web\View $this */

use app\models\Zoo;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\bootstrap5\Button;

$this->title="Edit Animals";
$this->params['breadcrumbs'][]=$this->title;
$form =ActiveForm::begin(['id'=>'form-editanimals']);
?>

  <?= $form->field($model, "animals_name"); ?>
  <?= $form->field($model, "scientific_name"); ?>
  <?= $form->field($model, "type");?>
  <?= $form->field($model, "category"); ?>
  <?= 
  $form->field(new Zoo(), "zoo_id")->label("Zoo Name")->dropDownList($list,['options' => [$model2->zoo_id => ['Selected' => true]]])
   ?>
  <div class="form-group">
  <?= Button::widget([
      'label'=>'Submit',
      'options' =>['class'=>'btn1 btn-primary','onclick'=>'editanimalsbtn(this.id)','id' => $model->animals_id],
    ]);
    ?>  </div>


  <?php ActiveForm::end();
    ?>