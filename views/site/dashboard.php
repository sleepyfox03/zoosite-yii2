<?php

use yii\bootstrap5\Html;
?>


    
     <div >
        <div >
            <h1 style="color: #CD833a">Dashboard</h1>
        </div >
        <div class="container">
            <div class="row">
                <div class="btn1 col-lg-3 p-5 m-3 bg-dark border">
               <center> <button id="viewuser_table" class="btn1" onclick="showUsers()">Users</button></center>
                   
                   <?php
                   
                //    include "db_con2.php";
                //    $stm =  $conn->query("SELECT COUNT('email') as temp FROM user");
                //    $userData = $stm->fetch_assoc();
                //    $c = $userData['temp'];
                //    echo $c
                    // include "../Database/db_con.php";
                    // $query = "SELECT COUNT('email') as temp FROM user where activity=1";
                    // $run = mysqli_query($conn,$query);
                    // $data=mysqli_fetch_assoc($run);
                    // $count=$data['temp'];
                    // echo $count;
                    ?>
                </div>
                <div class="btn1 col-lg-3 p-5 m-3 bg-dark border">
                <center><button id="viewanimals_table" class="btn1" onclick="showAnimals()">Animals</button></center>
                <?php 
                // include "../Database/db_con.php";
                    // $query = "SELECT COUNT('animals_id') as temp FROM animals where activity=1";
                    // $run = mysqli_query($conn,$query);
                    // $data=mysqli_fetch_assoc($run);
                    // $count=$data['temp'];
                    // echo $count;
                    ?>
                </div>
                <div class="btn1 col-lg-3 p-5 m-3 bg-dark border">

               <center> <button id="viewzoo_table" class="btn1" onclick="showZoo()">Zoo</button></center>
                
                </div>
            </div>
</div  >        

   
    <div class="row">
    <div class="col-lg-8 " id="table-container"></div>
    <div class="col-lg-4 " id="abc"></div>
    </div>


       
        
    </body>
</html>