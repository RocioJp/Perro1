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
                        <h3>Create a Customer</h3>

                    </div>
                                 <form class="form-horizontal" action="create2.php" method="post">
                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <input name="name" type="text"  placeholder="Name" value="">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($foodError)?'error':'';?>">
                        <label class="control-label">Food</label>
                        <div class="controls">
                            <input name="food" type="text" placeholder="Food" value="">
                            <?php if (!empty($foodError)): ?>
                                <span class="help-inline"><?php echo $foodError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($confirmError)?'error':'';?>">
                        <label class="control-label">Precio</label>
                        <div class="controls">
                            <input name="precio" type="text"  placeholder="precio" value="">
                            <?php if (!empty($confirmError)): ?>
                                <span class="help-inline"><?php echo $confirmError;?></span>
                            <?php endif;?>
                            

<div class="control-group <?php echo !empty($foodError)?'error':'';?>">
                        <label class="control-label">Password</label>
                        <div class="controls">
                            <input name="password" type="password" placeholder="Password" value="">
                            <?php if (!empty($foodError)): ?>
                                <span class="help-inline"><?php echo $foodError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Create</button>
                          <a class="btn" href="index.php">Back</a>
                        </div>
                    </form>

                </div>

    </div> <!-- /container -->
  </body>
</html>
