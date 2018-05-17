<?php

if(isset($_POST["submit_out"])){
	session_start();
	session_unset();
	session_destroy();
	header("Location: ../index.php");
	exit();

}

?>