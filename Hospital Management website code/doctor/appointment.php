<?php

  session_start();

 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Total Appointment</title>
</head>
<body>
     <?php

        include("../header.php");
        include("../Connection.php");
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
      				<h5 class="text-center my-2">Total Appointment</h5>
                    <?php 
                      $query = "SELECT * FROM appointment WHERE status='Pendding'";
                      $res = mysqli_query($connect,$query);
                      $output = "";
                      $output .="
                         <table class='table table-bordered'>
                         <tr>
                           <td>ID</td>
                           <td>Firstname</td>
                           <td>Surname</td>
                           <td>Gender</td>
                           <td>Phone</td>
                           <td>Appointment Date</td>
                           <td>Symptoms</td>
                           <td>Date Booked</td>

                         </tr>



                      ";

                      if(mysqli_num_rows($res) < 1){
                        $output .="
                           <tr>
                           <td class='text-center' colspan='8'>No Appointment Yet</td>
                           </tr>



                        ";
                      }
                      while($row = mysqli_fetch_array($res)) {
                        $output .="
                        <tr>
                           <td>".$row['id']."</td>
                           <td>".$row['firstname']."</td>
                           <td>".$row['surname']."</td>
                           <td>".$row['gender']."</td>
                           <td>".$row['appointment_date']."</td>
                           <td>".$row['symptoms']."</td>
                            <td>".$row['date_booked']."</td>
                            <td>
                            <a href = 'discharge.php?id=".$row['id']."'>
                              <button class='btn btn-info'>Check</button>
                            </a>
                            </td>


                        </tr>
                        </table>



                        ";
                      }

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

      				