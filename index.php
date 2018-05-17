<?php 
include_once 'header.php';
?>
	<section>
		<div class ="main-wrapper">
			<h2>Home</h2>
			<?php
			if(isset($_SESSION['p_id'])) 
				echo "your primary id is:".$_SESSION['p_id'];
			 ?>
		</div>	
		


	</section>
<?php 
include_once 'footer.php';
?>