<!DOCTYPE html>
<?php
session_start()
	?>
<html lang="zxx" class="no-js">

<head>
		<link  href="img/favicon.ico"  rel="shortcut icon" />
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>درخواست صدور کارت عضویت</title>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i|Roboto:400,500" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/availability-calendar.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<?php 
	$shen11 = $_POST['interno'];
		$con=new MySQLi("localhost","root","","nokhb");
		//$con=new MySQLi("irannokhbeh.ir","irannokh_nokh","^9][be&]tp@B","irannokh_nokh");
	mysqli_set_charset($con,'utf8');

	$_SESSION['price'] = '15000';

	 if($con->connect_error)echo('we cant conect to data base');
else{
	$res=mysqli_query($con,"SELECT * FROM submit where shen='$shen11'");
		
while($crs=mysqli_fetch_assoc($res))
{
 $_SESSION['nam11'] = $crs["nam"] ;
 $_SESSION['lnam11'] = $crs["lnam"];
 $_SESSION['noe11'] = $crs["noe"];
	$_SESSION['shen11'] = $shen11;
}

}
	
	
	?>
	<!--================ Start Header Area =================-->
	<header class="header-area">
		<div class="container">
			<div class="header-wrap">
				<div class="header-top d-flex justify-content-between align-items-center navbar-expand-md">
					<div class="col menu-left">
						<a href="about.html">درباره ما</a>
						<a href="menu.html">منوی سایت</a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a class="active" href="index.html">صفحه اصلی</a>
					</div>
					<div class="col-3 logo">
						<a href="index.html"><img class="mx-auto" src="img/logo.png"  alt="iran nokhbeh logo"></a>
					</div>
					<nav class="col navbar navbar-expand-md justify-content-end">

						<!-- Toggler/collapsibe Button -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
							<span class="lnr lnr-menu"></span>
						</button>

						<!-- Navbar links -->
						<div class="collapse navbar-collapse menu-right" id="collapsibleNavbar">
							<ul class="navbar-nav justify-content-center w-100">
								<li class="nav-item hide-lg">
									<a class="nav-link" href="index.html">صفحه اصلی</a>
								</li>
								<li class="nav-item hide-lg">
									<a class="nav-link" href="menu.html">منوی سایت</a>
								</li>
								<li class="nav-item hide-lg">
									<a class="nav-link" href="about.html">درباره ما</a>
								</li>
								<!-- Dropdown -->
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
										ارتباط با ما
									</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="contact.html">ارسال پیام</a>
										<a class="dropdown-item" href="elements.html">ارسال شکایت</a> <a class="dropdown-item" href="faq.html">سوالات متداول</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
										کاربران
									</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="submit.html">ثبت نام</a>
										<a class="dropdown-item" href="pro.html">ورود به پروفایل</a>        <a class="dropdown-item" href="work.html">همکاری با ما</a>
									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="khed.html">خدمات ما</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!--================ End Header Area =================-->

	<!--================ Start banner Area =================-->
	<section class="banner-area relative">
		<div class="container">
			<div class="row height align-items-center justify-content-center">
				<div class="banner-content col-lg-6">
					<h1>تایید اطلاعات</h1>
					<hr>
					
				</div>
			</div>
		</div>
	</section>
	<!--================ End banner Area =================-->
<center>
	<section class="chefs-quotes-area ">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5">
					<div class="section-title relative">
				
<img src="img/sc.png" width="100%" alt="کارت عضویت">
					</div>
				</div>
				<div class="offset-lg-1 col-lg-6 col-md-6">
					<div>
						<p>
						<div class="posts-list">
	

					<div class="single-post row">
			
						<div >
												<div class="comment-form">
						<h3>اطلاعات زیر را کنترل و در صورت نیاز اصلاح نمایید </h3>
						
				<br>
<br>
													
							<div class="form-group">
							 نام :	<input type="text"  name="interno" class="form-control" id="interno"  value="<?php if($con->connect_error)echo('we cant conect to data base');
