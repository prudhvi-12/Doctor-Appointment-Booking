<!-- 
      For refreshing - header("Refresh:0");
      After refresh enter new page - header("Refresh:0; url=page2.php");
      session_start();  - TO START A SESSION FOR LOGIN
      with sql statements use single quotes  ex:- insert('$password')
      once after starting the session use $_SESSION['name']=username to use name in other pages
-->

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
                margin:20px 300px;
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
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
      <br>
             <center><h1>Sign Up</h1></center>
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
      <center><button name="submit" value="submit">Signup</button></center>
        <br>
    </form>
<?php

      $conn = mysqli_connect("localhost", "root", "", "booking");
           if(isset($_POST['submit'])) {
             $id=NULL;
             $name = $_POST["name"];
             $password = $_POST["password"];
             $gmail = $_POST["gmail"];
             $age = $_POST["age"];
             $gender = $_POST["gender"];
             $address = $_POST["address"];
        $sql ="INSERT INTO patient(name,password,gmail,age,gender,address,id) VALUES('$name','$password','$gmail','$age','$gender','$address','$id')";
              if(!empty($name) && !empty($password) && !empty($gmail) && !empty($gender) && !empty($address) && mysqli_query($conn,$sql))
              {
                echo '<script>alert("Account Creation Succesful")</script>';
                header('location:patient-login.php');
              }
              else{
                echo '<script>alert("Please fill the form completely")</script>';
              }
           }
           mysqli_close($conn);
?>

</body>



</html>