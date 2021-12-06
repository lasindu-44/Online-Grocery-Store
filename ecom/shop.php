<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Commerce Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
 integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

    <div id="top"> <!--Top Bar Start -->
        <div class="container"><!--container start-->
         <div class="col-md-6 offer"> <!--col-md-6 offer-start-->
             <a href="#" class="btn btn-success btn-sm">

                  Welcome Guest
             </a>
            <a href="#">Shopping Cart Total Price: INR 100, Total Items 2</a>
         </div> <!--col-md-6 offer start-->
         <div class="col-md-6">
            <ul class="menu">
                <li>
                    <a href="customer_registration.php">Register</a>
                </li>
                <li>
                    <a href="checkout.php">My Account</a>
                </li>
                <li>
                    <a href="cart.php">Goto Cart</a>
                </li>
                <li>
                    <a href="login.php">Login</a>
                </li>
            </ul>

         </div>

        </div>  <!--container End-->

    </div>  <!--Top Bar End -->
   <div class="navbar navbar-default" id="navbar"><!--navbar navbar-default start -->
       <div class="container">
           <div class="navbar-header">
               <a class="navbar-brand home" href="index.php">
                   <img src="#" alt="teehosting" class="hidden-xs">
                   <img src="#" alt="teehosting" class="visible-xs">
                
               </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-align-justify"></i>

                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse"data-target="#search" >
                     
                        <span class="sr-only"></span>
                        <i class="fa fa-search"></i>
                    </button>
             </div><!--navbar navbar-default End -->

                 <div class="navbar-collapse collapse" id="navigation"><!--navbar-collapse collape  start -->
                   <div  class="padding-nav"><!--padding-nav start -->
                       <ul class="nav navbar-nav navbar-left">
                           <li >
                               <a href="index.php">Home</a>
                           </li>
                           <li class="active">
                               <a href="shop.php">Shop</a>
                           </li>
                           <li>
                               <a href="checkout.php">My Account</a>
                           </li>
                           <li>
                               <a href="cart.php">Shopping Cart</a>
                           </li>
                           <li>
                               <a href="about.php">About Us</a>
                           </li>
                           <li>
                               <a href="services.php">services</a>
                           </li>
                           <li>
                               <a href="contactus.php">contact Us</a>
                           </li>
                       </ul>
                   </div><!--padding-nav End -->
                   <a href="cart.php" class="btn btn-primary navbar-btn right">

                         <i class="fa fa-shopping-cart"></i>
                         <span>4 items In Cart</span>
                   </a>
                     <div class="navbar-collapse collapse right"><!--navbar-collapse collape-right start -->
                         <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                         <span class="sr-only">Toggle Search</span>
                          <i class="fa fa-search"></i>
                         </button>

                     </div><!--navbar-collapse collape-right End -->
                       <div class="collapse clearfix" id="search">
                           <form class="navbar-form" method="get" action="result.php">
                               <div class="input-group">
                                   <input type="text" name="user_query" placeholder="Search" class="form-control" required="">
                                 <span class="input-group-btn">  
                                   <button type="submit" value="Search" name="Search" class="btn btn-primary">
                                   <i class="fa fa-search"></i>
                                   </button>
                                </span>
                               </div>
                                   

                           </form>

                       </div>
                 </div><!--navbar-collapse collape  End -->
                 </div><!--navbar navbar-default End-->

                 <div id="content">
                     <div class="container"><!--Container Start-->
                         <div class="col-md-12"><!--col-md-12 Start-->
                             <ul class="breadcrumb"> <!--breadcrumb is a boostrap class-->
                                 <li><a href="home.php">Home</a></li>
                                 <li>Shop</li>
                             </ul>

                         </div><!--col-md-12 End-->

                                 <!--Side Menu start-->

                                 <div class="col-md-3"><!--col-md-3 start-->

                                 <div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu start-->
    <div class="panel-heading"><!-- panel heading start-->
        <h3 class="panel-title">Product Categories</h3>
    </div><!-- panel  heading end-->
    <div class="panel-body">
    <nav id="sidemenu">

                              <label for="btn-1" class="button">Shoes
                               <span class="fa fa-caret-down"></span>
                            </label>
                        <input type= "checkbox" id="btn-1">
                            <ul class="menu">
                                 <li><a href="shop.php">Home</a></li>
                                 <li><a href="#">Pages</a></li>
                                 
                            </ul>
                            <label for="btn-2" class="button">T-Shirts
                               <span class="fa fa-caret-down"></span>
                            </label>
                        <input type= "checkbox" id="btn-2">
                            <ul class="menu">
                                 <li><a href="#">Home</a></li>
                                 <li><a href="#">Pages</a></li>
                                     
                            </ul>
                            <label for="btn-3" class="button">Frockes
                               <span class="fa fa-caret-down"></span>
                            </label>
                        <input type= "checkbox" id="btn-3">
                            <ul class="menu">
                                 <li><a href="#">Home</a></li>
                                 <li><a href="#">Pages</a></li>
                                     
                            </ul>
                            <label for="btn-4" class="button">Trousers
                               <span class="fa fa-caret-down"></span>
                            </label>
                        <input type= "checkbox" id="btn-4">
                            <ul class="menu">
                                 <li><a href="#">Home</a></li>
                                 <li><a href="#">Pages</a></li>
                                     
                            </ul>
                            <label for="btn-5" class="button">Trousers
                               <span class="fa fa-caret-down"></span>
                            </label>
                        <input type= "checkbox" id="btn-5">
                            <ul class="menu">
                                 <li><a href="#">Home</a></li>
                                 <li><a href="#">Pages</a></li>
                                     
                            </ul>
                            <label for="btn-6" class="button">Trousers
                               <span class="fa fa-caret-down"></span>
                            </label>
                        <input type= "checkbox" id="btn-6">
                            <ul class="menu">
                                 <li><a href="#">Home</a></li>
                                 <li><a href="#">Pages</a></li>
                                     
                            </ul>
                            <label for="btn-7" class="button">Trousers
                               <span class="fa fa-caret-down"></span>
                            </label>
                        <input type= "checkbox" id="btn-7">
                            <ul class="menu">
                                 <li><a href="#">Home</a></li>
                                 <li><a href="#">Pages</a></li>
                                     
                            </ul>
                            <label for="btn-8" class="button">Trousers
                               <span class="fa fa-caret-down"></span>
                            </label>
                        <input type= "checkbox" id="btn-8">
                            <ul class="menu">
                                 <li><a href="#">Home</a></li>
                                 <li><a href="#">Pages</a></li>
                                     
                            </ul>
                        </nav>
    </div>
