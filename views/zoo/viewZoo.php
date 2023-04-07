<?php


/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;

use yii\captcha\Captcha;
use yii\helpers\Html;
// print_r($sql);



?>
<div>
        <!-- modal -->
     <!-- Button trigger modal -->
     <button id="addzoo" class="btn1 btn-lg" onclick="addZoo()">add zoo</button>

</div>
<br>
 
    
    <a href=""></a>
       <div class="container">

        <table class="table table-bordered table-light table-sm">
            <tr><th>Zoo ID</th>
                <th>Zoo Name</th>
                <th>State</th>
                <th>City</th>
                <th>Area (sq km)</th>
                <th>Update</th>
                <th>Delete</th>
                
            </tr>
          
    
     <?php
     
        foreach($sql as $post):
         
            ?>
        <tr>
            <td><?php echo $post['zoo_id']; ?></td>
            <td><?php echo $post['zoo_name']; ?></td>
            <td><?php echo $post['state']; ?></td>
            <td><?php echo $post->city; ?></td>
            <td><?php echo $post->area; ?></td>
            <td>
            <button id="<?=$post['zoo_id']; ?>" class="btn1 btn-primary" onclick="editZoo(this.id)">Edit</button>
            
        </td><td>
        <button id="<?=$post['zoo_id']; ?>" class="btn1 btn-primary" onclick="deleteZoo(this.id)">Delete</button>
 
            </td>
        </tr>
        <?php endforeach;?>

    
            
        </table>
            </div>
       <div id="error">
        
       </div>
      