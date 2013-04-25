<!DOCTYPE html>
<?php $thisPage="home"; ?>
<html lang="en">
	<head>
		<?php include('includes/head.php'); ?>
		<title>iPaint uPaint</title>
	</head>
	<body>
		<div class="container" id="main">
			<div class="row">
				<div class="span5 offset1 hidden-phone iphone">
					<div id="myCarousel" class="carousel slide">
						<div class="carousel-inner">
							<div class="active item"><img src="/img/ipaint1.png" alt="iPaint uPaint Screenshot1"/></div>
							<div class="item"><img src="/img/ipaint2.png" alt="iPaint uPaint Screenshot2"/></div>
							<div class="item"><img src="/img/ipaint3.png" alt="iPaint uPaint Screenshot3"/></div>
							<div class="item"><img src="/img/ipaint4.png" alt="iPaint uPaint Screenshot4"/></div>
							<div class="item"><img src="/img/ipaint5.png" alt="iPaint uPaint Screenshot5"/></div>
						</div>
					</div> <!-- carousel -->
				</div> <!-- span -->
				<div class="span5">
					<h1>iPaint uPaint</h1>
					<h2>Red paint, blue paint, iPaint uPaint!</h2>
					<img class="lineup center visible-phone" src="img/lineup2@2x.png" title="iPaint uPaint Lineup" alt="iPaint uPaint Lineup"/>
					<br />
					<img id="icon" src="img/icon@2x.png" title="iPaint uPaint Icon" alt="iPaint uPaint Icon"/>
					<p>A fun, wireless fingerpainting app for iPhone, iPad, and iPod Touch.</p>
					<p>Paint by yourself or wirelessly with a friend! Select a tool, choose a size, and pick a color. Then share your painting on Facebook, Twitter, or Instagram. iPaint uPaint is fun for anyone, anytime, in any state of mind!</p>
					<br />
					<button class="btn btn-warning btn-large btn-block" type="button">
						<a href="http://bit.ly/ipupappstr" target="_blank">
							<img src="img/appstore@2x.png" id="appstore" title="Download on the App Store" alt="Download on the App Store"/>
						</a>
					</button>
					<br />
					<img class="lineup center" src="img/lineup1@2x.png" title="iPaint uPaint Lineup" alt="iPaint uPaint Lineup"/>
				</div> <!-- span -->
			</div> <!-- row -->
			<?php include('includes/footer.php'); ?>
		</div> <!-- main -->
		<?php include('includes/foot.php'); ?>
	</body>
</html>