<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sportsman";
require "sess.php";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$res=mysqli_query($conn,"SELECT * FROM `register` WHERE registerno='".$_SESSION['regno']."'");

while($row=mysqli_fetch_array($res)){
  $fname=$row['firstname'];
   $lname=$row['lastname'];
   $dob=$row['dob'];
   $gender=$row['gender'];
   $password=$row['password'];
   $email=$row['email'];

}

?>


<html>
<head>
<title>Update</title>
    <link rel="Stylesheet" href="register.css">
</head>
  <body>
      <div class="form2">
    <h2>Edit Profile</h2>
<form method="post" action="update1.php" autocomplete="off">
<label>First Name</label>
	<input type="text" class="firstname" name="firstname" value="<?php echo $fname;?>" required=""><br/>    
<label>Last Name</label>
	<input type="text" class="lastname" name="lastname" value="<?php echo $lname;?>"><br/> 
<label>Email</label>
	<input type="email" class="email" name="email" value="<?php echo $email;?>"><br/> 
<label>DOB</label>
	<input type="date" class="dob" name="dob" value="<?php echo $date;?>"><br/>
<label>Gender</label>
<input type="radio" class="gender" name="gender" value="male" >male
<input type="radio" name="gender" class="gender" value="female">female<br/>
<label>Password</label>
	<input type="password" class="password" name="password" value="<?php echo $password;?>"><br/>
	<input type="submit" name="submit" class="submit" value="submit"><br/> 
</div>
  <?php
  if(isset($_POST["submit"]))
  {
      mysqli_query($conn,"update register set firstname='$_POST[firstname]',lastname='$_POST[lastname]',email='$_POST[email]',dob='$_POST[dob]',gender='$_POST[gender]' where registerno='".$_SESSION['regno']."'");
      header('Location:userhme.php');
      
    }?>
    </form>
<div class='back'>
  <a href="userhme.php">back</a>
  </div>
  </body>
</html>