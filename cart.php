<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cart | Lifestyle Store</title>
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
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Item Number</th>
                  <th>Item Name</th>
                  <th>Price</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td>Total</td>
                  <td>Rs 0</td>
                  <td><input type="submit" class="btn btn-primary" value="Confirm Order"></td>
                </tr>
                
              </tbody>
            </table>
        </div>
        <div class="col-xs-2"></div>
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
