<?php

if(isset($_POST['submit'])){
include('dbcon.php');
$roll=$_POST['rollno'];
$std=$_POST['std'];
$qry="SELECT * FROM `student` WHERE `roll`='$roll' AND `std`='$std'";
$run=mysqli_query($con,$qry);
?>
<table border="1" backgroundcolor="black" color="white" align="center" width="70%" margin-top="20px">
  <tr>
    <td>sl/no.</td>
    <td>Name</td>
    <td>Student Image</td>
    <td>Roll No.</td>
    <td>Standard</td>
    <td>Parent Contact No.</td>
    <td>Address</td>

  </tr>
  <tr>
<?php
if(mysqli_num_rows($run)<1){
  ?>
  <td colspan="7">No Result found</td></tr>
    <?php
}
else{
  $count=0;
  while($data=mysqli_fetch_assoc($run)){
    $count++;
    ?>
    <tr>
      <td><?php echo "$count" ;?></td>
      <td><?php echo $data['name'];?></td>
      <td ><img class="stlimg" src="dataimg/<?php echo $data['img'] ;?>"/></td>
      <td><?php echo $data['roll'];?></td>
      <td><?php echo $data['std'];?></td>
      <td><?php echo $data['pcontact'];?></td>
      <td><?php echo $data['addres'];?></td>

     <?php

  }
}

}

 ?>
