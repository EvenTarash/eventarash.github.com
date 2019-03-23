<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login | Lifestyle Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    include 'includes/header.php'
    ?>
    <hr><hr>
<div class="container">
    <div class="row row_style">
       <div class="col-xs-3"></div>
       <div class="col-xs-6">
            <div class="panel panel-primary center">
                <div class="panel-heading">
                    <h4 class="text-center">LOGIN</h4>
                </div>

                <div class="panel-body">
                    <p class="text-warning">Login to make a purchase</p>
                    <form>
                    <div class="form-group">
                            <input type="text" class="form-control" name="Name" placeholder="Email">
                    </div>
                    <div class="form-group">
                            <input type="password" class="form-control" name="Name" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn btn-primary">
                    </div>
                    </form>
                </div>

                <div class="panel-footer text-center">
                    <p>Dont have an account? <a href="signup.php">Register</a></p>
                </div>

            </div>
       </div>
       <div class="col-xs-3"></div>
    </div>
</div>
    
 <footer class="ftrc">
   <center>
   <?php
    include 'includes/footer.php'
    ?>
   </center>
 </footer>

</body>
</html>
