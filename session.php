<?php
	if (!isset($_SESSION)){
		session_start();
	}

	if(isset($_POST["logout"])){
		if($_POST["logout"] == "logout"){
			$_SESSION = NULL;
			session_destroy();
		}
	}
		
?>