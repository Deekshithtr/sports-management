<html>
<head>
    <title>registration</title>
	<link rel="Stylesheet" href="register.css">
</head>
    <body>
<div class="form1">
    
    <form method="post" action="registercon.php" autocomplete="off">
	
<h1>Register</h1>
<label>First Name</label>
	<input type="text" class="firstname" name="firstname" required=""><br/>    
<label>Last Name</label>
	<input type="text" class="lastname" name="lastname"><br/> 
<label>Email</label>
	<input type="email" class="email" name="email"><br/> 
<label>DOB</label>
	<input type="date" class="dob" name="dob"><br/>
<label>Gender</label>
<input type="radio" class="gender" name="gender" value="male">male
<input type="radio" name="gender" class="gender" value="female">female<br/>
<label>Password</label>
	<input type="password" class="password" name="password"><br/>
	<input type="submit" name="submit" class="submit" value="submit"><br/> 
	</form>
</div>
    </body>
</html>
