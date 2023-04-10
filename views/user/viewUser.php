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
     <button id="add_user" class="btn1 btn-primary" onclick="addUsers()">Add User</button>
 

</div>
<br>
 
    
    <a href=""></a>
       <div class="container table-responsive">

        <table class="table table-light table-striped table-hover" id="mytable">
            <thead><tr><th>User ID</th>
                <th>Profile</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone no</th>
                <th>Role</th>
                <th>Update</th>
                <th>Delete</th>
                
            </tr>
</thead>
<tbody>
    
     <?php
     
        foreach($sql as $post):
         
            ?>
        <tr>
            <td><?php echo $post['user_id']; ?></td>
            <td><?php echo $post['profile']; ?>
            <td><?php echo $post['uname']; ?></td>
            <td><?php echo $post['email']; ?></td>
            <td><?php echo $post->phn_no; ?></td>
            <td><?php echo $post->role; ?></td>
           <td><button id="<?=$post['user_id']; ?>" class="btn1 btn-primary" onclick="editUsers(this.id)">Edit</button></td>
           <td><button id="<?=$post['user_id']; ?>" class="btn1 btn-primary" onclick="deleteUsers(this.id)">Delete</button></td>
        </tr>
        <?php endforeach;?>

        </tbody>
            
        </table>
            </div>
       <div id="error">
        
       </div>
      