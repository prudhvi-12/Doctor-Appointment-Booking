<!--
    use optgroup to increase the size of options in select
-->
<?php
        session_start();
   //to remove warnings from appearing on web page
       if(!isset($_SESSION['id']))
         header("location:patient-login.php");
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
            <center><h1>Choose Date</h1></center> 
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
           <input  class="datepicker" type="date" name="date" value="date">
            <center><button name="submit" value="submit">Select</button></center>
        </form>
         <?php
                    if(isset($_POST["submit"]))
                    {
                      $rawdate=$_POST['date'];
                  //convert date into form which can be stored in database
                      $date=date('Y-m-d', strtotime($rawdate));
                        $_SESSION["date"]=$date;
                               header('location:select-time.php');
                    }
            mysqli_close($conn);
        ?>
</body>
</html>