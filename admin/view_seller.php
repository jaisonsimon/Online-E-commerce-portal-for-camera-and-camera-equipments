<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>LENSMAN</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body>
	<!--top header section start -->
	<div class="top_header_section">
		<div class="container">
			<div class="top_section">
				<div class="row">
					<div class="col-sm-6">
						<div class="call_taital">
							<!-- <ul>
								<li><a href="#"><img src="images/call-icon.png"></a></li>
								<li><a href="#">+ 1234567890</a></li>
								<li class="mail"><a href="#"><img src="images/mail-icon.png"></a></li>
								<li><a href="#">demo@gmail.com</a></li>
							</ul> -->
						</div>
					</div>
					<div class="col-sm-6">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- top header section start -->
		<!-- header section start -->
	<div class="header_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-lg-3">
				<div class="logo"><a href="index.php"><h1><b>ON MY CAM</b></h1></a></div>
				</div>
				<div class="col-sm-5">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        	<ul>
                            <li><a class="nav-item nav-link" href="index.php">Home</a></li>
                                <li><a class="nav-item nav-link" href="view_buyer.php">View Buyer</a></li>
								<li><a class="nav-item nav-link" href="view_seller.php">View Seller</a></li>
								<li><a class="nav-item nav-link" href="view_products.php">View Products</a></li>

                               
                           </ul>
                        </div>
                    </div>
                    </nav>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="search_main">
						<div class="left_main">
							
						</div>
						<div class="right_main">
							<div class="login_text"><a href="logout.php">Logout<span class="user_icon"><img src="images/user-icon.png"></span></a></div>
						</div>
				    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- header section end -->
    <!-- TABLE section start -->

	
<!-- <div class="event-schedule-area-two bg-color pad100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <div class="title-text">
                        <h2>BUYER</h2>
                    </div>
                </div>
            </div>
            <!-- /.col end-->
        <!-- </div> --> -->
        <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
				            <div class="col-md-7">
					            <div class="images_1"><img src="images/banner-bg.png"></div>
					            <div class="banner_main">
						            <div class="banner_left">
						            </div>
						        <div class="banner_left">
						        	<h1 class="usiing_text">Sellers list</h1>
							       
						        </div>
					        </div>
				        </div>
				            <div class="col-md-5">
					            <div class="images_2"><img src="images/img-1.png"></div>
				            </div>
			            </div>
                </div>
        <!-- <div class="row">
            <div class="col-lg-12">
                <ul class="nav custom-tab" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" id="home-taThursday" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"></a> -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade active show" id="home" role="tabpanel">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th class="text-center" scope="col">Date</th>  -->
                             <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th  scope="col">Address</th>
                            <th  scope="col">Adhar</th>
                            <th  scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include '../connection.php';
                        $s = "select * from sellerreg,login where sellerreg.loginid=login.loginid and login.usertype='seller'";
                        if ($result = mysqli_query($con,$s)) {
                                while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr class="inner-box">
                            <!-- <th scope="row"> -->
                                <!-- <div class="event-date">2
                                    <span>16</span> -->
                                    <!-- <p>Novembar</p> -->
                                <!-- </div> -->
                            <!-- </th> -->
                            <td>
                                <div class="event-img">
                                    <!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" /> -->
                                    <h3><a href="#">
                                    <?php
                                        echo $row["name"];
                                    ?>
                                    </a></h3>
                                </div>
                            </td>
                            <td>
                                <div class="event-wrap">
                                    <div class="meta">
                                        <div class="organizers">
                                            <a href="#">
                                            <?php
                                                echo $row["email"];
                                            ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="r-no">
                                    <span>
                                        <?php
                                            echo $row["phonenumber"];
                                        ?>
                                    </span>
                                </div>
                            </td>
                            <td>
                            <div class="r-no">
                                    <span>
                                <!-- <div class="primary-btn"> -->
                                    <!-- <a  href="#"> -->
                                        <?php
                                            echo $row["address"];
                                        ?>
                                        </span>
                                </div>
                                    <!-- </a>
                                </div> -->
                            </td>
                            <td>
                            <div class="r-no">
                                    <span>
                                <!-- <div class="primary-btn"> -->
                                    <!-- <a  href="#"> -->
                                        <!-- <img src="images/<?php echo $row["adhar"];?> " width="150px"  > -->
                                        <?php
                                            echo $row["adhar"];
                                        ?>
                                        </span>
                                </div>
                                    <!-- </a>
                                </div> -->
                            </td>
                            <td>
                            <?php
                            if($row['status']==0){
                            ?>
                            <a  class="btn btn-danger py-2 px-3" style="background-color:green;border-color:green "href="approve.php?id=<?php echo $row['loginid'] ?>">Approve</a>
                            <?php } 
                            else { echo "Approved";}
                            ?>
                            <a  class="btn btn-danger py-2 px-3" href="deleteseller.php?id=<?php echo $row['loginid'] ?>">Delete</a>
                            </td>
                        </tr>
                        <?php
                            }}
                        ?>
                        <br><br>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- </div>
</div> -->
    <!-- TABLE section END -->

    <br>
    <br>
    <br>

    <!-- footer section start -->
    <div class="footer_section">
        <div class="container">
            <div class="footer_logo"></div>
            <p class="long_text">It is a long established fact that a reader will be It is a long established fact that a reader will be </p>
            <div class="footer_section_2">
                <div class="row">
                    <div class="col-sm-12 col-lg-4">
                        <div class="icon_main">
                            <ul>
                                <li><a href="#"><img src="images/map-icon.png"></a></li>
                                <li><a href="#"><img src="images/email-icon.png"></a></li>
                                <li><a href="#"><img src="images/contact-icon.png"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <h1 class="news_text">Newsletter</h1>
                            <input type="" class="email_bt" placeholder="Enter your email" name="">
                            <button class="subscribe_bt"><a href="#">Subscribe</a></button>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><img src="images/fb-icon.png"></a></li>
                                <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                                <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    
    <!-- copyright section end -->


    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
      $(document).ready(function(){
      $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });


$('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        });
         </script>


     
</body>
</html>

