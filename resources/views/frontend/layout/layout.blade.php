<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Domnoo Restaurant & Pizza HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('frontend/images/fav2.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{asset('fontend/images/fav2.ico')}}" type="image/x-icon">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css') }}">
    <!-- main stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css') }}">
    <!-- color stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/colors.css') }}" id="ui-theme-color">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css') }}">
</head>
<body>
	<div class="loader_wrapper">
        <div class="loader">
			<img src="{{asset('frontend/images/loader.gif') }}" alt="" class="img-fluid">
        </div>
    </div>
    <!--// loader_wrapper -->

	<div id="wrapper">
		<header class="new-block main-header">
			<div class="main-nav new-block">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="logo">
								<a href="index.html"><img src="{{asset('frontend/images/logo.png') }}" alt="logo" class="img-responsive"></a>
							</div>
							<div class="location-block">
								<p>Austrlia</p>
								<span>+00 123 456 789</span>
							</div>
							<a href="#" class="nav-opener"><i class="fa fa-bars"></i></a>
							<nav class="nav">
								<ul class="list-unstyled">
									<li class="drop active"><a href="#">Home</a>
										<ul class="drop-down">
											<li><a href="index.html">Home1</a></li>
											<li><a href="home2.html">Home2</a></li>
										</ul>
									</li>
									<li class="drop"><a href="#">Menu</a>
										<ul class="drop-down">
											<li><a href="menu.html">Menu</a></li>
											<li><a href="menu2.html">Menu2</a></li>
										</ul>
									</li>
									<li class="drop"><a href="#">Pages</a>
										<ul class="drop-down">
											<li><a href="menu.html">Menu</a></li>
											<li><a href="menu2.html">Menu2</a></li>
											<li><a href="about_us.html">About</a></li>
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog_left.html">Blog left</a></li>
											<li><a href="blog_right.html">Blog right</a></li>
											<li><a href="blog_single.html">Single blog</a></li>
											<li><a href="contact.html">Contact us</a></li>
											<li><a href="product_single.html">Product single</a></li>
											<li><a href="shopping_cart.html">Cart page</a></li>
										</ul>
									</li>
									<li><a href="#">Meals</a></li>
									<li><a href="#">Pizza</a></li>
									<li><a href="about_us.html">About</a></li>
									<li class="drop"><a href="#">Blog</a>
										<ul class="drop-down">
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog_left.html">Blog left</a></li>
											<li><a href="blog_right.html">Blog right</a></li>
											<li><a href="blog_single.html">Single blog</a></li>
										</ul>
									</li>
									<li><a href="#">Location</a></li>
									<li><a href="contact.html">Contact Us</a></li>
									<li><a href="#">Login/Signup</a></li>
								</ul>
							</nav>
							<div class="nav-right-block">
								<ul class="list-unstyled">
									<li><a href="#"><i class="flaticon-scooter-front-view"></i><span class="nav-price">$00.00</span></a></li>
								</ul>
							</div><!-- nav-login -->
						</div>
					</div>
				</div>
			</div>
		</header> <!-- header -->

		<div class="banner slider1 new-block">
			<div class="fixed-bg" style="background: url({{asset('frontend/images/slider-bg1.jpg')}});"></div>
			<div class="slider owl-carousel owl-theme">
			    <div class="item">
			    	<div class="slider-block slide1 new-block">
			    		<div class="container-fluid">
				    		<div class="row">
				    			<div class="col-lg-6 col-md-6 col-sm-6">
				    				<div class="text-block">
				    					<div class="img-block ab1" data-animation-in="bounceInDown" data-animation-out="animate-out fadeOutRight">
				    						<img src="{{asset('frontend/images/pizza.png') }}" alt="" class="img-responsive">
				    					</div>
				    					<h1 class="text-stl1" data-animation-in="lightSpeedIn" data-animation-out="animate-out fadeOutRight">buy get one free</h1>
				    					<div class="number-block" data-animation-in="fadeInUp" data-animation-out="animate-out fadeOutRight">
				    						<p class="text-stl2">Aliquam laoreet orci quis risus vulputate tempor Quisque aliquetmattis mattis tortor nibh cursus lorem</p>
				    						<h2 class="text-stl3">+00 123 456 789</h2>
				    						<div class="text-center">
					    						<a href="#" class="btn1 stl2">About More</a>
					    						<a href="#" class="btn1 stl1">Add to Cart</a>
				    						</div>
				    					</div>
				    				</div>
				    			</div>
				    			<div class="col-lg-6 col-md-6 col-sm-6">
				    				<div class="img-block img2">
				    					<div class="img-holder" data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutRight">
				    						<img src="{{asset('frontend/images/pz.png') }}" alt="" class="img-responsive">
				    					</div>
				    				</div>
				    			</div>
				    		</div>
				    	</div>
				    </div><!-- .slider-block -->
				</div>
				<div class="item">
			    	<div class="slider-block slide1 new-block">
			    		<div class="container-fluid">
				    		<div class="row">
				    			<div class="col-lg-6 col-md-6 col-sm-6">
				    				<div class="text-block">
				    					<div class="img-block ab1" data-animation-in="bounceInDown" data-animation-out="animate-out fadeOutRight">
				    						<img src="{{asset('frontend/images/pizza.png') }}" alt="" class="img-responsive">
				    					</div>
				    					<h1 class="text-stl1" data-animation-in="lightSpeedIn" data-animation-out="animate-out fadeOutRight">buy get one free</h1>
				    					<div class="number-block" data-animation-in="fadeInUp" data-animation-out="animate-out fadeOutRight">
				    						<p class="text-stl2">Aliquam laoreet orci quis risus vulputate tempor Quisque aliquetmattis mattis tortor nibh cursus lorem</p>
				    						<h2 class="text-stl3">+00 123 456 789</h2>
				    						<div class="text-center">
					    						<a href="#" class="btn1 stl2">About More</a>
					    						<a href="#" class="btn1 stl1">Add to Cart</a>
				    						</div>
				    					</div>
				    				</div>
				    			</div>
				    			<div class="col-lg-6 col-md-6 col-sm-6">
				    				<div class="img-block img2">
				    					<div class="img-holder" data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutRight">
				    						<img src="{{asset('frontend/images/sldr.png') }}" alt="" class="img-responsive">
				    					</div>
				    				</div>
				    			</div>
				    		</div>
				    	</div>
				    </div><!-- .slider-block -->
				</div>
			</div>
		</div><!-- banner -->
		
				
		<section class="cat-sec new-block">
			<div class="container-fluid pd0">
				<div class="cat-block">
					<div class="block-stl1 bg1">
						<span class="flaticon-pizza"></span>
						<h4>Pizza</h4>
					</div>
				</div>
				<div class="cat-block">
					<div class="block-stl1 bg2">
						<span class="flaticon-burger"></span>
						<h4>Burgers</h4>
					</div>
				</div>
				<div class="cat-block">
					<div class="block-stl1 bg3">
						<span class="flaticon-fried-chicken"></span>
						<h4>Chicken</h4>
					</div>
				</div>
				<div class="cat-block">
					<div class="block-stl1 bg4">
						<span class="flaticon-salad"></span>
						<h4>Salad</h4>
					</div>
				</div>
				<div class="cat-block">
					<div class="block-stl1 bg5">
						<span class="flaticon-french-fries"></span>
						<h4>Fries</h4>
					</div>
				</div>
				<div class="cat-block">
					<div class="block-stl1 bg6">
						<span class="flaticon-drink"></span>
						<h4>Drinks</h4>
					</div>
				</div>
				<div class="cat-block">
					<div class="block-stl1 bg7">
						<span class="flaticon-taco"></span>
						<h4>Taco</h4>
					</div>
				</div>
			</div>
		</section>

		<section class="special-offers-sec new-block">
			<div class="special-offer-inr-block new-block">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="title">
								<p class="top-h">today special</p>
								<h2>festive season offers</h2>
								<div class="btm-style"><span><img src="{{asset('frontend/images/btm-style.png') }}" alt="" class="img-responsive"></span></div>
							</div>
						</div>
						<div class="col-lg-12 pd0">
							<div class="special-offer-block ol_flr new-block">
								<div class="ol_flr">
									<div class="nav btn-filter-wrap">
										<button id="js-filter-0" class="filterer btn"><span>Chicken</span></button>
									    <button id="js-filter-1" class="filterer btn"><span>Meats</span></button>
									    <button id="js-filter-2" class="filterer btn"><span>Populars all in Domnoo</span></button>
									    <button id="js-filter-3" class="filterer btn"><span>Veggie</span></button>
									    <button id="js-filter-4" class="filterer btn"><span>Burgers</span></button>
									</div>
									<div class="clearfix"></div>
									<div class="slider-flr" id="filter_itm1">
							    		<div class="js-filter-chicken">
							    			<div class="block-stl2">
							    				<div class="img-holder">
							    					<img src="{{asset('frontend/images/img.png') }}" alt="" class="img-responsive">
							    				</div>
							    				<div class="text-block">
							    					<h3>Veggie Supreme</h3>
							    					<p class="sz">Size : Regular</p>
							    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
							    				</div>
							    				<div class="btn-sec">
						    						<a href="product_single.html" class="btn4">About More</a>
						    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
					    						</div>
							    			</div>
							    		</div>
							    		<div class="js-filter-chicken">
							    			<div class="block-stl2">
							    				<div class="img-holder">
							    					<img src="{{asset('frontend/images/img1.png') }}" alt="" class="img-responsive">
							    				</div>
							    				<div class="text-block">
							    					<h3>Veggie Supreme</h3>
							    					<p class="sz">Size : Regular</p>
							    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
							    				</div>
							    				<div class="btn-sec">
						    						<a href="product_single.html" class="btn4">About More</a>
						    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
					    						</div>
							    			</div>
							    		</div>
							    		<div class="js-filter-meats">
							    			<div class="block-stl2">
							    				<div class="img-holder">
							    					<img src="{{asset('frontend/images/img2.png') }}" alt="" class="img-responsive">
							    				</div>
							    				<div class="text-block">
							    					<h3>Veggie Supreme</h3>
							    					<p class="sz">Size : Regular</p>
							    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
							    				</div>
							    				<div class="btn-sec">
						    						<a href="product_single.html" class="btn4">About More</a>
						    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
					    						</div>
							    			</div>
							    		</div>
							    		<div class="js-filter-populars">
							    			<div class="block-stl2">
							    				<div class="img-holder">
							    					<img src="{{asset('frontend/images/img3.png') }}" alt="" class="img-responsive">
							    				</div>
							    				<div class="text-block">
							    					<h3>Veggie Supreme</h3>
							    					<p class="sz">Size : Regular</p>
							    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
							    				</div>
							    				<div class="btn-sec">
						    						<a href="product_single.html" class="btn4">About More</a>
						    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
					    						</div>
							    			</div>
							    		</div>

							    		<div class="js-filter-chicken">
							    			<div class="block-stl2">
							    				<div class="img-holder">
							    					<img src="{{asset('frontend/images/img4.png') }}" alt="" class="img-responsive">
							    				</div>
							    				<div class="text-block">
							    					<h3>Veggie Supreme</h3>
							    					<p class="sz">Size : Regular</p>
							    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
							    				</div>
							    				<div class="btn-sec">
						    						<a href="product_single.html" class="btn4">About More</a>
						    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
					    						</div>
							    			</div>
							    		</div>
							    		<div class="js-filter-veggie">
							    			<div class="block-stl2">
							    				<div class="img-holder">
							    					<img src="{{asset('frontend/images/img5.png') }}" alt="" class="img-responsive">
							    				</div>
							    				<div class="text-block">
							    					<h3>Veggie Supreme</h3>
							    					<p class="sz">Size : Regular</p>
							    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
							    				</div>
							    				<div class="btn-sec">
						    						<a href="product_single.html" class="btn4">About More</a>
						    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
					    						</div>
							    			</div>
							    		</div>
							    		<div class="js-filter-chicken">
							    			<div class="block-stl2">
							    				<div class="img-holder">
							    					<img src="{{asset('frontend/images/img3.png') }}" alt="" class="img-responsive">
							    				</div>
							    				<div class="text-block">
							    					<h3>Veggie Supreme</h3>
							    					<p class="sz">Size : Regular</p>
							    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
							    				</div>
							    				<div class="btn-sec">
						    						<a href="product_single.html" class="btn4">About More</a>
						    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
					    						</div>
							    			</div>
							    		</div>
							    		<div class="js-filter-chicken">
							    			<div class="block-stl2">
							    				<div class="img-holder">
							    					<img src="{{asset('frontend/images/img.png') }}" alt="" class="img-responsive">
							    				</div>
							    				<div class="text-block">
							    					<h3>Veggie Supreme</h3>
							    					<p class="sz">Size : Regular</p>
							    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
							    				</div>
							    				<div class="btn-sec">
						    						<a href="product_single.html" class="btn4">About More</a>
						    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
					    						</div>
							    			</div>
							    		</div>
							    		<div class="js-filter-burgers">
							    			<div class="block-stl2">
							    				<div class="img-holder">
							    					<img src="{{asset('frontend/images/img5.png') }}" alt="" class="img-responsive">
							    				</div>
							    				<div class="text-block">
							    					<h3>Veggie Supreme</h3>
							    					<p class="sz">Size : Regular</p>
							    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
							    				</div>
							    				<div class="btn-sec">
						    						<a href="product_single.html" class="btn4">About More</a>
						    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
					    						</div>
							    			</div>
							    		</div>
							    		<div class="js-filter-chicken">
							    			<div class="block-stl2">
							    				<div class="img-holder">
							    					<img src="{{asset('frontend/images/img1.png') }}" alt="" class="img-responsive">
							    				</div>
							    				<div class="text-block">
							    					<h3>Veggie Supreme</h3>
							    					<p class="sz">Size : Regular</p>
							    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
							    				</div>
							    				<div class="btn-sec">
						    						<a href="product_single.html" class="btn4">About More</a>
						    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
					    						</div>
							    			</div>
							    		</div>
							    		<div class="js-filter-chicken">
							    			<div class="block-stl2">
							    				<div class="img-holder">
							    					<img src="{{asset('frontend/images/img.png') }}" alt="" class="img-responsive">
							    				</div>
							    				<div class="text-block">
							    					<h3>Veggie Supreme</h3>
							    					<p class="sz">Size : Regular</p>
							    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
							    				</div>
							    				<div class="btn-sec">
						    						<a href="product_single.html" class="btn4">About More</a>
						    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
					    						</div>
							    			</div>
							    		</div>
							    		<div class="js-filter-burgers">
							    			<div class="block-stl2">
							    				<div class="img-holder">
							    					<img src="{{asset('frontend/images/img3.png') }}" alt="" class="img-responsive">
							    				</div>
							    				<div class="text-block">
							    					<h3>Veggie Supreme</h3>
							    					<p class="sz">Size : Regular</p>
							    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
							    				</div>
							    				<div class="btn-sec">
						    						<a href="product_single.html" class="btn4">About More</a>
						    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
					    						</div>
							    			</div>
							    		</div>
							    		<div class="js-filter-meats">
							    			<div class="block-stl2">
							    				<div class="img-holder">
							    					<img src="{{asset('frontend/images/img.png') }}" alt="" class="img-responsive">
							    				</div>
							    				<div class="text-block">
							    					<h3>Veggie Supreme</h3>
							    					<p class="sz">Size : Regular</p>
							    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
							    				</div>
							    				<div class="btn-sec">
						    						<a href="product_single.html" class="btn4">About More</a>
						    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
					    						</div>
							    			</div>
							    		</div>
							    		<div class="js-filter-meats">
							    			<div class="block-stl2">
							    				<div class="img-holder">
							    					<img src="{{asset('frontend/images/img1.png') }}" alt="" class="img-responsive">
							    				</div>
							    				<div class="text-block">
							    					<h3>Veggie Supreme</h3>
							    					<p class="sz">Size : Regular</p>
							    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
							    				</div>
							    				<div class="btn-sec">
						    						<a href="product_single.html" class="btn4">About More</a>
						    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
					    						</div>
							    			</div>
							    		</div>
							    		<div class="js-filter-meats">
							    			<div class="block-stl2">
							    				<div class="img-holder">
							    					<img src="{{asset('frontend/images/img.png') }}" alt="" class="img-responsive">
							    				</div>
							    				<div class="text-block">
							    					<h3>Veggie Supreme</h3>
							    					<p class="sz">Size : Regular</p>
							    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
							    				</div>
							    				<div class="btn-sec">
						    						<a href="product_single.html" class="btn4">About More</a>
						    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
					    						</div>
							    			</div>
							    		</div>
							    	</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



		<section class="spl-offer new-block">
			<div class="container-fluid c-grid">
				<div class="row">
					<div class="grid1">
						<div class="block-stl3 stl1">
							<div class="fixed-bg" style="background: url({{asset('frontend/images/img6.jpg')}});"></div>
							<div class="img-holder">
								<img src="{{asset('frontend/images/img6.png') }}" alt="" class="img-responsive">
							</div>
							<div class="offer-block">
								<p class="top-h">combo pack offer</p>
								<h2>want something real & juicy ?</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare placerat tellus.</p>
								<a href="shopping_cart.html" class="btn3">shop now</a>

							</div>
						</div>
						<div class="c-grid2">
							<div class="col1">
								<div class="block-stl3 stl3">
									<div class="img-holder">
										<img src="{{asset('frontend/images/img7.png') }}" alt="" class="img-responsive">
									</div>
									<div class="offer-block">
										<h2>new arrivals</h2>
										<p>Lorem ipsum dolor sit amconsetur adipiscing elit. Integer</p>
										<a href="shopping_cart.html" class="btn3">shop now</a>

									</div>
								</div>
							</div>
							<div class="col2">
								<div class="block-stl3 bg9 stl4">
									<div class="img-holder">
										<img src="{{asset('frontend/images/img8.png') }}" alt="" class="img-responsive">
									</div>
									<div class="offer-block">
										<h2>hot chicken</h2>
										<p>An to our fun day.Lorem ipsum dolor sit aadipiscing elit</p>
										<a href="shopping_cart.html" class="btn3">shop now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="grid2">
						<div class="block-stl3 stl2">
							<div class="fixed-bg" style="background: url({{asset('frontend/images/img9.jpg')}});"></div>
							<div class="img-holder">
								<img src="{{asset('frontend/images/img9.png') }}" alt="" class="img-responsive">
							</div>
							<div class="offer-block">
								<p class="top-h">sunday offer</p>
								<h2>wowooo combo pack special offer</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare.</p>
								<a href="shopping_cart.html" class="btn3">shop now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="deal-of-day new-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title">
							<p class="top-h">winter special offer</p>
							<h2>deal of the day</h2>
							<div class="btm-style"><span><img src="{{asset('frontend/images/btm-style.png') }}" alt="" class="img-responsive"></span></div>
							<p class="bottom-p">Lorem ipsum dolor sit amet consectetur adipiscing elit. <br>Curabitur erat turpis posuere ac ante at</p>
						</div>
					</div>
					<div class="col-lg-12 text-center">
						<div id="ofr_end"></div>
					</div>
					<div class="col-lg-12">
						<div class="item-slider2 owl-carousel owl-theme">
							<div class="item">
								<div class="block-stl2">
				    				<div class="img-holder">
				    					<img src="{{asset('frontend/images/img3.png') }}" alt="" class="img-responsive">
				    				</div>
				    				<div class="text-block">
				    					<h3>Veggie Supreme</h3>
				    					<p class="sz">Size : Regular</p>
				    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
				    				</div>
			    					<div class="btn-sec">
			    						<a href="product_single.html" class="btn4">About More</a>
			    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
		    						</div>
				    				<span class="nonveg veg-nonveg"></span>
				    			</div>
							</div>
							<div class="item">
								<div class="block-stl2">
				    				<div class="img-holder">
				    					<img src="{{asset('frontend/images/img4.png') }}" alt="" class="img-responsive">
				    				</div>
				    				<div class="text-block">
				    					<h3>Veggie Supreme</h3>
				    					<p class="sz">Size : Regular</p>
				    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
				    				</div>
				    				<div class="btn-sec">
			    						<a href="product_single.html" class="btn4">About More</a>
			    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
		    						</div>
				    				<span class="veg veg-nonveg"></span>
				    			</div>
							</div>
							<div class="item">
								<div class="block-stl2">
				    				<div class="img-holder">
				    					<img src="{{asset('frontend/images/img5.png') }}" alt="" class="img-responsive">
				    				</div>
				    				<div class="text-block">
				    					<h3>Veggie Supreme</h3>
				    					<p class="sz">Size : Regular</p>
				    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
				    				</div>
				    				<div class="btn-sec">
			    						<a href="product_single.html" class="btn4">About More</a>
			    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
		    						</div>
				    				<span class="nonveg veg-nonveg"></span>
				    			</div>
							</div>
							<div class="item">
								<div class="block-stl2">
				    				<div class="img-holder">
				    					<img src="{{asset('frontend/images/img.png') }}" alt="" class="img-responsive">
				    				</div>
				    				<div class="text-block">
				    					<h3>Veggie Supreme</h3>
				    					<p class="sz">Size : Regular</p>
				    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
				    				</div>
				    				<div class="btn-sec">
			    						<a href="product_single.html" class="btn4">About More</a>
			    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
		    						</div>
				    				<span class="nonveg veg-nonveg"></span>
				    			</div>
							</div>
							<div class="item">
								<div class="block-stl2">
				    				<div class="img-holder">
				    					<img src="{{asset('frontend/images/img5.png') }}" alt="" class="img-responsive">
				    				</div>
				    				<div class="text-block">
				    					<h3>Veggie Supreme</h3>
				    					<p class="sz">Size : Regular</p>
				    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
				    				</div>
				    				<div class="btn-sec">
			    						<a href="product_single.html" class="btn4">About More</a>
			    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
		    						</div>
				    				<span class="veg veg-nonveg"></span>
				    			</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="amezing-offers new-block">
			<div class="overlay"></div>
			<div class="fixed-bg parallax" style="background: url({{asset('frontend/images/bg1.png')}});"></div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="img-holder">
							<img src="{{asset('frontend/images/pz1.png') }}" alt="" class="img-responsive">		
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="text-block-stl1">
							<div class="title">
								<p class="top-h">amazing offers online</p>
								<h2>50% off pizzas online</h2>
								<p class="bottom-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare placerat tellus sit amet ullamcorper.</p>
								<a href="#" class="btn1 stl2">buy now</a>
								<a href="#" class="btn1 stl1">about more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="this-month new-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title">
							<p class="top-h">winter special offer</p>
							<h2>deal of the day</h2>
							<div class="btm-style"><span><img src="{{asset('frontend/images/btm-style.png') }}" alt="" class="img-responsive"></span></div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="block-stl2">
		    				<div class="img-holder">
		    					<img src="{{asset('frontend/images/img3.png') }}" alt="" class="img-responsive">
		    				</div>
		    				<div class="text-block">
		    					<h3>Veggie Supreme</h3>
		    					<p class="sz">Size : Regular</p>
		    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
		    				</div>
		    				<div class="btn-sec">
	    						<a href="product_single.html" class="btn4">About More</a>
	    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
							</div>
		    				<span class="nonveg veg-nonveg"></span>
		    			</div>
		    		</div>
		    		<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="block-stl2">
		    				<div class="img-holder">
		    					<img src="{{asset('frontend/images/img.png') }}" alt="" class="img-responsive">
		    				</div>
		    				<div class="text-block">
		    					<h3>Veggie Supreme</h3>
		    					<p class="sz">Size : Regular</p>
		    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
		    				</div>
		    				<div class="btn-sec">
	    						<a href="product_single.html" class="btn4">About More</a>
	    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
							</div>
		    				<span class="nonveg veg-nonveg"></span>
		    			</div>
		    		</div>
		    		<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="block-stl2">
		    				<div class="img-holder">
		    					<img src="{{asset('frontend/images/img2.png') }}" alt="" class="img-responsive">
		    				</div>
		    				<div class="text-block">
		    					<h3>Veggie Supreme</h3>
		    					<p class="sz">Size : Regular</p>
		    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
		    				</div>
		    				<div class="btn-sec">
	    						<a href="product_single.html" class="btn4">About More</a>
	    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
							</div>
		    				<span class="veg veg-nonveg"></span>
		    			</div>
		    		</div>
		    		<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="block-stl2">
		    				<div class="img-holder">
		    					<img src="{{asset('frontend/images/img4.png') }}" alt="" class="img-responsive">
		    				</div>
		    				<div class="text-block">
		    					<h3>Veggie Supreme</h3>
		    					<p class="sz">Size : Regular</p>
		    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
		    				</div>
		    				<div class="btn-sec">
	    						<a href="product_single.html" class="btn4">About More</a>
	    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
							</div>
		    				<span class="nonveg veg-nonveg"></span>
		    			</div>
		    		</div>
		    		<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="block-stl2">
		    				<div class="img-holder">
		    					<img src="{{asset('frontend/images/img5.png') }}" alt="" class="img-responsive">
		    				</div>
		    				<div class="text-block">
		    					<h3>Veggie Supreme</h3>
		    					<p class="sz">Size : Regular</p>
		    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
		    				</div>
		    				<div class="btn-sec">
	    						<a href="product_single.html" class="btn4">About More</a>
	    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
							</div>
		    				<span class="veg veg-nonveg"></span>
		    			</div>
		    		</div>
		    		<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="block-stl2">
		    				<div class="img-holder">
		    					<img src="{{asset('frontend/images/img.png') }}" alt="" class="img-responsive">
		    				</div>
		    				<div class="text-block">
		    					<h3>Veggie Supreme</h3>
		    					<p class="sz">Size : Regular</p>
		    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
		    				</div>
		    				<div class="btn-sec">
	    						<a href="product_single.html" class="btn4">About More</a>
	    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
							</div>
		    				<span class="nonveg veg-nonveg"></span>
		    			</div>
		    		</div>
		    		<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="block-stl2">
		    				<div class="img-holder">
		    					<img src="{{asset('frontend/images/img2.png') }}" alt="" class="img-responsive">
		    				</div>
		    				<div class="text-block">
		    					<h3>Veggie Supreme</h3>
		    					<p class="sz">Size : Regular</p>
		    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
		    				</div>
		    				<div class="btn-sec">
	    						<a href="product_single.html" class="btn4">About More</a>
	    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
							</div>
		    				<span class="veg veg-nonveg"></span>
		    			</div>
		    		</div>
		    		<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="block-stl2">
		    				<div class="img-holder">
		    					<img src="{{asset('frontend/images/img1.png') }}" alt="" class="img-responsive">
		    				</div>
		    				<div class="text-block">
		    					<h3>Veggie Supreme</h3>
		    					<p class="sz">Size : Regular</p>
		    					<p class="price"><span>$6.00</span> <del>$8.00 40% off</del></p>
		    				</div>
		    				<div class="btn-sec">
	    						<a href="product_single.html" class="btn4">About More</a>
	    						<a href="shopping_cart.html" class="btn1 stl2">Add to Cart</a>
							</div>
		    				<span class="veg veg-nonveg"></span>
		    			</div>
		    		</div>
				</div>
			</div>
		</section>

		<section class="this-month-blog new-block">
			<div class="container-fluid no-gutter">
				<div class="row">
					<div class="col-lg-12">
						<div class="title">
							<p class="top-h">this month</p>
							<h2>Our blog</h2>
							<div class="btm-style"><span><img src="{{asset('frontend/images/btm-style.png') }}" alt="" class="img-responsive"></span></div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="blog-slider1 owl-theme owl-carousel">
							<div class="item">
								<div class="blog-stl1">
									<div class="img-holder">
										<img src="{{asset('frontend/images/boy.jpg') }}" alt="" class="img-responsive" />
										<div class="ovrl-block">
											<h3>Donec leo metus placerat quis lorem sed ultricies bibendum metus.</h3>
											<a href="blog_single.html" class="btn1 stl2">read more</a>
										</div>
										<ul class="blog-info-nav">
			                                <li><a href="#"><i class="flaticon-profile"></i>Shamiyo</a></li>
			                                <li><a href="#"><i class="flaticon-chat"></i>245 Coments</a></li>
			                                <li><a href="#"><i class="flaticon-calendar"></i>2/04/2017</a></li>
			                            </ul>	
									</div>
								</div>
							</div>
							<div class="item">
								<div class="blog-stl1">
									<div class="img-holder">
										<img src="{{asset('frontend/images/girl.jpg') }}" alt="" class="img-responsive" />
										<div class="ovrl-block">
											<h3>Donec leo metus placerat quis lorem sed ultricies bibendum metus.</h3>
											<a href="blog_single.html" class="btn1 stl2">read more</a>
										</div>
										<ul class="blog-info-nav">
			                                <li><a href="#"><i class="flaticon-profile"></i>Shamiyo</a></li>
			                                <li><a href="#"><i class="flaticon-chat"></i>245 Coments</a></li>
			                                <li><a href="#"><i class="flaticon-calendar"></i>2/04/2017</a></li>
			                            </ul>	
									</div>
								</div>
							</div>
							<div class="item">
								<div class="blog-stl1">
									<div class="img-holder">
										<img src="{{asset('frontend/images/girl1.jpg') }}" alt="" class="img-responsive" />
										<div class="ovrl-block">
											<h3>Donec leo metus placerat quis lorem sed ultricies bibendum metus.</h3>
											<a href="blog_single.html" class="btn1 stl2">read more</a>
										</div>
										<ul class="blog-info-nav">
			                                <li><a href="#"><i class="flaticon-profile"></i>Shamiyo</a></li>
			                                <li><a href="#"><i class="flaticon-chat"></i>245 Coments</a></li>
			                                <li><a href="#"><i class="flaticon-calendar"></i>2/04/2017</a></li>
			                            </ul>	
									</div>
								</div>
							</div>
							<div class="item">
								<div class="blog-stl1">
									<div class="img-holder">
										<img src="{{asset('frontend/images/girl2.jpg') }}" alt="" class="img-responsive" />
										<div class="ovrl-block">
											<h3>Donec leo metus placerat quis lorem sed ultricies bibendum metus.</h3>
											<a href="blog_single.html" class="btn1 stl2">read more</a>
										</div>
										<ul class="blog-info-nav">
			                                <li><a href="#"><i class="flaticon-profile"></i>Shamiyo</a></li>
			                                <li><a href="#"><i class="flaticon-chat"></i>245 Coments</a></li>
			                                <li><a href="#"><i class="flaticon-calendar"></i>2/04/2017</a></li>
			                            </ul>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer class="main-footer new-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="footer-head">
							<h3>About Us :</h3>
						</div>
						<div class="footer-content">
							<p>Donec tincidunt, augue a convallis cursus, sapien eros efficitur sem in placerat sapien est nec quam.</p>
							<a href="#" class="link">Read More</a>
							<ul class="list-unstyled card-block">
								<li><a href="#"><img src="{{asset('frontend/images/crt1.png') }}" alt=""></a></li>
								<li><a href="#"><img src="{{asset('frontend/images/crt2.png') }}" alt=""></a></li>
								<li><a href="#"><img src="{{asset('frontend/images/crt3.png') }}" alt=""></a></li>
								<li><a href="#"><img src="{{asset('frontend/images/crt4.png') }}" alt=""></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<div class="our-company">
							<div class="footer-head">
								<h3>Our Company :</h3>
							</div>
							<div class="footer-content">
								<ul class="list-unstyled">
									<li><a href="#">New In</a></li>
									<li><a href="#">Pizza murgon</a></li>
									<li><a href="#">Burger king</a></li>
									<li><a href="#">Fried Chicken</a></li>
									<li><a href="#">Mocktail</a></li>
									<li><a href="#">Top Brands</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
						<div class="footer-head">
							<h3>Customer Care :</h3>
						</div>
						<div class="footer-content">
							<ul class="list-unstyled">
								<li><a href="#">New In</a></li>
								<li><a href="#">Pizza murgon</a></li>
								<li><a href="#">Burger king</a></li>
								<li><a href="#">Fried Chicken</a></li>
								<li><a href="#">Mocktail</a></li>
								<li><a href="#">Top Brands</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="flickr">
							<div class="footer-head">
								<h3>Get Flickr :</h3>
							</div>
							<div class="footer-content">
								<ul class="list-unstyled">
									<li><a href="#"><img src="{{asset('frontend/images/Layer-12.jpg') }}" alt="" class="img-responsive"></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/Layer-13.jpg') }}" alt="" class="img-responsive"></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/Layer-14.jpg') }}" alt="" class="img-responsive"></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/Layer-15.jpg') }}" alt="" class="img-responsive"></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/Layer-16.png') }}" alt="" class="img-responsive"></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/Layer-17.jpg') }}" alt="" class="img-responsive"></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/Layer-18.jpg') }}" alt="" class="img-responsive"></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/Layer-19.jpg') }}" alt="" class="img-responsive"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div class="copy-right">
			<div class="container">
				<p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
				<ul class="social-nav">
					<li><a href="#"><i class="flaticon-facebook-logo"></i></a></li>
					<li><a href="#"><i class="flaticon-twitter"></i></a></li>
					<li><a href="#"><i class="flaticon-google-plus-logo"></i></a></li>
					<li><a href="#"><i class="flaticon-dribbble-logo"></i></a></li>
					<li><a href="#"><i class="flaticon-behance"></i></a></li>
				</ul>
			</div>
		</div>
		<span id="go_to_top" class="go-to-top"><i class="flaticon-up-arrow"></i></span>

		<div class="theme-menu hide-sidebar">
			<h2>Choose your color</h2>
			<div id="style-switcher">
				<ul class="colors theme-btn">
					<li data-path="css/colors.css" data-url="images"> 
						<p class="btn clr-style" style="background:#c10a28;"></p>
					</li>
					<li data-path="css/colors2.css" data-url="images/clr2">
						<p class="btn clr-style" style="background:#f1b601;"></p>
					</li>
					<li data-path="css/colors3.css" data-url="images/clr3">
						<p class="btn clr-style" style="background:#0a84c1;"></p>
					</li>
					<li data-path="css/colors4.css" data-url="images/clr4"> 
						<p class="btn clr-style" style="background:#02a8aa;"></p>
					</li>
					<li data-path="css/colors5.css" data-url="images/clr5">
						<p class="btn clr-style" style="background:#db780d;"></p>
					</li>
					<li data-path="css/colors6.css" data-url="images/clr6">
						<p class="btn clr-style" style="background:#e54c04;"></p>
					</li>
				</ul>
			</div>
			<button class="btn btn-clr"><i class="fas fa-paint-brush"></i></button>
		</div>
	</div><!-- #wrapper -->


	<!-- include jQuery -->
    <script src="{{asset('frontend/js/jquery.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{asset('frontend/js/bootstrap.min.html') }}"></script>
    <!-- bootstrap -->
    <script src="{{asset('frontend/js/owl.carousel.min.js') }}"></script>
    <!-- slick slider  -->
	<script src="{{asset('frontend/js/slick.js') }}"></script>
	<!-- dscountdown  -->
	<script src="{{asset('frontend/js/dscountdown.min.js') }}"></script>
    <!-- jquery.nice-select -->
    <script src="{{asset('frontend/js/jquery.nice-select.js') }}"></script>
    <!-- magnific-popup -->
    <script src="{{asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Mixitup -->
    <script src="{{asset('frontend/js/mixitup.min.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBP1lPhUhDU6MINpruPDinAzXffRlpzzFo"></script>
	<script src="{{asset('frontend/js/map.js') }}"></script>
    <!-- custom js -->
    <script src="{{asset('frontend/js/custom.js') }}"></script>

</body>


</html>