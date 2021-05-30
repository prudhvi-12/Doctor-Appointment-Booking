<!-- 
      For refreshing - header("Refresh:0");
      After refresh enter new page - header("Refresh:0; url=page2.php");
      session_start();  - TO START A SESSION FOR LOGIN
      with sql statements use single quotes  ex:- insert('$password')
      once after starting the session use $_SESSION['name']=username to use name in other pages
            border-collapse:true to remove double border in tables

-->
<?php
  #to remove warnings
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
  padding: 14px 105px;
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
       color:white;
         font-size:large;
         font-family: "Lucida Console", "Courier New", monospace;
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
     <a href="add-doctor.php">Add Doctor</a>
     <a class="active" href="view-doctor.php">View Doctor</a>
     <a href="view-patient.php">View Patient</a>
     <a href="view-appointments.php">View Appointments</a>
     <a href="logout.php">Logout</a>
     </div>
     <center><h1>View Doctor</h1></center>
<?php

      $conn = mysqli_connect("localhost", "root", "", "booking");
        $sql ="SELECT id,name,gmail,address,dept from doctor";
            $res=mysqli_query($conn,$sql);
              if(mysqli_num_rows($res)>0)
              { ?>
                <table>
                <tr>
                    <th><p>Name</p></th>
                    <th><p>Name</p></th>
                    <th><p>Gmail</p></th>
                    <th><p>Address</p></th>
                    <th><p>Department</p></th>
                </tr>
                <?php
                  while($row=mysqli_fetch_assoc($res)){
                   ?>
                       <tr>
                           <td><p><?php echo $row['id'];?></p></td>
                           <td><p><?php echo $row['name'];?></p></td>
                           <td><p><?php echo $row['gmail'];?></p></td>
                           <td><p><?php echo $row['address'];?></p></td>
                           <td><p><?php echo $row['dept'];?></p></td>
                       </tr>  
                   <?php
                  }
                  ?>
                   </table>
                   <?php
              }
              else{
               ?><script>alert("No Doctor")</script>';
               <?php
              }
           mysqli_close($conn);
?>

</body>



</html>