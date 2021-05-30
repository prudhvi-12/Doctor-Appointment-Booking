<!-- 
      For refreshing - header("Refresh:0");
      After refresh enter new page - header("Refresh:0; url=page2.php");
      session_start();  - TO START A SESSION FOR LOGIN
      with sql statements use single quotes  ex:- insert('$password')
      once after starting the session use $_SESSION['name']=username to use name in other pages
-->
<?php
session_start();
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
            input,select,option{
                height:50px;
                width:500px;
                display:block;
                margin:20px auto;
                padding:10px;
            }
            button{
                height:30px;
                width:auto;
                border-radius:3px;
                 margin:10px;
            }
            h1{
                margin-top:100px;
                 color:white;
                font-family: "Lucida Console", "Courier New", monospace;
            }
            form{
                margin:50px 100px;
            }
     .topnav {
       overflow: hidden;
       background-color: #333;
        }

.topnav a{
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 148px;
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
     table{
         margin:10px auto;
         border-collapse: collapse;
     }
     td,th{
         padding:20px;
         border: 1px solid white;
     }
     p{
         font-size:large;
         font-family: "Lucida Console", "Courier New", monospace;
         color:white;
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
     <a href="update-detailsdoc.php">Update Details</a>
     <a class="active" href="add-prescription.php">Add Presciption</a>
     <a href="view-myappointmentsdoc.php">My Appointments</a>
     <a href="logout.php">Logout</a>
     </div>
     <center><h1>Add Prescription</h1></center>
     <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="aid" placeholder="Enter Appointment Id">
        <input type="text-area" name="prescription" placeholder="Enter Prescription">
       <center> <button name="submit">Submit</button> </center>
     </form>
      <br>
<?php
      $conn = mysqli_connect("localhost", "root", "", "booking");
               if(isset($_POST["submit"])){
                $aid=$_POST['aid'];
                $prescription=$_POST['prescription'];
  $sql="UPDATE appointment set prescription='$prescription' where aid='$aid'";
              if(mysqli_query($conn,$sql))
              {
                echo '<script>alert("Prescription Added Succesfully")</script>'; 
                header('location:view-myappointmentsdoc.php'); 
              }
              else{
                echo '<script>alert("Error Adding Prescription")</script>';
              }
            }
           mysqli_close($conn);
?>
</body>
</html>