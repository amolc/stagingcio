<?php 
	session_start(); 
	// session_destroy();
	unset($_SESSION['username']);
	unset($_SESSION['user_name']);
	unset($_SESSION['cio']);
	unset($_SESSION['ict']);
	header('Location: index.php');

 ?>		