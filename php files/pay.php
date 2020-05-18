<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="sportsman";
$conn = new mysqli($servername, $username, $password,$db);
$id=$_GET['id'];
require "sess.php";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query1=mysqli_query($conn,"SELECT * FROM `register` WHERE registerno='".$_SESSION['regno']."'"); 
$row = mysqli_fetch_array($query1);
$query2=mysqli_query($conn,"SELECT * FROM `event` WHERE number=$id"); 
$row1= mysqli_fetch_array($query2);
//echo $row['credit'];
$fname=$row['firstname'];
$lname=$row['lastname'];
    $event=$row1['EVENTNAME'];
if($row1['fee'] <= $row['credit'])
{
$row['credit']=$row['credit']-$row1['fee'];
$sql ="UPDATE `register` SET `credit`='".$row['credit']."' WHERE registerno='".$_SESSION['regno']."'";
 
    $query4=mysqli_query($conn,"SELECT * FROM `registration`");
    $row2= mysqli_fetch_array($query4);
    if(!(($row2['firstname']==$fname) and ($row2['event']==$row1['EVENTNAME'])))
    {
        $query3=mysqli_query($conn,"INSERT INTO `registration`(`firstname`, `lastname`, `event`) VALUES ('$fname','$lname','$event')");
if ($conn->query($sql) === TRUE) {
        //echo '<script type="text/javascript">alert("successfully registered")</script>';
    ?><script>var a='<?php echo $row['credit']; ?>'
        alert("successfully registered\nbalance:" +a);
        </script>
<?php
    include 'userhme.php';
} 


}
    else{
    echo '<script type="text/javascript">alert("already registered")</script>';
    include 'userhme.php';
}
}
else {
        echo '<script type="text/javascript">alert("insufficient balance")</script>';
        include 'select.php';
}
$conn->close();
    
?>
