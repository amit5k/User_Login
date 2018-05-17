<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<header>
		<nav>
			<div class ="main_wrapper">
				<ul>
					<li>
						<a href="../index.php">HOME</a>
					</li>
				</ul>
				<div class = "nav-login">
					<?php
					if(isset($_SESSION['p_id']))
					{
						echo '<form action = "logoutinc.php" method = "POST">
						<button type ="submit" name ="submit_out">Logout</button>

						</form>';
					}
					else{
						echo '<form action="logininc.php" method="POST" >
						<input type="text" name="uid_b" placeholder="Username/E-mail">
						<input type="password" name="pass_b" placeholder="Password">
						<button type="submit" name= "submit">
							Login
							
						</button>
					</form>';
					}
                      
					?>
					
					<a href="../signup.php"> Sign up</a>
				</div>
			</div>
			
		</nav>
	</header>