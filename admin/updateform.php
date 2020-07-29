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
<?php
include('../dbcon.php');
$sid=$_GET['sid'];
$qry="SELECT * FROM `student` WHERE `id`='$sid'";
$run=mysqli_query($con,$qry);
$data=mysqli_fetch_assoc($run);
 ?>
 <html>
 <body bgcolor="lightblue">
   <h1 align="center">Upate Student Details</h1>
   <form action="updateformend.php" method="post" enctype="multipart/form-data">
     <table border="1px solid lightgreen" width="50%" align="center" cellpadding="4px">
       <tr>
         <td>Name</td>
         <td ><input type="text" name="name" value="<?php echo $data['name'];?>" required></td>
       </tr>
       <tr>
         <td>Roll No.</td>
         <td><input  type="number" name="roll" value="<?php echo $data['roll'];?>" required></td>
       </tr>
       <tr>
         <td>Standard</td>
         <td><input  type="number" name="std" value="<?php echo $data['std'];?>" required></td>
       </tr>
       <tr>
         <td>Parent Contact No.</td>
         <td><input  type="number" name="pcontact" value="<?php echo $data['pcontact'];?>" required></td>
       </tr>
       <tr>
         <td>Address</td>
         <td><input  type="text" name="address" value="<?php echo $data['addres'];?>" required></td>
       </tr>
       <tr>
         <td>Student Image</td>
         <td><img src="../dataimg/<?php echo $data['img'];?>" style="width:50px;height:50px">
           <input  type="file" name="img" value="<?php echo $data['img'];?>" required></td>
       </tr>
       <tr><td colspan="2" align="center">
         <input type="hidden" name="sid" value="<?php echo $data['id'] ?>"/>
         <input name="submit" type="submit" value="Submit"></td></tr>
     </table>
   </form>
 </body>
 </html>
