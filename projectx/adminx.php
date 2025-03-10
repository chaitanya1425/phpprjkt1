<?php

if(isset($_POST["noticebtn"]))
{

$notice = $_POST["notice"];

$qry = "INSERT INTO `notice`(`notice`) VALUES ('$notice')";

mysqli_query($connect, $qry)

if
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
<h2>welcome Admin</h2>
<div class="container">
	<div class="row">
		<div class="col-md-6 mx-auto">
			<form method="post">
				<div class="form-group">
					<label>Add Notice</label>
					<textarea name="notice" placeholder="Enter notice here"></textarea>
					
				</div>
				<div class="form-group">
					<button class="btn btn-primary" name="noticebtn">Add</button>
				</div>
			</form>
		</div>
	</div>
	
</div>

</body>
</html>