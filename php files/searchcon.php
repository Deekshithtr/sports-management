<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sportsman";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
$search=$_POST['search'];
$sql="SELECT * FROM `register` WHERE firstname='".$search."'";
$result = mysqli_query($conn,$sql);
echo "<table border='1'>
<tr>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>EMAIL</th>
<th>DOB</th>
<th>GENDER</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo"hello";
echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['dob'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "</tr>";
}
echo "</table>";
$conn->close();
?>
