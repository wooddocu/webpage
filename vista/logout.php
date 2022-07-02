<?php
	session_destroy();
	
	if(headers_sent()){
		echo "<script> window.location.href='./admin.php?view=login_admin'; </script>";
	}else{
		header("Location: ./login_admin.php?view=login_admin");
	}