<?php
	  $host = 'localhost';
	  $user = 'root';
	  $password = '';
	  $dbname = 'demologin';
	  $dsn = 'mysql:host='. $host.';dbname='.$dbname;
	  $pdo = new PDO($dsn, $user, $password);
  	  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
	if (isset($_POST['submit'])) {
		$fname = $_POST['first_name'];
		$lname = $_POST['last_name'];
		$password = $_POST['password'];
		$query = 'INSERT INTO users(first_name,last_name,password) VALUES (:fname,:lname,:password)';
		$stmt = $pdo->prepare($query);
		$stmt->execute(['fname' => $fname, 'lname' => $lname, 'password' => $password]);
		header("Location: http://localhost/code&design/phpCRUD/login.php");
	}


?>