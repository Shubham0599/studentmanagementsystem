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
 <html>
 <body bgcolor="lightgrey">
   <h1 align="center">Insert Student Details</h1>
   <form action="addstudent.php" method="post" enctype="multipart/form-data">
     <table border="1px solid lightgreen" width="50%" align="center" cellpadding="4px">
       <tr>
         <td>Name</td>
         <td ><input type="text" name="name" placeholder="Enter Student name" required></td>
       </tr>
       <tr>
         <td>Roll No.</td>
         <td><input  type="number" name="roll" placeholder="Enter Student Roll No." required></td>
       </tr>
       <tr>
         <td>Standard</td>
         <td><input  type="number" name="std" placeholder="Standard" required></td>
       </tr>
       <tr>
         <td>Parent Contact No.</td>
         <td><input  type="number" name="pcontact" placeholder="Phone NO." required></td>
       </tr>
       <tr>
         <td>Address</td>
         <td><input  type="text" name="address" placeholder="Enter student address" required></td>
       </tr>
       <tr>
         <td>Student Image</td>
         <td><input  type="file" name="img"  required></td>
       </tr>
       <tr><td colspan="2" align="center"><input name="submit" type="submit" value="Submit"></td></tr>
     </table>
   </form>
 </body>
 </html>
 <?php
if(isset($_POST['submit'])){
   include('../dbcon.php');
  $nam=$_POST['name'];
  $roll=$_POST['roll'];
  $std=$_POST['std'];
  $pcontact=$_POST['pcontact'];
  $address=$_POST['address'];
  $imagename=$_FILES['img']['name'];
  $tempname=$_FILES['img']['tmp_name'];
  move_uploaded_file($tempname,"../dataimg/$imagename");
  $qry="INSERT INTO `student` (`name`, `roll`, `std`, `pcontact`, `addres`,`img`)
   VALUES ('$nam','$roll','$std','$pcontact','$address','$imagename')";
  $run=mysqli_query($con,$qry);
  if($run===true){
    ?>
    <script>
    alert("Record Inserted sussfully");
    </script>
    <?php
  }
else{
  echo "$con->error()";
}
}
  ?>
