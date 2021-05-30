<!-- 
      For refreshing - header("Refresh:0");
      After refresh enter new page - header("Refresh:0; url=page2.php");
      session_start();  - TO START A SESSION FOR LOGIN
      with sql statements use single quotes  ex:- insert('$password')
      once after starting the session use $_SESSION['name']=username to use name in other pages
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
                 margin:60px;
                 color:white;
                font-family: "Lucida Console", "Courier New", monospace;
            }
            form{
                margin:20px 100px;
            }
            body{
              background-color:green;
              margin:0px;
              padding:0px;
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
     <a class="active" href="update-details.php">Update Details</a>
     <a href="book-appointment.php">Book Appointment</a>
     <a href="cancel-appointment.php">Cancel Appointment</a>
     <a href="view-myappointments.php">My Appointments</a>
     <a href="logout.php">Logout</a>
     </div>
     <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
             <center><h1>Update Details</h1></center>
        <input type="text" name="name" placeholder="Enter your name">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="text" name="gmail" placeholder="Enter your E-mail">
       <input type="number" name="age"  placeholder="Enter your age">
       <select name="gender" value="gender">
       <option value="Male">Male</option>
       <option value="Female">Female</option>
       <option value="Others">Others</option>
       </select>
       <input type="text-area" name="address" placeholder="Enter your Address">
      <center><button name="submit" value="submit">Update</button></center>
         <br>
    </form>
<?php

      $conn = mysqli_connect("localhost", "root", "", "booking");
           if(isset($_POST['submit'])) {
             $id=$_SESSION['id'];
             $name = $_POST["name"];
             $password = $_POST["password"];
             $gmail = $_POST["gmail"];
             $age = $_POST["age"];
             $gender = $_POST["gender"];
             $address = $_POST["address"];
  $sql="UPDATE patient set name='$name',password='$password',gmail='$gmail',age='$age',gender='$gender',address='$address'  where id='$id'";
               if(mysqli_query($conn,$sql))
              {
                echo '<script>alert("Data Updated Succesfully")</script>';
              }
              else{
                echo '<script>alert("Please fill the details completely")</script>';
              }
           }
           mysqli_close($conn);
?>
</body>



</html>