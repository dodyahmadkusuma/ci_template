<?php 
	$conn=mysql_connect("localhost", "root", "");
	mysql_select_db("www");
	
$user = $_POST['user'];
$pass = $_POST['pass'];

$sql="select * from login where user = '{$user}'";
$query = mysql_query($sql);
if (mysql_num_rows($query) == 1 ) {
	$dataLoginDB = mysql_fetch_array($query);
	if ($pass == $dataLoginDB['password']) {
		$_SESSION['userdata'] = $dataLoginDB;
		header('Location: dashboard/'); 
	}else {
		header('Location: index.php');
	}
}else {
	header('Location: index.php');
}


 ?>