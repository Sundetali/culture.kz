<?php 
	  session_start();
	  $vname = null;
	  $servername = "localhost";
	  $username = "root";
	  $password = "";
	  $dbname = "hack";

	  $conn = new mysqli($servername, $username, $password, $dbname);
?>