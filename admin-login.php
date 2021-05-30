
<!-- remove underline from link - text-decoration:none

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
                position:relative;
                 color:white;
                font-family: "Lucida Console", "Courier New", monospace;
            }
            form{
                margin:150px 300px;
                height:500px;
            }
            p{
                color:white;
            }
            a{
                text-decoration: none;
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
             <center><h1>Admin Login</h1></center>
        <input type="text" name="gmail" placeholder="Enter your G-mail">
        <input type="password" name="password" placeholder="Enter your password">
        <center><button name="submit" value="submit">Login</button></center>
          <br>
        <br>
    </form>
<?php
      $conn = mysqli_connect("localhost", "root", "", "booking");
           if(isset($_POST["submit"]))
          {
             $password = $_POST["password"];
             $gmail = $_POST["gmail"];
                    if($gmail=="rprudhvi590@gmail.com" && $password=='prudhvi')
                    {
                        echo '<script>alert("Login Succesful")</script>';
                           //for redirection 
                         header('Location:add-doctor.php');
                    }
                    else{
                        echo '<script>alert("Invalid Details")</script>';
                    }
           }
           mysqli_close($conn);
?>

</body>



</html>