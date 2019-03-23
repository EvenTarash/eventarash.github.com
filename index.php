<!DOCTYPE html>
<html lang="en">
    <?php
    require 'includes/common.php'
    ?>
<head>
  <title>Lifestyle Store</title>
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
    

    
    <div id="banner_image">
        <div class="container">
            <center>
            <div id="banner_content">
                <h1>We sell lifestyle.</h1>
                <h4>Flat 40% OFF on premium brands</h4> 
                <a href="products.html"><input type="button" value="Shop Now" class="btn btn-danger btn-lg active"></a>
                           
            </div>
            </center>            
        </div>
    </div>

    <div class="container row_one"> <!--Start of Camera container-->
        <div class=" row text-center">
            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <img src="img/camera.jpg" alt="Image">
                    <div class="caption">
                        <h3>Cameras</h3>
                        <p>Choose among the best available in the world.</p>
                        
                    </div>
                </div>
            </div>
            <div class=" row text-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/watch.jpg" alt="Image">
                            <div class="caption">
                                <h3>Watches</h3>
                                <p>Original watches from the best brands</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class=" row text-center">
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail">
                                    <img src="img/shirt.jpg" alt="Image">
                                    <div class="caption">
                                        <h3>Shirts</h3>
                                        <p>Our exquisite collection of shirts</p>
                                    </div>
                                </div>
                            </div>
                            
        </div><!--End of Camera container-->
        </div></div></div>
    <div class="container-fluid ftrd text-center">
    <?php
    include 'includes/footer.php'
    ?>
    </div>

    
</body>
</html>
