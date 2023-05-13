<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Metas -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>Satie - Agency &amp; Portfolio HTML Template</title>
	<meta name="description" content="Satie - Agency & Portfolio HTML Template">

	<!-- External CSS -->
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/colors.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600%7CQuestrial" rel="stylesheet">

	<!-- Favicon -->
	<link rel="icon" href="assets/img/favicon.png">
<!--	bootstrap cdn stylesheet-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!--	lottie files script-->
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<!--	bootstrap cdn script and types js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js" integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg==" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<body class="agency-modern">

	<!-- ========== Header ========== -->

	<div class="hero">

        <!-- ========== Header ========== -->

        <?php include 'include/header.php' ?>

        <!-- ========== Header ========== -->

		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<br><br>
						<h2 class="mt-5">Get to Know Me and My Skills</h2>
						<h1 class="text-left">Hi, I am Adrien Madeleine, <div class="text">Web Developer</div></h1>
<!--						<a href="#about-me.html" class="btn-main brand-hover">about me</a>-->
					</div>
					<div class="col-6">
						<lottie-player src="https://lottie.host/4e3c6edf-e43a-4779-b97a-5bb6a2a48863/StTQAmb3SV.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
					</div>
				</div>
			</div>



		</div> <!-- /.content -->

	</div> <!-- /.hero -->

	<!-- ========== Main ========== -->

	<main>

		<div class="about cta_custom">

			<div class="info">

				<div class="content">

					<h3 class="brand-color">about me</h3>
					<h2 style="margin-bottom: unset!important;">I am Adrien Madeleine</h2><h4>A web developer</h4><br>

					<p class="opacity-75">Hello, my name is Adrien Madeleine and I am a web developer. I specialize in creating modern, responsive and user-friendly websites that help businesses to achieve their goals. My passion for technology and design, along with my expertise in HTML, CSS, JavaScript, and PHP, allows me to develop websites that are not only aesthetically pleasing but also functional and easy to navigate.</p>
					<p class="opacity-75">With years of experience in the industry, I have worked with clients from various backgrounds and industries, from startups to large corporations. I pride myself on providing personalized solutions that meet the specific needs of each client, while ensuring high quality and timely delivery.</p>
					<p class="opacity-75">Whether you need a simple static website, or a complex web application, I can help you bring your ideas to life. Contact me today to discuss your project and see how I can help you take your online presence to the next level.</p>
					<!--					<a href="contact.html" id="btn-readmore" class="btn-main btn-contact mt-3">read more</a>-->
					<a href="about-me.php" class="cta-link brand-color">Read More</a>
				</div> <!-- /.content -->

			</div> <!-- /.info -->

			<div class="info">

				<div class="content">

					<div class="image">
						<img src="assets/img/hello.jpg" alt="" class="img-cover border-brand">
					</div>


				</div> <!-- /.info -->
			</div>


				<div class="clearfix"></div>

			</div> <!-- /.about -->


<!--			<div class="cta_01" id="email-subscribe">-->
<!--				<div class="content">-->
<!--					<h2 class="text-dark">Subscribe to our newsletter</h2>-->
<!--					<form action="#" class="contact-form">-->

<!--						<input  name="email" id="email" placeholder="Email *" type="email" required>-->
<!--						<input type="submit" id="submit" value="send message">-->
<!--						<div class="clearfix"></div>-->