else{
	$res=mysqli_query($con,"SELECT * FROM submit where shen='$shen11'");
		
while($crs=mysqli_fetch_assoc($res))
{
 echo($crs["nam"]) ;
}

} ?>"required="">
							</div>
							<div class="form-group">
							نام خانوادگی :	<input type="text"  name="interno" class="form-control" id="interno" value="<?php if($con->connect_error)echo('we cant conect to data base');
else{
	$res=mysqli_query($con,"SELECT * FROM submit where shen='$shen11'");
		
while($crs=mysqli_fetch_assoc($res))
{
 echo($crs["lnam"]) ;
}

} ?>"required="">
							</div>
							<div class="form-group">
							کد ملی :	<input type="text"  name="interno" class="form-control" id="interno" readonly value="<?php if($con->connect_error)echo('we cant conect to data base');
else{
	$res=mysqli_query($con,"SELECT * FROM submit where shen='$shen11'");
		
while($crs=mysqli_fetch_assoc($res))
{
 echo($crs["shen"]) ;
}

} ?>"required="">
							</div>
							<div class="form-group">
							نوع عضویت :	<input type="text"  name="interno" class="form-control" id="interno" value="<?php 
							if($con->connect_error)echo('we cant conect to data base');
else{
	$res=mysqli_query($con,"SELECT * FROM submit where shen='$shen11'");
		
while($crs=mysqli_fetch_assoc($res))
{
if($crs["noe"]=='50000') echo("طلایی");
			else {
				if($crs["noe"]=='30000') echo("نقره ای");
				else{
					if($crs["noe"]=='20000') echo("برنزی");
					else echo("سبز");
				}}}} ?>" readonly required="">
							</div>
									<div class="form-group">
							
										<center> مبلغ قابل پرداخت جهت صدور کارت عضویت : 15.000 تومان </center>
							</div>
					
			<a href="req.php">	<input type="button" value="تایید و پرداخت" class="primary-btn"></a>
					
													
					</div>
								
						</div>
					</div>
				</div>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	</center>
	
	
<!--================ Start Footer Area =================-->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">	<center><h4>گواهی تایید وزارت صنعت و معدن و تجارت</h4></center>
						<ul>
							<center><li>در دست اقدام</li></center>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<center><center><h4>گواهی تایید وزارت ارشاد</h4></center></center>
						<ul><center><img id = 'jxlzwlaorgvjnbqewlaonbqe' style = 'cursor:pointer' onclick = 'window.open("https://logo.samandehi.ir/Verify.aspx?id=143242&p=rfthaodsxlaouiwkaodsuiwk", "Popup","toolbar=no, scrollbars=no, location=no, statusbar=no, menubar=no, resizable=0, width=450, height=630, top=30")' alt = 'logo-samandehi' src = 'https://logo.samandehi.ir/logo.aspx?id=143242&p=nbpdshwlqftiodrfshwlodrf' />
						</center></ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<center><h4>گواهی تایید زرین پال</h4></center>
						<ul>
							<li><center><script src="https://cdn.zarinpal.com/trustlogo/v1/trustlogo.js" type="text/javascript"></script></center></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<center><h4>گواهی تایید بانک سامان</h4></center>
						<ul>	<center><li> در دست اقدام</li></center>
						</ul>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget"> 
						<p>عضویت در خبرنامه </p>
						<div class="" id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get">
								<div class="input-group">
									<input type="text" class="form-control" name="email" placeholder="آدرس ایمیل خود را وارد نمایید" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'آدرس ایمیل خود را وارد نمایید '" required="" type="email">
									<div class="input-group-btn">
										<button class="btn btn-default" type="submit">
											<span class="lnr lnr-arrow-right"></span>
										</button>
									</div>
									<div class="info"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom row align-items-center justify-content-between">
				<p class="footer-text m-0 col-lg-6 col-md-12">کلیه ی حقوق این سایت طبق قوانین کپی رایت محفوظ است </p>
				<div class="col-lg-6 col-sm-12 footer-social">
					 
					<a href="#"><i class="fa fa-twitter"></i></a>	<a href="https://www.instagram.com/iranokhbeh/"><i class="fa fa-instagram"></i></a>
					  
				</div>
			</div>
		</div>
	</footer>
	<!--================ End Footer Area =================-->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/main.js"></script>
</body>

</html>