<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>

<html>
    <head>
      
        
        <meta charset="UTF-8">
        <title>Hunter's Gun Range</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>

    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div id="banner-image">
           <div class="container">
               <center>
               <div id="banner_content">
                   <h3><b>We sell reliable firearms for hunting or protection.</b></h3>
                   <p><b>Customers must sign up OR sign in before entering the store.</b></p>
                   <a href="products.php" > <button class="btn btn-danger btn-lg active"><b>Shop Now</b> </button></a>
                   
               </div>
                </center>
           </div>
       
       </div><br><br>
        
        
        
         <div class="container">
             <div class="row text-center">               
                 <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
            <a href="#">
                <image src="img/7a.png"/>
             <div class="caption">
                 <h2>Hunting Rifles</h2>
                 <p>Best rifles for Hunting.</p>
             </div>
            </a>
                         </div>
        </div>

        <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
            <a href="#">
             <image src="img/1a.jpg"/>
             <div class="caption">
                 <h2>Shotguns</h2>
                 <p>A variety of shotgun types to choose from.</p>
             </div>
            </a>
                     </div>
        </div>

        <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
            <a href="#">
             <image src="img/8a.png"/>
             <div class="caption">
                 <h2>Automatic Rifles</h2>
                 <p>Fully automatic weapons.</p>
             </div>
            </a>
                     </div>
        </div>
 
             </div>
         </div><br><br><br><br>
         
      
                
        
       <footer class="fo">
           <div class="container">
               <center>
                   <p>Copyright <small>&copy;</small> Hunter's Gun Range | All Rights Reserved</p>
               </center>
           </div>
           
           
       </footer>
        
        
    </body>
</html>
