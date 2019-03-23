<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up | Lifestyle Store</title>
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
              <div class="row">
                <div class="col-sm-4"></div>
                <center>
                <div class="col-sm-4">
                  <h2>SIGN UP</h2>
                  <form>
                    <div class="form-group">
                    <input type="text" class="form-control" name="Name" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="Name" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="Name" placeholder="Password">
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" name="Name" placeholder="Contact">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="Name" placeholder="City">
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control" name="Name" placeholder="Address">
                        </div>
                  <input type="submit" value="Submit" class="btn btn-primary">
                      
                  </form>
                </div>
                </center>
                <div class="col-sm-4"></div>
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
