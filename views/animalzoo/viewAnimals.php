<?php


/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;

use yii\captcha\Captcha;
use yii\helpers\Html;
?>

       
<div>
        <!-- modal -->
     <!-- Button trigger modal -->
     <button id="add_animals" class="btn1 btn-lg" onclick="addAnimals()">Add Animals</button>
 

</div>
<br>
 
    
    <a href=""></a>
       <div class="container">

        <table class="table table-bordered table-light table-sm">
            <tr><th>Animal ID</th>
                <th>Animals Name</th>
                <th>Scientific Name</th>
                <th>Type</th>
                <th>Category</th>
                <th>Zoo Name</th>
                <th>State</th>
                <th>City</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
          
           
    <?php foreach ($data as $row): ?>
      <tr>
        <td><?= $row['animals_id'] ?></td>
        <td><?= $row['animals_name'] ?></td>
        <td><?= $row['scientific_name'] ?></td>
        <td><?= $row['type'] ?></td>
        <td><?= $row['category'] ?></td>
        <td><?= $row['zoo_name'] ?></td>
        <td><?= $row['state'] ?></td>
        <td><?= $row['city'] ?></td>
    
        <td>
         <button id="<?=$row['animals_id']; ?>" class="btn1 btn-lg" onclick="editAnimals(this.id)">Edit</button>
         
     </td><td>
     <button id="<?=$row['animals_id']; ?>" class="btn1 btn-primary" onclick="deleteAnimals(this.id)">Delete</button>

         </td>
         </tr>
    <?php endforeach; ?>
            
        </table>
            </div>
       <div id="error">
        
       </div>

       