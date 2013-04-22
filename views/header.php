<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="<ion:current_lang />"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><ion:meta_title />| <ion:site_title /></title>
	<meta name="description" content="<ion:meta_description />">
    <meta name="keywords" content="<ion:meta_keywords />" />
	<meta name="author" content="">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="<ion:theme_url/>assets/css/zerogrid.css" />
	<link rel="stylesheet" href="<ion:theme_url/>assets/css/style.css" />
    <link rel="stylesheet" href="<ion:theme_url/>assets/css/responsive.css" />
	<link rel="stylesheet" href="<ion:theme_url/>assets/css/responsiveslides.css" />
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="<ion:theme_url/>assets/js/html5.js"></script>
		<script src="<ion:theme_url/>assets/js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href='<ion:theme_url/>assets/images/favicon.ico' rel='icon' type='image/x-icon'/>
	<script src="<ion:theme_url/>assets/js/jquery.min.js"></script>
	<script src="<ion:theme_url/>assets/js/responsiveslides.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});
	</script>

	<!-- Ionize JS Lang object -->
	<ion:jslang />

	<!-- if JS needs to get the theme URL, we give it to him -->
	<script type="text/javascript">
		var theme_url = '<ion:theme_url />';
	</script>

	<ion:google_analytics />

	
</head>
<body>


