<?php
include "includes/common.php";

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>

<html>
    <head>
               
        <meta charset="UTF-8">
        <title>Hunter's Gun Range | Products</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        
        <br><br><br><br><br>
        <div class="container">
            
            <div class="jumbotron">
                <h1>Welcome to Hunter's Gun Range Store!</h1>
                <p>Offering the best weapons for protection and hunting.</p>
                
            </div>
             
        </div>
        
                
                 <div class="container">
              <div class="row text-center">
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/5a.png" alt="Responsive image">
                          <div class="caption">
                              <h3>9mm Handgun</h3>
                              <p>Price: GH₵36000.00 </p>
                              <?php 
					
					if (check_if_added_to_cart(1)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                           
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/2a.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Pump Action Shotgun</h3>
                              <p>Price: GH₵40000.00 </p>
                              <?php 
					
					if (check_if_added_to_cart(2)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                            
                          </div>
                      </div>
                  </div>
                  
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/14a.png" alt="Responsive image">
                          <div class="caption">
                              <h3>Magnum Handgun</h3>
                              <p>Price: GH₵45000.00 </p>
                              <?php 
					
					if (check_if_added_to_cart(3)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>

                          </div>
                      </div>
                  </div>
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/4a.jpg" alt="Responsive image">
                          <div class="caption">
                              <h4>PKM</h4>
                              <p>Price: GH₵50000.00 </p>
                              <?php 
					
					if (check_if_added_to_cart(4)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             
                          </div>
                      </div>
                  </div>
                  
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/9a.jpg" alt="Responsive image">
                          <div class="caption">
                              <h4>AN-94</h4>
                              <p>Price: GH₵13000.00 </p>
                              <?php 
					
					if (check_if_added_to_cart(5)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/10a.png" alt="Responsive image">
                          <div class="caption">
                              <h3>Desert Eagle</h3>
                              <p>Price: GH₵30000.00 </p>
                              <?php 
					
					if (check_if_added_to_cart(6)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/11a.png" alt="Responsive image">
                          <div class="caption">
                              <h3>Sniper Rifle</h3>
                              <p>Price: GH₵80000.00 </p>
                              <?php 
					
					if (check_if_added_to_cart(7)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                           
                          </div>
                      </div>
                  </div>
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/12a.png" alt="Responsive image">
                          <div class="caption">
                              <h3>.45 ACP Handgun</h3>
                              <p>Price: GH₵18000.00 </p>
                              <?php 
					
					if (check_if_added_to_cart(8)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/8a.png" alt="Responsive image" id="imgs"> <br>
                          <div class="caption">
                              <h3>M4</h3> 
                              <p>Price: GH₵80000.00 </p>
                              <?php 
					
					if (check_if_added_to_cart(9)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                           
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/6a.png" alt="Responsive image">
                          <div class="caption">
                              <h3>Custom 9mm</h3>
                              <p>Price: GH₵10000.00 </p>
                              <?php 
					
					if (check_if_added_to_cart(10)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/13a.png" alt="Responsive image">
                          <div class="caption">
                              <h3>MP4</h3>
                              <p>Price: GH₵15000.00 </p>
                              <?php 
					
					if (check_if_added_to_cart(11)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/14a.png" alt="Responsive image">
                          <div class="caption">
                              <h3>Magnum- Bronze</h3>
                              <p>Price: GH₵13000.00 </p>
                              <?php 
					
					if (check_if_added_to_cart(12)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             
                          </div>
                      </div>
                      
                      
                      
                      
                  </div>
                  
              </div>
             
          </div><br>
       <footer class="fo">
           <div class="container">
               <center>
                   <p>Copyright <small>&copy;</small> Hunter's Gun Range | All Rights Reserved</p>
               </center>
           </div>
           
           
       </footer>
        
        
    </body>
</html>
