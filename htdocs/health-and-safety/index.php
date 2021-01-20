<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/include/common.php'; ?>
<!DOCTYPE HTML>
<html lang="el">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width"/>
	<title>Ασφάλεια και Υγεία - Υπουργείο Εργασίας &amp; Κοινωνικών Υποθέσεων</title>
	<link rel="shortcut icon" href="/favicon.ico"/>
	<!-- STYLES & JQUERY
	================================================== -->
	<link rel="stylesheet" type="text/css" href="/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="/css/icons.css"/>
	<link rel="stylesheet" type="text/css" href="/css/skinblue.css"/><!-- change skin color -->
	<link rel="stylesheet" type="text/css" href="/css/responsive.css"/>
	<script src="/js/jquery-1.9.0.min.js"></script><!-- the rest of the scripts at the bottom of the document -->
</head>
<body>
<!-- TOP LOGO & MENU
================================================== -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/include/topnav.php'; ?>
<!-- HEADER
================================================== -->
<div class="undermenuarea">
	<div class="boxedshadow">
	</div>
	<div class="grid">
		<div class="row">
			<div class="c8">
				<h1 class="titlehead">Ασφάλεια και Υγεία</h1>
			</div>
		</div>
	</div>
</div>
<!-- CONTENT
================================================== -->
<div class="grid">
	<nav id="breadcrumbs" class="c12">
		<p>
			<a href="/" rel="index" aria-label="Αρχική" class="icon-home"></a> /
			<span>ΑΣΦΑΛΕΙΑ</span>
		</p>
	</nav>
	<div class="row">
		<div id="content">
			<div class="boxthreecolumns cat3">
				<div class="boxcontainer">
					<a href="covid-19">
					<div class="mosaic-block cover mosaicover4col">
						<div class="mosaic-overlay">
							<img src="/images/covid-19-work-safety.jpg" alt="Δύο ανρθρωποι με μάσκες ακούμπουν τους αγκώνες τους ως χαιρετισμό, υπακούοντας στα μέτρα με πλαίσιο τον Covid-19">
						</div>
						<div class="mosaic-backdrop blue">
						<div class="details">
							<p>
								Πληροφορίες για την αντιμετώπηση και την ασφαλη διαχείρηση της πανδημίας Covid-19 στους χώρους εργασίας.
							</p>
							<i class="icon-cog mosaiclink"></i>
						</div>
						</div>
					</div>
					<h2><i class="icon-large icon-medkit smallrightmargin"></i>COVID-19</h2>
					</a>
				</div>
			</div>
			<div class="boxthreecolumns cat1 cat3">
				<div class="boxcontainer">
					<a href="legal">
					<div class="mosaic-block cover mosaicover4col">
						<div class="mosaic-overlay">
							<img src="/images/legal.png" alt="Δικηγόρος">
						</div>
						<div class="mosaic-backdrop green">
						<div class="details">
							<p>
								Ενημερωθείτε για το νομικό πλαίσιο γύρω από την ασφάλεια και την υγεία στην εργασία.
							</p>
							<i class="icon-cog mosaiclink"></i>
						</div>
						</div>
					</div>
					<h2><i class="icon-large icon-book smallrightmargin"></i>ΝΟΜΟΘΕΣΙΑ</h2>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end grid -->
<!-- FOOTER
================================================== -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php' ?>

<!-- JAVASCRIPTS
================================================== -->
<!-- all -->
<script src="/js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="/js/common.js"></script>

<!-- cycle -->
<script src="/js/jquery.cycle.js"></script>

<!-- twitter -->
<!-- <script src="js/jquery.tweet.js"></script> -->

<!-- filtering -->
<script src="/js/jquery.isotope.min.js"></script>

<!-- hover effects -->
<script type="text/javascript" src="/js/mosaic.1.0.1.min.js"></script>

<!-- CALL hover effects -->
<script type="text/javascript">
			$(document).ready(function($){
				$('.cover').mosaic({
					animation	:	'slide',	//fade or slide
					hover_x		:	'578'		//Horizontal position on hover
				});
		    });
</script>

<!-- CALL isotope filtering -->
<script>
$(document).ready(function(){
var $container = $('#content');
  $container.imagesLoaded( function(){
        $container.isotope({
	filter: '*',
	animationOptions: {
     duration: 750,
     easing: 'linear',
     queue: false,
   }
});
});
$('#nav a').click(function(){
  var selector = $(this).attr('data-filter');
    $container.isotope({
	filter: selector,
	animationOptions: {
     duration: 750,
     easing: 'linear',
     queue: false,
   }
  });
  return false;
});
$('#nav a').click(function (event) {
    $('a.selected').removeClass('selected');
    var $this = $(this);
    $this.addClass('selected');
    var selector = $this.attr('data-filter');
    $container.isotope({
         filter: selector
    });
    return false; // event.preventDefault()
});
});
 </script>
</body>
</html>
