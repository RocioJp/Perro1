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
                                 <form class="form-horizontal" action="create.php" method="post">
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
                            <input name="Food" type="text" placeholder="Food" value="">
                            <?php if (!empty($foodError)): ?>
                                <span class="help-inline"><?php echo $foodError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($confirmError)?'error':'';?>">
                        <label class="control-label">Confirm (Y o N)</label>
                        <div class="controls">
                            <input name="confirm" type="text"  placeholder="Confirm (Y o N)" value="">
                            <?php if (!empty($confirmError)): ?>
                                <span class="help-inline"><?php echo $confirmError;?></span>
                            <?php endif;?>
                            <?php
     
    require 'database.php';
 
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
            $foodError = 'Please enter a valid Food';
            $valid = false;        
        }
         
        if (empty($confirm)) {
            $confirmError = 'Please confirm';
            $valid = false;
        }
         
      
    }
?>
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
