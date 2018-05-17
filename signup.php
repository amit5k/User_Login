<?php 
include_once 'header.php';
?>
	<section>
		<div class ="main-wrapper">
			<h2>SignUp</h2>
			<form  action="../signupinc.php" method="POST">
				<input type="text" name="fname" placeholder="Firstname">
				<input type="text" name="lname" placeholder="Lastname">
				<input type="text" name="email" placeholder="E-mail">
				<input type="text" name="uid" placeholder="Username">
				<input type="password" name="pass" placeholder="Password">
				<input type ="text" name= "check" placeholder="Retype Password">
				<button type ="submit" name="submit">Sign Up
				</button>
			</form>
		</div>	
		


	</section>
<?php 
include_once 'footer.php';
?>