<?php
  session_start();

 ?>


<!doctype html>
<html>
    <head>
        <title>Total Doctors</title>
    </head>
    <body>
        <?php
           include("../header.php");
           include("../connection.php");


         ?>

         <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2" style="margin-left: -30px;">
                        <?php 
                          include("sidenav.php");
                        ?>
                    </div>
                    <div class="col-md-10">
                        <h5 class="text-center">Total Patient</h5>
                        <?php
                        
                        $query = "SELECT * FROM patient ";
                        $res = mysqli_query($connect,$query);


                        $output = "";

$output .="
    
    <table class='table table-bordered'>
       <tr>
         <th>ID</th>
         <th>Firstname</th>
         <th>Surname</th>
         <th>Username</th>
         <th>Email</th>
         <th>Phone</th>
         <th>Gender</th>
         <th>Country</th>
         <th>Date Reg.</th>
        

       </tr>

";

if(mysqli_num_rows($res) < 1){
    $output .="
       <tr>
       <td colspan='10' class='text-center'>No Patient yet.</td>
       </tr>
    ";
}

while($row = mysqli_fetch_array($res)){
    $output .="
       <tr>
       <td>" .$row['id']."</td>
       <td>" .$row['firstname']."</td>
       <td>" .$row['surname']."</td>
       <td>" .$row['username']."</td>
       
       <td>" .$row['email']."</td>
       <td>" .$row['phone']."</td>
       <td>" .$row['gender']."</td>
       <td>" .$row['country']."</td>
       <td>" .$row['date_reg']."</td>
       <td>
         <div class='col-md-12'>
            <a href='view.php?id=".$row['id']."'>
                  <button class='btn btn-info'>View</button>
            </a>
           
         </div>

       </td>

       </tr>
    ";
}
   $output .= "
        </tr>
        </table>
   ";
   echo $output;            

                        ?>
                        
                    </div>
                </div>
            </div>
         </div>
    </body>
</html>