<?php

session_start();
if(isset($_SESSION["uid"]))
{
	header("location:loginx.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>User page</h1>
</body>
</html>