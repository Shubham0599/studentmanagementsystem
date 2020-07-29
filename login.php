<?php
session_start();
if(isset($_SESSION['uid'])==1){
  header('location:admin/admindash.php');
}

 ?>
<html>
<body>
  <form action="login.php" method="post">
  <table border="1" cellpadding="2">
    <th colspan="2" >ADMIN LOGIN </th>
    <tr><td>username</td>
      <td><input type="text" name="username"></td></tr>
      <tr><td>password</td>
        <td><input type="password" name="password" placeholder="IT'S SECURE"></td>
      </tr>
      <tr><td colspan="2"><input type="submit" name="login" value="LOGIN"></td></tr>
  </table>
</form>
</body>
</html>
<?php
include('dbcon.php');
if(isset($_POST['login'])){
  $user=$_POST['username'];
  $pass=$_POST['password'];

  $qry="SELECT * FROM `admin` WHERE user='$user' AND pass='$pass'";
  $run=mysqli_query($con,$qry);
  $row=mysqli_num_rows($run);
  if($row<1){
    ?>
    <script>alert('Username or Password doesnot match');
    window.open('login.php','_self');
    </script>

    <?php
  }
  else{
    $data=mysqli_fetch_assoc($run);
    $id=$data['id'];
    session_start();
    $_SESSION['uid']=$id;
    header('location:admin/admindash.php');
  }
}


?>
