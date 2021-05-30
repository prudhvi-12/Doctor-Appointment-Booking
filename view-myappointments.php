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
  padding: 14px 100px;
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
    table{
       margin-bottom:250px;
     }
         </style>
</head>
<body>

       <div class="title">
<img src="images/apollo.png" alt="apollo-logo"> 
      <h1 class="logo">Health Care Hospitals</h1>
      </div>
<div class="topnav">
     <a  href="update-details.php">Update Details</a>
     <a href="book-appointment.php">Book Appointment</a>
     <a href="cancel-appointment.php">Cancel Appointment</a>
     <a class="active" href="view-myappointments.php">My Appointments</a>
     <a href="logout.php">Logout</a>
     </div>
     <center><h1>My Appointments</h1></center>
        <br>
<?php
      $conn = mysqli_connect("localhost", "root", "", "booking");
                $id=$_SESSION['id'];
  $sql="SELECT doctor.name,doctor.dept,appointment.aid,appointment.day,appointment.tim from doctor inner join appointment on doctor.id=appointment.did and appointment.pid='$id'";
            $res=mysqli_query($conn,$sql);
              if(mysqli_num_rows($res)>0)
              {
                ?>
                <table>
                <tr>
                    <th><p>App Id</p></th>
                    <th><p>Doctor Name</p></th>
                    <th><p>Department</p></th>
                    <th><p>App Date</p></th>
                    <th><p>App Time</p></th>
                    <th><p>Prescription</p></th>
                </tr>
                <?php
                 while($row=mysqli_fetch_assoc($res))
                {
                   ?>
                       <tr>
                          <td><p><?php echo $row['aid'];?></p></td>
                           <td><p><?php echo $row['name'];?></p></td>
                           <td><p><?php echo $row['dept'];?></p></td>
                           <td><p><?php echo $row['day'];?></p></td>
                           <td><p><?php echo $row['tim'];?></p></td>
                           <td><p><?php echo $row['prescription'];?></p></td>
                       </tr>  
                  <?php
                }
                ?>
                </table>
                <?php
            }
              else{
                echo '<script>alert("No Appointments")</script>';
              }
           mysqli_close($conn);
?>

</body>
</html>