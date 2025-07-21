<!DOCTYPE html>
<html>
    <head>
        <title>HMS home page</title>
    </head>
</html>
<body>
<?php 
include("header.php");
?>
<div style="margin-top:50px"></div>
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3 mx-1 shadow">
               <img src="img/info.png" style="width: 100%;height: 190px;">
               <h5 class="text-center">click on the button for more information</h5>
               <a href="#">
                <button class="btn btn-success my-3" style="margin-left:20%;">More</button>
               </a>
            </div>
            <div class="col-md-4 mx-1 shadow">
               <img src="img/patient.jfif" style="width:100%;">
               <h5 class="text-center">create account so that we can take care of you</h5>
               <a href="account.php">
                <button class="btn btn-success my-3" style="margin-left:30%;">create Account!!</button>
               </a>
            </div>
            <div class="col-md-4 mx-1 shadow">
               <img src="img/download.jfif" style="width:100%;">
               <h5 class="text-center">We are employing for doctors</h5>
               <a href="apply.php">
                <button class="btn btn-success my-3" style="margin-left:30%;">Apply Now!!</button>
               </a>
             </div>
        </div>
    </div>
</div>

</body>
</html>
