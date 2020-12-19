 
 <?php

if(isset($_SESSION['username'])){
	$_SESSION['msg']="you must log in first to view this page";
   header('location:login.php');
 }

 if(isset($_GET['logout']))
 {
 	session_destroy();
 	unset($_SESSION['username']);
 	header('location:login.php');
 }

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	 <title> Home Page</title>
</head>
<body>
	<h2>Home page</h2>
    
<div>
	 <?php 
	 if(isset($_SESSION['success'])) : ?>
   
    	<h3>
    		<?php
    		echo "logged in successfully";
            unset($_SESSION['success']);
            ?>
        </h3>
</div>

   <?php endif ?>
   <?php if(isset($_SESSION['username'])) : ?>
   	  <h3> welcome <strong> <?php echo $_SESSION['username']; ?></strong></h3>
   	 <button><a href = "index.php?logout='1'"></a></button>
   	<?php endif ?>
</body>
</html>
