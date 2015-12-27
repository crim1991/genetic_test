<!doctype html>
<html>
<head>
	<title>Responsive App Page</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
		<div class="wrapper">
			<!-- <h1>Company Name</h1> -->
			<img src="images/gt_logo2.png" height="94" width="280">
			<form>
				<input type="text" value="Email Address">
				<input type="button" value="Получи скидку 30%!">
			</form>
			<div class="clear"></div>
		</div>
	</header>
	<div id="banner">
		<div class="wrapper">
			<section class="introduction">
				<h2>Genetic Test</h2>
				<p>С нами легче понять себя!</p>
			</section>
			<section class="video">
				<iframe style="border-color: #FFF;" width="900" height="391" frameborder="0" allowfullscreen 
					src="video/video_gt.mp4">
				</iframe>
<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/MeiSPy0d8ig" frameborder="0" allowfullscreen></iframe> -->
			</section>
				<a class="download" href="#">Узнай БОЛЬШЕ!</a>
			<div class="clear"></div>
		</div>
	</div>
	<div id="feature-section" class="feature-left">
		<div class="wrapper">
			<section class="description">
				<h3>Section 1 Heading</h3>
				<p>Lorem ipsum dolor sit amet, sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Sed posuere at bibendum nulla sed lobortis.</p>
			
				<p>Nulla vitae elit libero, a pharetra augue. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum. Curabitur blandit bibendum nulla sed tempus.</p>
			</section>
			<section class="image">
				<img src="images/sample-image.png" alt="sample image" />
			</section>
			<div class="clear"></div>
		</div>
	</div>
	<div id="feature-section" class="feature-right">
		<div class="wrapper">
			<section class="description">
				<h3>Section 2 Heading</h3>
				<p>Lorem ipsum dolor sit amet, sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Sed posuere at bibendum nulla sed lobortis.</p>
			
				<p>Nulla vitae elit libero, a pharetra augue. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum. Curabitur blandit bibendum nulla sed tempus.</p>
			</section>
			<section class="image">
				<img src="images/sample-image.png" alt="sample image" />
			</section>
			<div class="clear"></div>
		</div>
	</div>
	<div class="wrapper">
		<a class="wide-button" href="#">Download it now and see what all the buzz is about!</a>
	</div>
	<footer>
		<ul id="social-links">
			<li><a class="facebook" href="#">Facebook</a></li>
			<li><a class="twitter" href="#">Twitter</a></li>
			<li><a class="stumbleupon" href="#">Stumbleupon</a></li>
			<li><a class="google" href="#">Google+</a></li>
			<li><a class="instagram" href="#">Instagram</a></li>
		</ul>
		<section class="copyright">
			<p>Copyright &copy; <?php echo date("Y"); ?> <strong>Genetic Test</strong>.<br/>
			All Rights Reserved.</p>
		</section>
	</footer>
</body>
</html>