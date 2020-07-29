<?php
session_start();
if(isset($_SESSION['uid'])){
  echo "";
}
else{
  header('location:../login.php');
}

?>
<?php
if(isset($_POST['submit'])){
 include('../dbcon.php');
 $id=$_POST['sid'];
 $nam=$_POST['name'];
 $roll=$_POST['roll'];
 $std=$_POST['std'];
 $pcontact=$_POST['pcontact'];
 $address=$_POST['address'];
 $imagename=$_FILES['img']['name'];
 $tempname=$_FILES['img']['tmp_name'];
 move_uploaded_file($tempname,"../dataimg/$imagename");

 $qry="UPDATE `student` SET `name` = '$nam', `roll` = '$roll', `std` = '$std', `pcontact` = '$pcontact', `addres` = '$address',`img`='$imagename' WHERE `id` = '$id'";
 $run=mysqli_query($con,$qry);
 if($run===true){
   ?>
   <script>
   alert("Record updated sussfully");
   window.open ('updateform.php?sid=<?php echo $id;?>','_self');
   </script>
   <?php

 }
else{
 echo "$con->error()";
}
}
 ?>
