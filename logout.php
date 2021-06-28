<?php
	session_start();
	
	//niszczenie sesji
	session_unset();
	
	header('Location: logowanie.php');
?>
