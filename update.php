<?php 
	
	require 'database.php';

	$id = null;
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}
	
	if ( null==$id ) {
		header("Location: index.php");
	}
	
	if ( !empty($_POST)) {
		// keep track validation errors
		$nameError = null;
		$foodError = null;
		$confirmError = null;
		
		// keep track post values
		$name = $_POST['name'];
		$food = $_POST['food'];
		$confirm = $_POST['confirm'];
		
		// validate input
		$valid = true;
		if (empty($name)) {
			$nameError = 'Please enter Name';
			$valid = false;
		}
		
		if (empty($food)) {
			$foodError = 'Please enter Food';
			$valid = false;
		}
		
		if (empty($confirm)) {
			$confirmError = 'Please enter Confirm';
			$valid = false;
		}
		
		// update data
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE customers  set name = ?, food = ?, confirm =? WHERE id = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($name,$food,$confirm,$id));
			Database::disconnect();
			header("Location: index.php");
		}
	} else {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM customers where id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		$name = $data['name'];
		$food = $data['food'];
		$confirm = $data['confirm'];
		Database::disconnect();
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
    
    			<div class="span10 offset1">
    				<div class="row">
		    			<h3>Update a Customer</h3>
		    		</div>
    		
	    			<form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">
					  <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
					    <label class="control-label">Name</label>
					    <div class="controls">
					      	<input name="name" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
					      	<?php if (!empty($nameError)): ?>
					      		<span class="help-inline"><?php echo $nameError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($foodError)?'error':'';?>">
					    <label class="control-label">Food</label>
					    <div class="controls">
					      	<input name="food" type="text" placeholder="Food" value="<?php echo !empty($food)?$food:'';?>">
					      	<?php if (!empty($foodError)): ?>
					      		<span class="help-inline"><?php echo $foodError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($confirmError)?'error':'';?>">
					    <label class="control-label">Confirm</label>
					    <div class="controls">
					      	<input name="confirm" type="text"  placeholder="confirm" value="<?php echo !empty($confirm)?$confirm:'';?>">
					      	<?php if (!empty($confirmError)): ?>
					      		<span class="help-inline"><?php echo $confirmError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					  <div class="form-actions">
						  <button type="submit" class="btn btn-success">Update</button>
						  <a class="btn" href="index.php">Back</a>
						</div>
					</form>
				</div>
				
    </div> <!-- /container -->
  </body>
</html>