<!--					</form>-->
<!--				</div>-->
<!--			</div> &lt;!&ndash; /.cta_01 &ndash;&gt;-->

		<div class="portfolio-3-col-grid">

			<a href="single-project.html">
				<div class="portfolio-item">
					<img src="assets/img/portfolio/pwlab.png" alt="" class="img-cover">
					<div class="portfolio-item-overlay hover-color">
						<div class="info">
							<h2 class="portfolio-item-title">Pwlab</h2>
							<h3 class="portfolio-item-category">Web Development</h3>
						</div>
					</div>
				</div>
			</a>

			<a href="single-project.html">
				<div class="portfolio-item">
					<img src="assets/img/portfolio/eco-warriors.png" alt="" class="img-cover">
					<div class="portfolio-item-overlay hover-color">
						<div class="info">
							<h2 class="portfolio-item-title">Eco-Warriors</h2>
							<h3 class="portfolio-item-category">One Page Website</h3>
						</div>
					</div>
				</div>
			</a>

			<a href="single-project.html">
				<div class="portfolio-item">
					<img src="assets/img/portfolio/coworking.png" alt="" class="img-cover">
					<div class="portfolio-item-overlay hover-color">
						<div class="info">
							<h2 class="portfolio-item-title">Coworking</h2>
							<h3 class="portfolio-item-category">One Page Website</h3>
						</div>
					</div>
				</div>
			</a>

			<a href="single-project.html">
				<div class="portfolio-item">
					<img src="assets/img/portfolio/paseccu.gif" alt="" class="img-cover">
					<div class="portfolio-item-overlay hover-color">
						<div class="info">
							<h2 class="portfolio-item-title">Paseccu</h2>
							<h3 class="portfolio-item-category">Website & Web Application</h3>
						</div>
					</div>
				</div>
			</a>

			<a href="single-project.html">
				<div class="portfolio-item">
					<img src="assets/img/portfolio/pringles.png" alt="" class="img-cover">
					<div class="portfolio-item-overlay hover-color">
						<div class="info">
							<h2 class="portfolio-item-title">Pringles Soccer Game</h2>
							<h3 class="portfolio-item-category">Game Development</h3>
						</div>
					</div>
				</div>
			</a>

			<a href="single-project.html">
				<div class="portfolio-item">
					<img src="assets/img/portfolio/cocodezil-new.gif" alt="" class="img-cover">
					<div class="portfolio-item-overlay hover-color">
						<div class="info">
							<h2 class="portfolio-item-title">cocodezil</h2>
							<h3 class="portfolio-item-category">web development</h3>
						</div>
					</div>
				</div>
			</a>

			<div class="clearfix"></div>

		</div><!-- /.portfolio-3-col-grids -->

		<div class="portfolio-3-col-grid">

			<a href="single-project.html">
				<div class="portfolio-item">
					<img src="assets/img/img-placeholder.png" alt="" class="img-cover">
					<div class="portfolio-item-overlay hover-color">
						<div class="info">
							<h2 class="portfolio-item-title">Nakama Streetwear</h2>
							<h3 class="portfolio-item-category">Shopify</h3>
						</div>
					</div>
				</div>
			</a>

			<a href="single-project.html">
				<div class="portfolio-item">
					<img src="assets/img/portfolio/frima.png" alt="" class="img-cover">
					<div class="portfolio-item-overlay hover-color">
						<div class="info">
							<h2 class="portfolio-item-title">Frima</h2>
							<h3 class="portfolio-item-category">Web Application</h3>
						</div>
					</div>
				</div>
			</a>

			<a href="single-project.html">
				<div class="portfolio-item">
					<img src="assets/img/img-placeholder.png" alt="" class="img-cover">
					<div class="portfolio-item-overlay hover-color">
						<div class="info">
							<h2 class="portfolio-item-title">AdventuresofchefSarah</h2>
							<h3 class="portfolio-item-category">Wordpress</h3>
						</div>
					</div>
				</div>
			</a>

			<div class="clearfix"></div>

		</div><!-- /.portfolio-3-col-grids -->

		<div class="cta_01">
			<div class="content">
				<h2>Ready to start a project?</h2>
				<a href="contact.php" id="btn-contact" class="btn-main">contact us</a>
			</div>
		</div> <!-- /.cta_01 -->

	</main> <!-- /main -->

	<footer class="footer-default footer-inverse footer-default-inverse-border">

		<div class="container-large">

            <p class="copyright"><i class="far fa-copyright"></i> 2023 <a class="brand-color" href="">adrienmad</a> website. all rights reserved</p>

			<ul class="follow-us-links">
				<li><a target="_blank" href="https://www.linkedin.com/in/adrien-madeleine-0b7561194/"><i class="fab fa-linkedin-in"></i></a></li>
				<li><a target="_blank" href="https://github.com/adrienmad"><i class="fab fa-github"></i></a></li>
			</ul> 

			<div class="clearfix"></div>

		</div> <!-- /.container-large -->

	</footer> <!-- /.footer-default -->

    <!-- ========== Mobile Nav ========== -->
    <?php include 'include/mobile-header.php' ?>
    <!-- ========== Mobile Nav ========== -->
	
	<script src="assets/js/jquery-3.6.0.min.js"></script>
	<script src="assets/js/main.js"></script>


	<script>
		var typing=new Typed(".text", {
			strings: ["", "Freelancer", "Web Developer"],
			typeSpeed: 200,
			backSpeed: 100,
			loop: true,
		});
	</script>
</body> <!-- /.agency-modern -->
</html>