<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sportsman";
// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
    if ($db->connect_error)
    {
        die("connection failed".$db->connect_error);
    }
 $result = mysqli_query($db,"SELECT * FROM event");
echo "<form action='pay.php' method='post'>";
echo "<table border='1' cellspacing='10'>
<tr>
<th>Event name</th>
<th>Details</th>
<th>venue</th>
<th>date</th>
<th>fee</th>
<th>register</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['EVENTNAME'] . "</td>";
echo "<td>" . $row['DETAILS'] . "</td>";
    echo "<td>" . $row['VENUE'] . "</td>";
    echo "<td>" . $row['DATE'] . "</td>";
     echo "<td>" . $row['fee'] . "</td>";?>
    <td><button type='submit'><a href='pay.php?id=<?php echo $row['number'];?>'>register</button></td><?php
echo "</tr>";
}
echo "</table>";
echo "</form>";
$db->close();
?>
<html>
<head>
    <style>
        body{
            background-color: black;
            color: white;
        }
        table{
            margin-left: 25%;
        margin-top: 200px;
        font-size: 30px;    
        }
        tr,th,td{
            border-color: transparent;
            text-align: center;
        }
        .back
        {
            margin-left: 85%;
        }
        .back a{
            color: white;
            font-size: 30px;
            text-decoration: none;
        }
        .back a:hover{
            color: darkgray;
        }
    </style>
    </head>
    <body>
        <div class="back">
        <a href="userhme.php">back</a></div>
</body>
</html>