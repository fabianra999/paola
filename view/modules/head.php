<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Paola Cantor Consultor IT</title>

	<link rel="apple-touch-icon" sizes="180x180" href="components/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="components/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="components/favicon/favicon-16x16.png">
	<link rel="manifest" href="components/favicon/manifest.json">
	<link rel="mask-icon" href="components/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">

	<!-- styles -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.css">
	<link rel="stylesheet" href="dist/styles/screen.min.css">

	<!-- components -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>

<![endif]-->



	<link href='https://fonts.googleapis.com/css?family=Raleway:100,200,400,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://s3-us-west-2.amazonaws.com/parallax-theme/assets/wow.min.js"></script>
	<script src="bower_components/fullpage.js/vendors/scrolloverflow.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.4/jquery.fullPage.min.js"></script>


	<script type="text/javascript">
		$(document).ready(function() {
			$("#demosMenu").change(function() {
				window.location.href = $(this).find("option:selected").attr("id") + '.html';
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function() {

			$('#fullpage').fullpage({
				scrollBar: true,
				responsiveWidth: 400,
				navigation: true,
				navigationTooltips: ['home', 'about', 'portfolio', 'contact', 'connect'],
				anchors: ['home', 'about', 'portfolio', 'contact', 'connect'],
				menu: '#myMenu',
				fitToSection: false,

				scrollOverflow: true,
				scrollOverflowReset: true,
				controlArrows: true,
				//navigationTooltips: ['firstSlide', 'secondSlide'],
				slidesNavigation: true,
				slidesNavPosition: 'bottom',

				afterLoad: function(anchorLink, index) {
					var loadedSection = $(this);


					//using index
					if (index == 1) {
						/* add opacity to arrow */
						$('.fa-chevron-down').each(function() {
							$(this).css('opacity', '1')
						});
						$('.header-links a').each(function() {
							$(this).css('color', 'black')
						});
						$('.header-links').css({
							'background-color': 'transparent',
							'border-width': '0'
						});
					} else if (index != 1) {
						$('.header-links a').each(function() {
							$(this).css('color', 'black')
						});
						$('.header-links').css({
							'background-color': 'rgba(255, 255, 255, 0.7',
							'border-bottom': '3px solid white'
						});
					}

					//using index
					if (index == 2) {

						/* animate skill bars */
						$('.skillbar').each(function() {
							$(this).find('.skillbar-bar').animate({
								width: jQuery(this).attr('data-percent')
							}, 2500);
						});
					}
				}
			});
		});

	</script>



</head>
