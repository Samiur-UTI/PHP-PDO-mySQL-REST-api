<?php 
	  $host = 'localhost';
	  $user = 'root';
	  $password = '';
	  $dbname = 'demologin';
	  $dsn = 'mysql:host='. $host.';dbname='.$dbname;
	  $pdo = new PDO($dsn, $user, $password);
  	  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
  	  $query = 'SELECT * FROM users';
  	  $stmt = $pdo->query($query);
  	  $row = $stmt->fetchAll();
?>