<?php 

	// connect to database
	$db=new mysqli('localhost','root','','sportsman');
    if ($db->connect_error)
    {
        die("connection failed".$db->connect_error);
    }
	// REGISTER USER
	 
		// receive all input values from the form
		$Eventname =$_POST['Eventname'];
        $Details =$_POST['Details'];
        $Date =$_POST['Date'];
        $venue =$_POST['venue'];
        $fee =$_POST['fee'];
$query="INSERT INTO `event`(`EVENTNAME`, `DETAILS`, `DATE`, `VENUE`, `fee`) VALUES ('$Eventname','$Details','$Date','$venue','$fee')";
if ($db->query($query)) {
 echo '<script type="text/javascript">alert("succesfully registered")</script>';
    include 'hme.php';
}
else {
    echo '<script type="text/javascript">alert("please provide correct details")</script>';
    include 'event.php';
}

?>
