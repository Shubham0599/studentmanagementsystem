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
include('../dbcon.php');
$sid=$_GET['sid'];
$qry="DELETE FROM `student` WHERE `id`='$sid';";
$run=mysqli_query($con,$qry);
if($run===true){
  ?>
  <script>
  alert("Data Deleted successfully");
  window.open ('deletestudent.php','_self');
  </script>
  <?php

}
else{
echo "$con->error()";
}

?>
