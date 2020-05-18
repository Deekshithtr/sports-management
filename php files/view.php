<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sportsman";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$result = mysqli_query($conn,"SELECT * FROM registration");

echo "<table border='1'>
<tr>
<th>FIRSTNAME</th>
<th>LASTNAME</th>
<th>EVENTNAME</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['event'] . "</td>";
echo "</tr>";
}
echo "</table>";

$conn->close();
?>
<html>
    <head>
    <style>
        *{
            background-color: black;
            color: white;
            font-size: 30px;
        }
        table{
            margin-left: 40%;
            margin-top: 30px;
        }    
        a{
            text-decoration: none;
            font-size: 30px;
            margin-left: 80%;
        }
    </style>
    </head>
<body>
<a href="hme.php">back</a>
</body>
</html>
