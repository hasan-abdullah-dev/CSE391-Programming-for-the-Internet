<?php 
	session_start();


	
	if (!empty($_POST['submit'])) {
		# code...
		include 'connection.php';
		$sql = "INSERT INTO users  VALUES(NULL,'" . $_POST["uname"] . "','" . sha1($_POST["passwd"]) . "', NOW(),1)";
		// die($sql);
		$result=$db->query($sql);

		// if ($_POST[uname] == 'abul' and $_POST['passwd'] == 'p') {
		if ($result) {
			die('all good :) goto login page: <a href="index.php">Login page</a>');
		}else{
			echo 'signup failed :(';
		}
	}
 ?>
<html>
	<head>
		<title>blah</title>
	</head>
	<body>
	<h1>signup</h1>

	<form action="" method="POST">
		username: <input type="text" name="uname"/><br>
		password: <input type="password" name="passwd"/><br>
		<input type="submit" name="submit"/>
	</form>
	</body>
</html>