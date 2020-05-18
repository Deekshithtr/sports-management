<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="sportsman";
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['email']))
{
    session_start();
    $uname=$_POST['email'];
    $pass=$_POST['password'];
    $_SESSION['email']=$uname;
    $sql="SELECT * FROM `register` WHERE email='".$uname."' AND password='".$pass."' limit 1 ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1) 
    {
        $row=mysqli_fetch_array($result);
        $_SESSION['regno']=$row[6];
        if($row['role']=='admin')
        {
	       include 'hme.php';
        }
        else
        {
 
	   include 'userhme.php';
        }
    }
    else
    {
        echo '<script type="text/javascript">alert("invalid username/password")</script>';
        include 'login.php';
    }
}
?>
