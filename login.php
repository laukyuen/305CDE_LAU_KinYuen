<?php
    $hostname = "127.0.0.1";
	$username = "root";
	$password = "20080824";
	$connection = mysql_connect($hostname, $username, $password)
	or die("Could not open connection to database");

	mysql_select_db("lauky", $connection)
	or die("Could not select database");
	//$result = mysql_query("select * from personal where login='test'");
	
	
$method = $_SERVER['REQUEST_METHOD'];
echo $method;


switch ($method){
	
case 'GET':
$username=$_GET['username'];
$password=$_GET['pass'];
$checkid=mysql_query("SELECT * from personal WHERE username='$username' and password='$password'") or die("Could not issue MySQL query");

$records = mysql_num_rows($checkid);

if($records>0){
	echo "success";
	echo $result;
}else{
	
	echo "fail to login";
	return;
}


 break;

 

  default:

    rest_error($request); 

    break;
}
	?>