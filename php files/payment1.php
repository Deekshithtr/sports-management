 <?php
$con = mysqli_connect("localhost","root","","sportsman") or die(mysql_error());
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MS TRAVELS</title>
</head>
<body>
    <div id="wrapper">
      <form method="post" action="payment1.php"> 
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            PAYMENT <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           DEBIT CARD
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
 
                                             <label>card_no</label>
                                            <input type="number" name="card_no" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>accountholder</label>
                                            <input type="text" name="accountholder" class="form-control" required>
                                            
                                            
                               </div>
							   <div class="form-group">
                                             <label>expire_date</label>
                                            <input type="date" name="expire_date" class="form-control" required >
                                            
                               </div>
							   <div class="form-group">
                                             <label>cvv</label>
                                            <input type="text" name="cvv" class="form-control" required>
                                            
                         
                                </div>
							<button type="submit">pay</button>
							   
                            </div>
                        
                    </div>
                </div>
				
				
                
                    </form>
						<?php
							if(isset($_POST['submit']))
							{
							$code1=$_POST['code1'];
							$code=$_POST['code']; 
							if($code1!="$code")
							{
							$msg="Invalide code"; 
							}
							else
							{
							
									$con=mysqli_connect("localhost","root","","sportsman");
									
										$newUser="INSERT INTO `payment`(`card_no`, `accountholder`, `expire_date`, `cvv`) VALUES ('$_POST[card_no]','$_POST[accountholder]','$_POST[expire_date]','$_POST[cvv]')";
										if (mysqli_query($con,$newUser))
										{
											 header('location: userhome.php');
											
										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
											
										}
									}

							$msg="Your code is correct";
							}
							
							?>
						 </div>
           
                
                </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
  
    
   
</body>
</html>
