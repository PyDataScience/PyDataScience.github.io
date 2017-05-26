<?php

$USER_NAME = $_POST["username"];
$USER_PASSWD = $_POST["password"];

if ($USER_NAME=='nthu' && $USER_PASSWD=='1234'){
	header("location:indexAdmin.html");
}
else{
	header("location:index.html");
}

?>