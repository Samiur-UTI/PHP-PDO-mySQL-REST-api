<?php include_once "read.php" ?>
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
		<div class="card" style="width: 18rem;">
		  <div class="card-header">
		    <strong>First Name</strong>
		  </div>
		  <ul class="list-group list-group-flush">
		  		<?php foreach ($row as $item) { ?>
					<li class="list-group-item"><?php echo $item->first_name ;?></li>
			
	    		<?php } ?>
		  </ul>
		</div>
	
	</div>



</body>
</html>
