<?php

if(isset($_POST["registerbtn"]))
{

include("dbconnectx.php");

$fn = $_POST["fullname"];
$eid = $_POST["email"];
$pwd = md5($_POST["password"]);
$mob = $_POST["mobile"];

$qry = "INSERT INTO `registerx`(`id`, `fullname`, `email`, `password`, `mobile`) 
VALUES (NULL,'$fn','$eid','$pwd','$mob')";
$result = mysqli_query($connect, $qry);

if($result)
	{
		echo "Registration Success";
	}
	else{
		echo " Failed to Register.";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
        }
        .form-container {
            margin-bottom: 20px;
            color: #333;
            text-align: center
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group input:focus {
            outline: none;
            border-color: #007bff;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-5 mx-auto">
				<div class="card">
					<div class="card-header bg-danger text-light">
						<h3>Registrationx form</h3>
					</div>
					<div class="card-body">
						<form method="post">
							<div class="form-group">
								<label>Fullname</label>
								<input type="text" name="fullname" class="form-control">
							</div>
							<div class="form-group">
								<label>Email Id</label>
								<input type="email" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control">
							</div>
							<div class="form-group">
								<label>Mobile No</label>
								<input type="tel" name="mobile" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-success" type="submit" name="registerbtn">REGISTER</button>
							</div>
							<p>Already have an account <a href="loginx.php">Sign In</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>