<?php

session_start();

if(isset($_POST['submit'])){
	include  'dbinc.php';
	$uid = mysqli_real_escape_string($conn,$_POST['uid_b']) ;
    $pass = mysqli_real_escape_string($conn,$_POST['pass_b']) ;

//error handlers
     //check for empty fields
	if(empty($uid)||empty($pass)){
    	header("Location: ../index.php?login=empty");
	    exit();
    }
    //$sql="Select * from user_login where uid='$username'";
    else{
    	$sql ="select * from user_login where uid='$uid' OR email='$uid' ";
    	$result=mysqli_query($conn,$sql);
    	$result_check = mysqli_num_rows($result);
    	if($result_check<1){
    		header("Location: ../index.php?login=no_user");
    		exit();
    	}else{
    		if($row = mysqli_fetch_assoc($result)){
    			//DEhashing the password
    			$passCheck =password_verify($pass,$row['pass']);
    			if($passCheck ==false)
    			{
    				header("Location: ../index.php?login=error");
	                exit();
    			}
    			elseif($passCheck ==true){
    				//log in the user
    				$_SESSION['p_id']=$row['id'];
    				$_SESSION['f_name']=$row['fname'];
    				$_SESSION['l_name']=$row['lname'];
    				$_SESSION['e_mail']=$row['email'];
    				$_SESSION['u_id']=$row['uid'];
    				header("Location: ../index.php?login=success");
	                exit();
    			}
    		}
    	} 

    }

}
else {echo "please press submit button";
	header("Location: ../index.php?login=error");
	exit();
}

?>