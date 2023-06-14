<?php 
	session_start();


	
	if (!empty($_POST['submit'])) {
		# code...
		include 'connection.php';
		$sql = "SELECT * FROM users WHERE username='" . $_POST["uname"] ."' and passwd = '". sha1($_POST["passwd"]) . "'";
		$result=$db->query($sql);

		// if ($_POST[uname] == 'abul' and $_POST['passwd'] == 'p') {
		if ($row= $result->fetch_assoc()) {
			$_SESSION['is_login'] = true;
			$_SESSION['name'] = $_POST[uname];
			header('Location: secret.php');
			die('passed :)');
		}else{
			echo 'login failed :(';
		}
	}
 ?>
<html>
	<head>
		<title>blah</title>
	</head>
	<body>
	<h1>Login</h1>
	<form action="" method="POST">
		username: <input type="text" name="uname"/><br>
		password: <input type="password" name="passwd"/><br>
		<input type="submit" name="submit"/>
	</form>
	or <a href="signup.php">Signup</a>
	</body>
</html>