</div><!-- panel panel-default sidebar-menu start-->
<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu start-->
    <div class="panel-heading"><!-- panel heading start-->
        <h3 class="panel-title"> Categories</h3>
    </div><!-- panel  heading end-->
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu">
            <li><a href="shop.php">Men</a></li>
            <li><a href="shop.php">Women</a></li>
            <li><a href="shop.php">Kids</a></li>
            <li><a href="shop.php">Others</a></li>
            
        </ul>
    </div>
</div><!-- panel panel-default sidebar-menu start-->
                        
                    </div><!--col-md-3 End-->

                                   <!--Side Menu End-->

                         <div class="col-md-9"><!--col-md-9 start-->
                             <div class="box"><!--box strat-->
                                 <h1>Shop</h1>
                                 <p>This theam is created by Balsooriya Lasindu Dulanjana Jayasiri,who is 
                                     the instructor if innstitute of computer science & Resaearch showal,ayodhya
                                 </p>
                             </div><!--box End-->
                             <div class="row"><!--Row Start-->
                               <div class="col-md-4 col-sm-6 center responsive"><!--col-md-4 col-sm-6 center responsive start-->
                                   <div class="product">
                                       <a href="details.php">
                                           <img src="admin_area/product_images/2.jpg" class="img-responsive" >
                                       </a>
                                       <div class="text">
                                           <h3>
                                               <a href="details.php">Coconut</a>
                                           </h3>
                                           <p class="price">INR 200</p>
                                           <p class="buttons"><a href="details.php" class="btn btn-default">View Details</a>
                                           <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a></p>
                                     </div>
                                   </div>
                               </div><!--col-md-4 col-sm-6 center responsive End-->

                               <div class="col-md-4 col-sm-6 center responsive"><!--col-md-4 col-sm-6 center responsive start-->
                                   <div class="product">
                                       <a href="details.php">
                                           <img src="admin_area/product_images/1.jpg" class="img-responsive" >
                                       </a>
                                       <div class="text">
                                           <h3>
                                               <a href="details.php">Coconut</a>
                                           </h3>
                                           <p class="price">INR 200</p>
                                           <p class="buttons"><a href="details.php" class="btn btn-default">View Details</a>
                                           <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a></p>
                                     </div>
                                   </div>
                               </div><!--col-md-4 col-sm-6 center responsive End-->

                               <div class="col-md-4 col-sm-6 center responsive"><!--col-md-4 col-sm-6 center responsive start-->
                                   <div class="product">
                                       <a href="details.php">
                                           <img src="admin_area/product_images/2.jpg" class="img-responsive">
                                       </a>
                                       <div class="text">
                                           <h3>
                                               <a href="details.php">Coconut</a>
                                           </h3>
                                           <p class="price">INR 200</p>
                                           <p class="buttons"><a href="details.php" class="btn btn-default">View Details</a>
                                           <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a></p>
                                     </div>
                                   </div>
                               </div><!--col-md-4 col-sm-6 center responsive End-->

                               <div class="col-md-4 col-sm-6 center responsive"><!--col-md-4 col-sm-6 center responsive start-->
                                   <div class="product">
                                       <a href="details.php">
                                           <img src="admin_area/product_images/3.jpg" class="img-responsive">
                                       </a>
                                       <div class="text">
                                           <h3>
                                               <a href="details.php">Coconut</a>
                                           </h3>
                                           <p class="price">INR 200</p>
                                           <p class="buttons"><a href="details.php" class="btn btn-default">View Details</a>
                                           <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a></p>
                                     </div>
                                   </div>
                               </div><!--col-md-4 col-sm-6 center responsive End-->

                               <div class="col-md-4 col-sm-6 center responsive"><!--col-md-4 col-sm-6 center responsive start-->
                                   <div class="product">
                                       <a href="details.php">
                                           <img src="admin_area/product_images/4.jpg" class="img-responsive">
                                       </a>
                                       <div class="text">
                                           <h3>
                                               <a href="details.php">Coconut</a>
                                           </h3>
                                           <p class="price">INR 200</p>
                                           <p class="buttons"><a href="details.php" class="btn btn-default">View Details</a>
                                           <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a></p>
                                     </div>
                                   </div>
                               </div><!--col-md-4 col-sm-6 center responsive End-->

                               <div class="col-md-4 col-sm-6 center responsive"><!--col-md-4 col-sm-6 center responsive start-->
                                   <div class="product">
                                       <a href="details.php">
                                           <img src="admin_area/product_images/5.jpg" class="img-responsive">
                                       </a>
                                       <div class="text">
                                           <h3>
                                               <a href="details.php">Coconut</a>
                                           </h3>
                                           <p class="price">INR 200</p>
                                           <p class="buttons"><a href="details.php" class="btn btn-default">View Details</a>
                                           <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a></p>
                                     </div>
                                   </div>
                               </div><!--col-md-4 col-sm-6 center responsive End-->

                             </div><!--Row End-->
                             <center>
                                 <ul class="pagination">
                                     <li><a href="shop.php">First Page</a></li>
                                     <li><a href="shop.php">2</a></li>
                                     <li><a href="shop.php">3</a></li>
                                     <li><a href="shop.php">4</a></li>
                                     <li><a href="shop.php">5</a></li>
                                     <li><a href="shop.php">Last Page</a></li>

                                 </ul>

                             </center>
                         </div><!--col-md-9 End-->
                     </div><!--Container End-->
                 </div><!--Content End-->

                  <!--Footer start-->
            <?php
            include("includes/footer.php");
            ?>


            <!--Footer End-->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
</body>
</html>