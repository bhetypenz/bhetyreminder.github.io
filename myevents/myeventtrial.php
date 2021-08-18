<?php 

session_start();

  if(!isset($_SESSION['userlogin'])){
    header("Location: login.php");
  }

  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION);
    header("Location: mainpage.php");
  }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>My Events Reminder</title>

    
    <link rel="stylesheet" type="text/css"  href="css/myeventstyle.css">
    
    
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.autotab.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-custom.min.js"></script> 
    <script type="text/javascript" src="js/jquery.chained.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    
    <script type="text/javascript">
        jQuery(document).ready(function($){
          
          $("#eventreminder").chained("#eventreminder"); 
              
            $("#datepicker").datepicker({
              numberOfMonths: 1,
              buttonText: '<i class="fa fa-calendar"></i>',         
              prevText: '<i class="fa fa-chevron-left"></i>',
              nextText: '<i class="fa fa-chevron-right"></i>',      
              showButtonPanel: true
           });       
         });       
    </script>


      <div style="background: url(imageone.jpg)" class="jumbotron bg-cover text-white" height=560 width=100%>
          <div class="container py-5 text-center">
              <h1 class="display-4 font-weight-bold">Your Event Reminder</h1>
              <a href="myeventtrial.php?logout=true" role="button" class="btn btn-primary px-5">Log-Out</a>
          </div>
      </div>




  </head>

  <body>
      
      <?php require_once 'processtrial.php'; ?>

      <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-<?=$_SESSION['msg_type']?>">    
          <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </div>
      <?php endif ?>

      

      <div class="container p-2">
      <?php
          $mysqli = new mysqli('localhost','root','','myeventstrial') or die($mysqli_error($mysqli));
          $result = $mysqli->query("SELECT * FROM myevent") or die($mysqli->error);
          //pre_r($result->fetch_assoc());
          ?>

          <div class="row">
              <table class="table">
                <thead>
                  <tr>
                    <th>Event Date</th>
                    <th>Event Name</th>
                    <th>Reminder</th>
                    <th>In Days/Weeks/Month</th>
                    <th colspan="3">Action</th>
                  </tr>
                </thead>
                  <?php
                      while ($row = $result->fetch_assoc()): ?>
                          <tr>
                            <td><?php echo $row['datepicker']; ?></td>
                            <td><?php echo $row['eventname']; ?></td>
                            <td><?php echo $row['eventremindervalue']; ?></td>
                            <td><?php echo $row['eventreminder']; ?></td>
                            <td>
                              <a href="myeventtrial.php?edit=<?php echo $row['id']; ?>"
                                class="btn btn-info">Edit</a>
                                <a href="processtrial.php?delete=<?php echo $row['id']; ?>"class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                   <?php endwhile; ?>
              </table>
          </div>
          <?php

          function pre_r( $array ) {
            echo 'pre';
            print_r($array);
            echo '</pre>';
          } 

          ?>

            <div class="container-fluid">
            <h1></h1>
            <form action="processtrial.php" method="POST">
                
                <div class="row">
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                  <div class="col-md p-3">
                      <label class="field append-picker-icon">Event Date</label>  
                      <input type="text"  name="datepicker" value="<?php echo $datepicker; ?>" id="datepicker" class="form-control" placeholder="MM/DD/YYYY">
                  </div>
                  
                  <div class="col-md p-3">
                      <label class="field">Event Name</label>
                      <input type="text" name="eventname" value="<?php echo $eventname; ?>" id="eventname" class="form-control" placeholder="Enter the Name of Event" />
                  </div>
                  
                      <!--start of change-->
                      <div class="col-md p-3"> 
                      <label class="control-label">Set Reminder</label>
                      <select id="eventremindervalue" class="form-control" name="eventremindervalue">
                          <option value="<?php echo $eventremindervalue ?>">Set Reminder</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                      </select>
                    </div>
                     
                    <div class="col-md p-3">
                      <label class="control-label">Day/Weeks/Month</label>
                      <select id="eventreminder" class="form-control" name="eventreminder">
                          <option value="<?php echo $eventreminder ?>">Set Reminder</option>
                          <option value="Day">Day</option>
                          <option value="Week">Week</option>
                          <option value="Month">Month</option>
                      </select>
                    </div>

                    
                    
                    <div class="col-md p-3">
                        <label>Save Reminder</label> 
                        <?php
                          if ($update == true):
                        ?>                    
                            <button type="submit"  class="btn1 btn-dark" name="update">Update</button>
                        <?php else: ?> 
                            <button type="submit"  class="btn1 btn-primary" name="savereminder">Save</button>
                        <?php endif; ?>                    
                    </div>

                  </div>

                </form>

              </div>
          
          </div>



    
    </body>
</html>