<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>
	<?php
		// define variables and set to empty values
		$name = $password = $Ename = $Epassword = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  if(empty($_POST['username'])){
		  	$Ename = "Name is required";
		  }else{
		  	$name = test_input($_POST['username']);
		  }

		  if(empty($_POST['password'])){
		  	$Epassword = "password is required";
		  }else{
		  	$password = test_input($_POST['password']);
		  	if($password != 'admin'){
		  		header("Location: http://localhost:808/tugas4-php-Azzamjiul/login.php");
		  	}else{
		  		$_SESSION['username'] = $_POST['username'];
		  		$_SESSION['time']	= date("h:i:sa");
		  		header("Location: http://localhost:808/tugas4-php-Azzamjiul/welcome.php");
		  	}
		  }
		}

		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}

	?>
	<h2>Login Form</h2>
	<p><span class="error">* required field</span></p>

	<form action="" method="post">
		<label>Username</label>
		<input type="text" name="username" placeholder="type username here">
		<span class="error">* <?php echo $Ename; ?></span>
		<br><br>

		<label>Password</label>
		<input type="password" name="password" placeholder="type password here">
		<span class="error">* <?php echo $Epassword; ?></span>
		<br><br>

		<input type="submit" name="submit">
	</form>
</body>
</html>