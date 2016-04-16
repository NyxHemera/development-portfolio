<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="css/home.css"/>
	<link rel="stylesheet" href="css/common.css"/>
</head>

<body>
	<?php include 'header.php'; ?>
	<div id="main-content">
		<div id="wrap-hero">
			<p>My name is Jordan Rust and I'm a Web Developer in Atlanta, Georgia.</p>
		</div>
		
		<div id="portfolio-grid">

			<div class="row"><h3>Recent Work</h3></div>

			<div class="row">
				<div>
					<a href="http://rust.photography/">
					<img src="/media/icon-photog.jpg">
					<div class="overlay">
						<h2>Rust.Photography</h2>
						<p>A personal website to display my photography portfolio.</p>
					</div>
					</a>
				</div>
				<div>
					<a href="http://codepen.io/NyxHemera/full/OMQvNq/">
					<img src="/media/icon-simon.jpg">
					<div class="overlay">
						<h2>Simon</h2>
						<p>The classic Simon game, made using jQuery and the Web Audio API.</p>
					</div>
					</a>
				</div>
				<div>
					<a href="http://nyxhemera.github.io/tetris-ga/">
					<img src="/media/icon-tetris.jpg">
					<div class="overlay">
						<h2>Tetris</h2>
						<p>My take on Tetris, along with a new cooperative mode where you work alongside a partner to complete lines.</p>
					</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div id="btn-more">
					<a href="work.php">
					<h4>See More <i class="fa fa-arrow-right"></i></h4>
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>
