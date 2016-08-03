<?php
// login datebase
$hostname = "localhost";
$username = "root";
$password ="20080824";
$connection = mysql_connect($hostname, $username, $password) or die("Could not open connection to database");

$method=$_SERVER["REQUEST_METHOD"];
	    
	    $username=$_POST['usid'];
	    $password=$_POST['pwid'];
		$email=$_POST['elid'];
     	  
		    mysql_select_db("lauky", $connection) or die("Could not select database");
			
			$result = mysql_query("INSERT INTO personal(Username,Password,Email) VALUES ('$username','$password','$email')") or die("Could not issue MySQL query");
			echo $result;
?>