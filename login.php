<?php include_once "read.php" ?>
<?php include_once "update.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Demo Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form method="POST" action="create.php">
		  <div class="form-group">
		    <label>First Name</label>
		    <input type="text" name="first_name" class="form-control" placeholder="Enter First Name">
		  </div>
		   <div class="form-group">
		    <label>Last Name</label>
		    <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name">
		  </div>
		  <div class="form-group">
		    <label>Password</label>
		    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
		<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">First Name</th>
			      <th scope="col">Last Name</th>
			      <th scope="col">Edit</th>
			      <th scope="col">Delete</th>
			    </tr>
			  </thead>
			  <tbody>
				 <?php foreach ($row as $item) { ?>
				    <tr>
				      <th scope="row"><?php echo $item->id ;?></th>
				      <td><?php echo $item->first_name ;?></td>
				      <td><?php echo $item->last_name ;?></td>
				      <td><a class="btn btn-warning" href="update.php" role="button">Update</a></td>
				      <td><a class="btn btn-danger" href="delete.php" role="button">Delete</a></td>
				    </tr>
				 <?php } ?>
			  </tbody>
		</table>
	
	</div>



</body>
</html>
	    		