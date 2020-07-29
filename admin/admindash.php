<?php
session_start();
if(isset($_SESSION['uid'])){

}
else{
  header('location:../login.php');
}
 ?>
 <html>
 <body>
  <div class="container">
    <div class="head">
    <h1>Admin Dashbord</h1>
    <a class="logout" href="../logout.php">Logout</a>
  </div>
  <div class="options">
    <div class="op"><a href="addstudent.php"><h2>Insert Student Details</h2></a></div>
    <div class="op2"><a href="updatestudent.php"><h2>Update Student Details</h2></a></div>
    <div class="op"><a href="deletestudent.php"><h2>Delete Student Details</h2></a></div>
  </div>

  </div>
 </body>
 <style>
 .container{
   font-size: 24px;
   line-height: 1.2rem;

 }
 .head{
   background-color: lightgrey;
   display:flex;
   width:100%;
   justify-content: center;
   text-align: center;
 }
 .logout{

   position: absolute;
   top:19px;
   right:30px;
   text-decoration:none;
   font-size: 22px;
   z-index:2;
 }
 .options,a{
   color:darksilver;
   position: relative;
   top:105px;

 }
.options{
  position: relative;
  top:10px;
  width:100%;
  height:300px;
  border:1px solid red;
  background: lightblue;

  justify-content: center;
  display:flex;
}
.op2{
  height:inherit;
  justify-content: center;
  width:30%;
  text-align: center;
}
.op{
  height:inherit;
  justify-content: center;
     text-decoration:none;
  background-color: lightyellow;
width:30%;

  text-align: center;
}

 </style>

 </html>
