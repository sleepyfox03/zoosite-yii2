<?php
/** @var yii\web\View $this */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\bootstrap5\Button;

$form =ActiveForm::begin(['id'=>'form-login']);
?>
    <h1 style="color: #CD833a">Login</h1>

  <?= $form->field($model, "email")->textInput(['autofocus' => true]); ?>
  <?= $form->field($model, "pass")->passwordInput();  ?>

  <div class="form-group">

  <?= Button::widget([
      'label'=>'Submit',
      'options' =>['class'=>'btn1 btn-primary','onclick'=>'Login()'],
    ]);
    ?>
  </div>


  <?php ActiveForm::end();
    ?>