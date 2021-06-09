<html>
<head>
    <style>
           @import url('https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Lobster&display=swap');
           @import url('https://fonts.googleapis.com/css2?family=Mate+SC&display=swap');
             body{
                 margin:0px;
                 padding:0px;
             }
            
            h1{
                 color:black;
                 font-family: 'Lobster', cursive;
            }
              h2{
                color:black;
                font-family: 'Mate SC', serif;
              }
            .topnav {
                overflow: hidden;
                background-color: #333;
           }
            .topnav a{
                 float: left;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 230px;
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
           .side{
             display:inline;
           }
      .web{
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
        margin:100px 0px;
    }
    img{
       margin:0px 90px;
    }
    .small img{
        margin:0px 150px;
    }
    .large{
      width:100%;
      margin:0px;
    }
    .background{
      padding:100px 0;
      background-color:#8080801a;
    }
    .reviews{
      background-color:#8080801a;
      padding:100px 0;
    }
    .reviews table{
      border-collapse:collapse;
      margin:30px;
    }
    .reviews td{
       width:1530px;
       text-align:center;
        border:1px solid black; 
    }
  .contact  img{
     margin-left:250px;
  }
    </style>
</head>
<body>
     <div class="title"> 
      <img class="web"src="images/apollo.png" alt="apollo-logo"> 
      <h1 class="logo">Health Care Hospitals</h1>
      </div>
     <div class="topnav">
     <a href="admin-login.php">Admin</a>
     <a href="doctor-login.php">Doctor</a>
     <a href="patient-login.php">Patient</a>
     </div>
     <img class="large" src="images/seven.jpg">
     <div>
    <table>
       <tr>
       <td><img src="images/first.png"></td>
       <td><img src="images/second.png"></td>
       <td><img src="images/third.png"></td>
       </tr>
    </table>
    </div>
    <center><h1>Awards and Acheivements</h1></center>
    <table class="small">
       <tr>
       <td>
       <img src="images/four.jpg">
       </td>
       <td>
       <img src="images/five.jpg">

       </td>
       <td><img src="images/six.jpg"></td>
       </tr>
    </table>
    <div class="reviews">
    <center><h1>Reviews</h1></center>
    <table>
        <tr> 
          <td><h2>Dr.RamaDevi,Hyderabad.</h2></td>
          <td><h2>I have immense pleasure in appending my beautiful experience as a patient at your esteemed institution.The utmost care I have received enabled me to refer many more patients to your hospital for treatment...</h2></td>
        </tr>
        <tr> 
          <td><h2>Mrs. KumardaraniIndia,Bangalore.</h2></td>
          <td><h2>I would like to thank you, with the deepest gratitude for you excellent care of me during my illness with dengue fever. I feel truly overwhelmed by your kindness....</h2></td>
        </tr>
    </table>
    </div>
      <div class="contact">
       <center><h1>Contact Us</h1></center>
       <table>
         <tr>
           <td><img src="images/fb.png" alt=""></td>
           <td><img src="images/insta.png" alt=""></td>
           <td><img src="images/twitter.png" alt=""></td>
         </tr>
       </table>
       </div>
</body>
</html>