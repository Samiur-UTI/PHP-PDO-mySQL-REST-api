<?php 
	  include_once "db-connect.php";
  	  $query = 'SELECT * FROM users';
  	  $stmt = $pdo->query($query);
  	  $row = $stmt->fetchAll();
?>