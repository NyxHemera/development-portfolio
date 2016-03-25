<html>
<head>
	<title>Work</title>
	<link rel="stylesheet" href="css/work.css"/>
	<link rel="stylesheet" href="css/common.css"/>
</head>

<body id="body-work">
	<?php include 'header.php'; ?>
	<div id="main-content">
		<div id="wrap-hero">
			<h3>Responsive Web Development</h3>
			<ul>
				<li>HTML</li>
				<li>CSS</li>
				<li>JavaScript</li>
			</ul>
		</div>
		
		<div id="portfolio-grid">
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
					<a href="http://codepen.io/NyxHemera/full/mVZgNg/">
					<img src="/media/icon-hexclock.jpg">
					<div class="overlay">
						<h2>Hexadecimal Clock</h2>
						<p>A clock shown in hexadecimal that alters the page colors based on the corresponding time.</p>
					</div>
					</a>
				</div>
				<div>
					<a href="http://codepen.io/NyxHemera/full/bEJMZB/">
					<img src="/media/icon-textclock.jpg">
					<div class="overlay">
						<h2>Text Clock</h2>
						<p>My take on the famous qlocktwo text based clock.</p>
					</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>