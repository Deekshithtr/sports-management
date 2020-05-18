<?php 

	// connect to database
	$db=new mysqli('localhost','root','','sportsman');
    if ($db->connect_error)
    {
        die("connection failed".$db->connect_error);
    }
	// REGISTER USER
	 
		// receive all input values from the form
		$firstname =$_POST['firstname'];
        $lastname =$_POST['lastname'];
        $dob =$_POST['dob'];
        $password =$_POST['password'];
        $gender =$_POST['gender'];
		$email_id =$_POST['email'];
		$password =$_POST['password'];
		$gender=$_POST['gender'];
        $credit=1000;
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
    
    if(!array_key_exists('password',$_POST))
        die('no password specified');
    $password = trim($_POST['password']);
     if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8)
            {
            
            echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
               die('');
            }
            else{
            //echo 'Strong password';
            }
             
$query="INSERT INTO `register`(`firstname`, `lastname`, `email`, `dob`, `password`, `gender`,`credit`) VALUES ('$firstname','$lastname','$email_id','$dob','$password','$gender','$credit')";
if ($db->query($query) === TRUE) {
 echo '<script type="text/javascript">alert("succesfully registered")</script>';
    include 'login.php';
}
else {
    echo '<script type="text/javascript">alert("please provide correct details")</script>';
    include 'register.php';
}

?>