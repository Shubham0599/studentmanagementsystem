<?php
include('btd.php');
session_start();
if(isset($_SESSION['uid'])){
  echo "";
}
else{
  header('location:../login.php');
}
 ?>

 <h1 align="center">Update Student</h1>
     <table align="center"  border="1" width="400px">
 <form action="updatestudent.php" method="post">

     <tr><th>Standard</th>
       <td><input type="number" placeholder="Class Studing" name="std"></td></tr>
     <tr><th>Name</th>
         <td><input type="text" placeholder="Student Name" name="name"></td></tr>
     <tr>
           <td colspan="2" align="center"><input type="submit" value="Search" name="submit"></td></tr>
           </form>
         </table>
  <table border="1" backgroundcolor="black" color="white" align="center" width="70%" margin-top="20px">
    <tr>
      <td>sl/no.</td>
      <td>Name</td>
      <td>Student Image</td>
      <td>Roll No.</td>
      <td>Standard</td>
      <td>Parent Contact No.</td>
      <td>Address</td>
      <td>Edit</td>
    </tr>
    <tr>


<br>
       <?php
       include('../dbcon.php');
       if(isset($_POST['submit'])){
         $std=$_POST['std'];
         $name=$_POST['name'];
         $qry="SELECT * FROM `student` WHERE `std`='$std' AND `name`LIKE '%$name%'";
         $run=mysqli_query($con,$qry);
         if(mysqli_num_rows($run)<1){
           ?>
           <td colspan="8">No Result found</td><tr>
             <?php
         }
         else{
           $count=0;
           while($data=mysqli_fetch_assoc($run)){
             $count++;
             ?>
             <tr>
               <td><?php echo "$count" ?></td>
               <td><?php echo $data['name'];?></td>
               <td ><img class="stlimg" src="../dataimg/<?php echo $data['img'] ?>"/></td>
               <td><?php echo $data['roll'];?></td>
               <td><?php echo $data['std'];?></td>
               <td><?php echo $data['pcontact'];?></td>
               <td><?php echo $data['addres'];?></td>
               <td><a href="updateform.php?sid=<?php echo $data['id']; ?>">Edit</a></td></tr>
              <?php

           }
         }
       }

       ?>
     </table>
     <style>
       .stlimg{
         max-width:200px;

       }
     </style>
