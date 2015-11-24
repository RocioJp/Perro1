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
                        <h3>Read a Customer</h3>
                    </div>

                    <div class="form-horizontal" >
                      <div class="control-group">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['name'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Food</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['food'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Confirmed</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['food'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Confirmed</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['confirm'];?>
                            </label>
                        </div>
                      </div>
                        <div class="form-actions">
                          <a class="btn" href="index.php">Back</a>
                       </div>
                    </div>
                </div>

    </div> <!-- /container -->
  </body>
</html>
<script type='text/javascript'>
function delete_user( id ){

    var answer = confirm('Are you sure?');
    if (answer){
        // if user clicked ok,
        // pass the id to delete.php and execute the delete query
        window.location = 'delete.php?id=' + id;
    }
}
</script>

</body>
</html>
