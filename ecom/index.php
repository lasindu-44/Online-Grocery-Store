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
             </div><!--navbar navbar-default start -->
                 <div class="navbar-collapse collapse" id="navigation"><!--navbar-collapse collape  start -->
                   <div  class="padding-nav"><!--padding-nav start -->
                       <ul class="nav navbar-nav navbar-left">
                           <li class="active">
                               <a href="index.php">Home</a>
                           </li>
                           <li>
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
                  
                 <div class="container" id="slider"><!--slider start-->
                     <div class="col-md-12"><!--col-md-12 start-->
                         <div class="carousel slide" id="myCarousel" data-ride="carousel"><!--carousel slide start-->
                             <ol class="carousel-indicators">
                                 <li data-target="myCarousel" data-slide-to="0" class="action"></li>
                                 <li data-target="myCarousel" data-slide-to="1" ></li>
                                 <li data-target="myCarousel" data-slide-to="2" ></li>
                                 <li data-target="myCarousel" data-slide-to="3" ></li>
                         </ol>
                         <div class="carousel-inner"><!--carousel-inner start-->
                           <div class="item active">
                               <img src="admin_area/slider_images/n1.jpg">
                           </div>
                           <div class="item">
                               <img src="admin_area/slider_images/n2.jpg">
                           </div>
                           <div class="item">
                               <img src="admin_area/slider_images/n3.jpg">
                           </div>
                           <div class="item">
                               <img src="admin_area/slider_images/R.jpg">
                           </div>
                         </div><!--carousel-inner End-->
                         <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                             <span class="glyphicon glyphicon-chevron-left"></span>
                             <span class="sr-only">Previous</span>
                         </a>
                         <a href="#myCarousel" class="right carousel-control" data-slide="next">
                             <span class="glyphicon glyphicon-chevron-right"></span>
                             <span class="sr-only">Next</span>
                         </a>
                     </div><!--carousel slide End-->
                 </div><!--col-md-12 end-->

              </div><!--slider end-->

              <div id="advantage"><!--advantage start-->
                  <div class="container"><!--Container start-->
                      <div class="same-height-row"><!--same-height-row start-->
                          <div class="col-sm-4"><!--col-sm-4 start-->
                              <div class="box same-height"><!--box same-height start-->
                                  <div class="icon">
                                      <i class="fa fa-heart"></i>
                                  </div>
                                  <h3><a href="#">BEST PRICES</h3>
                                  <P> You can check on all others sites about the prices and the compare with us.</p>
                              </div><!--box same-height End-->
                          </div><!--col-sm-4 End-->

                          <div class="col-sm-4"><!--col-sm-4 start-->
                              <div class="box same-height"><!--box same-height start-->
                                  <div class="icon">
                                      <i class="fa fa-heart"></i>
                                  </div>
                                  <h3><a href="#">100% SATISFACTION GUARANTEED FROM US</h3>
                                  <P> Free return on everything for 3 months.</p>
                              </div><!--box same-height End-->
                          </div><!--col-sm-4 End-->

                          <div class="col-sm-4"><!--col-sm-4 start-->
                              <div class="box same-height"><!--box same-height start-->
                                  <div class="icon">
                                      <i class="fa fa-heart"></i>
                                  </div>
                                  <h3><a href="#">WE LOVE OUR CUSTOMERS</h3>
                                  <P> We are known to provide best posible service.</p>
                              </div><!--box same-height End-->
                          </div><!--col-sm-4 End-->

                      </div><!--same-height-row End-->
                  </div><!--Container End-->
              </div><!--advantage End-->
              <div id="hot"><!--hot start-->
                  <div class="box">
                      <div class="container">
                          <div class="col-md-12">
                              <h2>Latest This Week</h2>
                          </div>
                      </div>
                  </div>
              </div><!--hot End-->
              <div id="content" class="container">
                  <div class="row">
                  <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single start-->
                          <div class="product">
                              <a href="details.php"><img src="admin_area/product_images/1.jpg" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Coconut</a></h3>
                                <p class="price">INR 299</p>
                                <p class="buttons">
                                   <a href="details.php" class="btn btn-default">View Details</a>
                                   <a href="details.php" class="btn btn-primary">
                                       <i class="fa fa-shopping-cart"></i>Add to Cart
                                   </a>

                                </p>
                            </div>
                          </div>
                      </div><!--col-sm-4 col-sm-6 single End-->

                      <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single start-->
                          <div class="product">
                              <a href="details.php"><img src="admin_area/product_images/1.jpg" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Coconut</a></h3>
                                <p class="price">INR 299</p>
                                <p class="buttons">
                                   <a href="details.php" class="btn btn-default">View Details</a>
                                   <a href="details.php" class="btn btn-primary">
                                       <i class="fa fa-shopping-cart"></i>Add to Cart
                                   </a>

                                </p>
                            </div>
                          </div>
                      </div><!--col-sm-4 col-sm-6 single End-->
                      <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single start-->
                          <div class="product">
                              <a href="details.php"><img src="admin_area/product_images/1.jpg" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Coconut</a></h3>
                                <p class="price">INR 299</p>
                                <p class="buttons">
                                   <a href="details.php" class="btn btn-default">View Details</a>
                                   <a href="details.php" class="btn btn-primary">
                                       <i class="fa fa-shopping-cart"></i>Add to Cart
                                   </a>

                                </p>
                            </div>
                          </div>
                      </div><!--col-sm-4 col-sm-6 single End-->

                      <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single start-->
                          <div class="product">
                              <a href="details.php"><img src="admin_area/product_images/2.jpg" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Coconut</a></h3>
                                <p class="price">INR 299</p>
                                <p class="buttons">
                                   <a href="details.php" class="btn btn-default">View Details</a>
                                   <a href="details.php" class="btn btn-primary">
                                       <i class="fa fa-shopping-cart"></i>Add to Cart
                                   </a>

                                </p>
                            </div>
                          </div>
                      </div><!--col-sm-4 col-sm-6 single End-->

                      <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single start-->
                          <div class="product">
                              <a href="details.php"><img src="admin_area/product_images/3.jpg" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Coconut</a></h3>
                                <p class="price">INR 299</p>
                                <p class="buttons">
                                   <a href="details.php" class="btn btn-default">View Details</a>
                                   <a href="details.php" class="btn btn-primary">
                                       <i class="fa fa-shopping-cart"></i>Add to Cart
                                   </a>

                                </p>
                            </div>
                          </div>
                      </div><!--col-sm-4 col-sm-6 single End-->

                      <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single start-->
                          <div class="product">
                              <a href="details.php"><img src="admin_area/product_images/4.jpg" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Coconut</a></h3>
                                <p class="price">INR 299</p>
                                <p class="buttons">
                                   <a href="details.php" class="btn btn-default">View Details</a>
                                   <a href="details.php" class="btn btn-primary">
                                       <i class="fa fa-shopping-cart"></i>Add to Cart
                                   </a>

                                </p>
                            </div>
                          </div>
                      </div><!--col-sm-4 col-sm-6 single End-->

                      <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single start-->
                          <div class="product">
                              <a href="details.php"><img src="admin_area/product_images/5.jpg" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Coconut</a></h3>
                                <p class="price">INR 299</p>
                                <p class="buttons">
                                   <a href="details.php" class="btn btn-default">View Details</a>
                                   <a href="details.php" class="btn btn-primary">
                                       <i class="fa fa-shopping-cart"></i>Add to Cart
                                   </a>

                                </p>
                            </div>
                          </div>
                      </div><!--col-sm-4 col-sm-6 single End-->

                      <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single start-->
                          <div class="product">
                              <a href="details.php"><img src="admin_area/product_images/1.jpg" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Coconut</a></h3>
                                <p class="price">INR 299</p>
                                <p class="buttons">
                                   <a href="details.php" class="btn btn-default">View Details</a>
                                   <a href="details.php" class="btn btn-primary">
                                       <i class="fa fa-shopping-cart"></i>Add to Cart
                                   </a>

                                </p>
                            </div>
                          </div>
                      </div><!--col-sm-4 col-sm-6 single End-->

                  </div>
              </div>
              
            <!--Footer start-->

            <?php
            include("includes/footer.php");
            ?>


            <!--Footer End-->
        
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>