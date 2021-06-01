<?php
session_start();
error_reporting(0);
include('includes/config.php');

$pid=intval($_GET['pid']);

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Movies Portal Home Page</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

	</head>
    <body class="cnt-home">
	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
<div class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
					<!-- ============================================================= LOGO ============================================================= -->
<div class="logo">
	<a href="index.php">
		
	



			</div><!-- /.row -->

		</div><!-- /.container -->

	</div>
	<?php include('includes/main-header.php');?>

<?php include('includes/menu-bar.php');?>
</header>



		<!-- ============================================== SCROLL TABS ============================================== -->
		<div id="product-tabs-slider" class="scroll-tabs inner-bottom-vs  wow fadeInUp">
			
			<div class="tab-content outer-top-xs">
				<div class="tab-pane in active" id="all">			
					<div class="product-slider">
						<div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4" style="margin-left: 20px;">
<?php
$ret=mysqli_query($con,"select * from films,type where type.type_id=films.type_id and f_id='$pid'");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>

						    	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="films-details.php?pid=<?php echo htmlentities($row['f_id']);?>">
				<img  src="../admin/images/<?php echo htmlentities($row['f_id']);?>/<?php echo htmlentities($row['image']);?>" data-echo="../admin/images/<?php echo htmlentities($row['f_id']);?>/<?php echo htmlentities($row['image']);?>"  width="180" height="300" alt=""></a>
			</div><!-- /.image -->			

			                        		   
		</div><!-- /.product-image -->
			
		
        
		<div class="product-info" style="float: right;width: 100%;margin-right: -200px;margin-top: -300px;">
			<h3 class="name"><a href="films-details.php?pid=<?php echo htmlentities($row['f_id']);?>"><?php echo htmlentities($row['f_name']);?></a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					Date: <?php echo htmlentities($row['f_date']);?></span>
                    </div>
                    <div class="product-price">	 
				<span class="price">
				language: <?php echo htmlentities($row['lang']);?></span>
                    </div>
                    <div class="product-price">	
				<span class="price">
				country: <?php echo htmlentities($row['country']);?></span>	
                    </div>
                   <div class="product-price">	
                    <span class="price">
			class: <?php echo htmlentities($row['class']);?></span>    
                </div>
                <div class="product-price">
                <strong>   type: </strong> <?php echo htmlentities($row['type_name']);?></span> 
                </div>
                <div class="product-price">
                <strong>  peroid:</strong> <?php echo htmlentities($row['peroid']);?></span>
                </div>
                <div class="product-price">
                <strong>  Quality:</strong> <?php echo htmlentities($row['qua']);?></span> 
                </div>
                <div class="product-price">
                <strong>  translate:</strong> <?php echo htmlentities($row['trans']);?></span>
                </div>
                <div class="product-price">
                <strong>  publisher date:</strong> <?php echo htmlentities($row['pub_date']);?></span> 
                </div>
                <div class="product-price">
              <strong>story:</strong>  <?php echo htmlentities($row['story']);?></span>
                </div>
                			  
                			
                			
                			
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
		
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	<?php } ?>

			</div><!-- /.home-owl-carousel -->
					</div><!-- /.product-slider -->
				</div>











	
	

</div>
</div>
<?php
$ret=mysqli_query($con,"select heroFilms.h_id, h_name,h_image from hero,heroFilms where hero.h_id=heroFilms.h_id and heroFilms.f_id='$pid'");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
<div>


<div class="image" style="margin-left: 30px;">
<h3>Hero: </h3>
				<a href="herofilms-details.php?pid=<?php echo htmlentities($row['h_id']);?>">
				<img  src="../admin/heroimage/<?php echo htmlentities($row['h_image']);?>" data-echo="../admin/heroimage/<?php echo htmlentities($row['h_image']);?>"  width="50" height="50" alt=""></a>
                <h3 class="name"><a href="herofilms-details.php?pid=<?php echo htmlentities($row['h_id']);?>"><?php echo htmlentities($row['h_name']);?></a></h3>
			</div><!-- /.image -->			

			                        		   
		</div><!-- /.product-image -->
			
                			 

</div>
<?php } ?>
<?php include('includes/footer.php');?>
	
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
</html>