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
                                 <li><a href="#">Home</a></li>
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


<div class="col-md-9">
    <div class="row" id="productmain">
            <div class="col-sm-6"><!--col-sm-6-slider-start-->
               <div id="mainimage">
                   <div id="mycarousel" class="carousel slide" data-ride="carousel">
                       <ol class="carousel-indicators">
                           <li data-target="#mycarousel" data-slide-to="0" class="active"></il>
                           <li data-target="#mycarousel" data-slide-to="1" ></il>
                           <li data-target="#mycarousel" data-slide-to="2" ></il>

                       </ol>
                       <div class="carousel-inner"><!--Carousel-inner start-->
                           <div class="item active">
                               <center>
                                   <img src="admin_area/product_images/1.jpg" class="img-responsive">
                               </center>
                           </div>

                           <div class="item">
                           <center>
                                   <img src="admin_area/product_images/2.jpg" class="img-responsive">
                               </center>
                           </div>

                           <div class="item">
                           <center>
                                   <img src="admin_area/product_images/3.jpg" class="img-responsive">
                               </center>
                           </div>

                       </div><!--Carousel-inner End-->
                       <a href="#mycarousel" class="left carsousel-control" data-slide="prev">
                           <span class="glyphicon glyphicon-chevron-left"></span>
                           <span class="sr-only">Previous</span>

                       </a>

                       <a href="#mycarousel" class="right carsousel-control" data-slide="next">
                           <span class="glyphicon glyphicon-chevron-right"></span>
                           <span class="sr-only">Next</span>

                       </a>

                   </div>
               </div>
            </div><!--col-sm-6-slider-End-->

            <div class="col-sm-6">
                <div class="box"><!--box start-->
                    <h1 class="text-center">Cocunt Gram 100g</h1>
                    <form action="details.php" method="post" class="form-horizontal"><!--Form start-->
                        <div class="form-group"><!--Form-group start-->
                            <label class="col-md-5 control-label">Product Quantity</label>
                            <div class="col-md-7"><!--col-md-7 start-->
                               <select name="product_qty" class="form-control">
                                   <option>1</option>
                                   <option>2</option>
                                   <option>3</option>
                                   <option>4</option>
                                   <option>5</option>
                               </select>
                            </div><!--col-md-7 End-->

                        </div><!--Form-group End-->
                        <div class="form-group">
                          <label class="col-md-5 control-lable">Product Size</label>
                          <div class="col-md-7">
                              <select name="product_size" class="form-control">
                                  <option>Select a size</option>
                                  <option>Smalle</option>
                                  <option>Medium</option>
                                  <option>Large</option>
                              </select>
                          </div>
                        </div>
                        <p class="price text-center">INR 200</p>
                        <p class="text-center buttons">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-shopping-cart"></i>Add To Cart
                            </button>

                        </p>
                    </form><!--Form End-->
               </div><!--box End-->
               <!-- <div class="col-xm-4">
                    <a href="#" class="thumb">
                      <img src="admin_area/product_images/1.jpg" class="img-responsive" >

                    </a>
                </div>
                <div class="col-xm-4">
                    <a href="#" class="thumb">
                      <img src="admin_area/product_images/1.jpg" class="img-responsive">

                    </a>
                </div>
                <div class="col-xm-4">
                    <a href="#" class="thumb">
                      <img src="admin_area/product_images/1.jpg" class="img-responsive">

                    </a>
            </div>-->
            </div>
            
    </div><br>
    <div class="box" id="details">
             <h4>Product Details</h4>
             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a 
                 galley of type and scrambled it to make a type specimen book. It has survived not only five 
                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                 It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                 passages, and more recentlwith desktop publishing software like Aldus PageMaker including
                 versions of Lorem Ipsum.
                </p>
                <h4>Size</h4>
                <ul>
                    <li>Small</li>
                    <li>Medium</li>
                    <li>Large</li>
                    <li>Extra Large</li>
                </ul>
            </div>
            <div id="row same-height-row"><!-- same-height-row start-->
               <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 start-->
                   <div class="box same-height headline"><!--box same-height headline start-->
                       <h3 class="text-center">You Also Like This Products</h3>
                   </div><!--box same-height headline End-->
               </div><!--col-md-3 col-sm-6 end-->
               <div class="center-responsive col-md-3"><!--center-responsive col-md-3 start-->
                 <div class="product same-height">
                     <a href="">
                         <img src="admin_area/product_images/1.jpg" class="img-responsive">
                     </a>
                     <div class="text">
                         <h3><a href="details.php">Coconut</a></h3>
                         <p class="price">INR 199</p>
                     </div>
                 </div>
    

               </div><!--center-responsive col-md-3 End-->
               <div class="center-responsive col-md-3"><!--center-responsive col-md-3 start-->
                 <div class="product same-height">
                     <a href="">
                         <img src="admin_area/product_images/4.jpg" class="img-responsive">
                     </a>
                     <div class="text">
                         <h3><a href="details.php">Coconut</a></h3>
                         <p class="price">INR 199</p>
                     </div>
                 </div>
    

               </div><!--center-responsive col-md-3 End-->

               <div class="center-responsive col-md-3"><!--center-responsive col-md-3 start-->
                 <div class="product same-height">
                     <a href="">
                         <img src="admin_area/product_images/2.jpg" class="img-responsive">
                     </a>
                     <div class="text">
                         <h3><a href="details.php">Coconut</a></h3>
                         <p class="price">INR 199</p>
                     </div>
                 </div>
    

               </div><!--center-responsive col-md-3 End-->

            </div><!-- same-height-row End-->

</div>



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