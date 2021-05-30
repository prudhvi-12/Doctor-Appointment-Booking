<!--
    use optgroup to increase the size of options in select
-->
<?php
      session_start();
   //to remove warnings from appearing on web page
       error_reporting(0);
 ?>
<html>
<head>
         <style>
             @import url('https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Lobster&display=swap');
             body{
                 background-color:green;
                 margin:0px;
                 padding:0px;
             }
            form{
                margin:150px 300px;
                height:500px;
            }
            optgroup { 
                font-size:15px; 
            }
            select,input{
                height:25px;
                width:330px;
                margin:10px 340px;
            }
            button{
                height:30px;
                width:auto;
                border-radius:3px;
                 margin:10px;
            }
            h1{
                 color:white;
                font-family: "Lucida Console", "Courier New", monospace;
            }
            .topnav {
       overflow: hidden;
       background-color: #333;
        }

.topnav a{
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 95px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
img{
          position:absolute;
           height:90px;
           margin-left:300px;
        }
    .title{
          padding:40px 0px;
          height:100px;
          width:100%;
          background-color:white;
    }
    .logo{
      margin:0px 0px 0px 450px;
      padding-top:20px;
      font-size:50px;
      font-family: 'Lobster', cursive;
      color:black;
    }
         </style>
</head>
<body>
<div class="title"> 
      <img src="images/apollo.png" alt="apollo-logo"> 
      <h1 class="logo">Health Care Hospitals</h1>
      </div>
     <div class="topnav">
     <a href="update-details.php">Update Details</a>
     <a  class="active" href="book-appointment.php">Book Appointment</a>
     <a href="cancel-appointment.php">Cancel Appointment</a>
     <a href="view-myappointments.php">My Appointments</a>
     <a href="logout.php">Logout</a>
     </div>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <center><h1>Choose Time</h1></center> 
            <select name="tim" value="tim">
                <?php
                     $date=$_SESSION["date"];
                     $did=$_SESSION['did'];
                     $conn = mysqli_connect("localhost", "root", "", "booking");
                     $tim1="10:00 AM";
                     $sql="SELECT day,tim from appointment where day='$date' and tim='$tim1' and did='$did'";
                     $res=mysqli_query($conn,$sql);
                     if(mysqli_num_rows($res)==0)
                     {
                         ?>
                        <option value="<?php echo $tim1 ?>"><?php echo $tim1?>
                        </option>
                         <?php
                     }
                     $tim2="10:30 AM";
                     $sql="SELECT day,tim from appointment where day='$date' and tim='$tim2' and did='$did'";
                     $res=mysqli_query($conn,$sql);
                     if(mysqli_num_rows($res)==0)
                     {
                         ?>
                         <option value="<?php echo $tim2 ?>"><?php echo $tim2?></option>
                         <?php
                     }
                     $tim3="11:00 AM";
                     $sql="SELECT day,tim from appointment where day='$date' and tim='$tim3' and did='$did'";
                     $res=mysqli_query($conn,$sql);
                     if(mysqli_num_rows($res)==0)
                     {
                         ?>
                         <option value="<?php echo $tim3 ?>"><?php echo $tim3?></option>
                         <?php
                     }
                     $tim4="11:30 AM";
                     $sql="SELECT day,tim from appointment where day='$date' and tim='$tim4' and did='$did'";
                     $res=mysqli_query($conn,$sql);
                     if(mysqli_num_rows($res)==0)
                     {
                         ?>
                          <option value="<?php echo $tim4 ?>"><?php echo $tim4?></option>
                         <?php
                     }
                     $tim5="5:00 PM";
                     $sql="SELECT day,tim from appointment where day='$date' and tim='$tim5' and did='$did'";
                     $res=mysqli_query($conn,$sql);
                     if(mysqli_num_rows($res)==0)
                     {
                         ?>
                           <option value="<?php echo $tim5 ?>"><?php echo $tim5?></option>
                         <?php
                     }
                     $tim6="5:30 PM";
                     $sql="SELECT day,tim from appointment where day='$date' and tim='$tim6' and did='$did'";
                     $res=mysqli_query($conn,$sql);
                     if(mysqli_num_rows($res)==0)
                     {
                         ?>
                           <option value="<?php echo $tim6 ?>"><?php echo $tim6?></option>
                         <?php
                     }
                     $tim7="6:00 PM";
                     $sql="SELECT day,tim from appointment where day='$date' and tim='$tim7' and did='$did'";
                     $res=mysqli_query($conn,$sql);
                     if(mysqli_num_rows($res)==0)
                     {
                         ?>
                          <option value="<?php echo $tim7 ?>"><?php echo $tim7?></option>
                         <?php
                     }
                     $tim8="6:30 PM";
                     $sql="SELECT day,tim from appointment where day='$date' and tim='$tim8' and did='$did'";
                     $res=mysqli_query($conn,$sql);
                     if(mysqli_num_rows($res)==0)
                     {
                         ?>
                          <option value="<?php echo $tim8 ?>"><?php echo $tim8?></option>
                         <?php
                     }
                ?>
            </select>
            <center><button name="submit">Submit</button></center>
        </form>
         <?php
                if(isset($_POST["submit"]))
                {
                      $aid=NULL;
                      $pid=$_SESSION['id'];
                      $date=$_SESSION['date'];
                      $tim=$_POST["tim"];
                      $sql2="INSERT INTO appointment(aid,pid,did,day,tim) VALUES('$aid','$pid','$did','$date','$tim')";
                          if(mysqli_query($conn,$sql2))
                          {
                               ?> <script>alert('Appointment Booked Succesfully')</script>;
                               <?php
                               header('location:view-myappointments.php');
                          }
                          else{
                            ?> <script>alert('Error Booking Appointment')</script>;
                               <?php
                          }
                }
            mysqli_close($conn);
        ?>
</body>
</html>