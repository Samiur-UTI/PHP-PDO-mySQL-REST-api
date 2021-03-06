<?php 
	include_once "db-connect.php";
	$id = $_GET['id'];
	$query = 'SELECT * FROM users WHERE id = '.$id;
	$stmt = $pdo->query($query);
	$row = $stmt->fetch();
	if ($_POST) {
		$fname = $_POST['first_name'];
		$lname = $_POST['last_name'];
		$password = $_POST['password'];
		$query = 'UPDATE users SET first_name ='.$fname.', last_name='.$lname.' ,password='.$password.'WHERE id = '.$id;
		$stmt = $pdo->prepare($query);
		$stmt->execute();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update post <?php echo $row->id ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	  <form method="POST" action="update.php">
		  <div class="form-group">
		    <label>First Name</label>
		    <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" value="<?php echo $row->first_name; ?>">
		  </div>
		   <div class="form-group">
		    <label>Last Name</label>
		    <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" value="<?php echo $row->last_name; ?>">
		  </div>
		  <div class="form-group">
		    <label>Password</label>
		    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php echo $row->password; ?>">
		  </div>
		  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
	  </form>
	</div>

</body>
</html>