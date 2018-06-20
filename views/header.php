<html lang="en-US">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Don't touch this -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>
			$("#options").on('click', function (e) {
			    e.preventDefault();
			});
		</script>
		<!-- Core D3 library -->
		<script type='text/javascript' src='d3/core/d3.min.js'></script>
		<script type='text/javascript' src='d3/core/d3v4.js'></script>
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">

		<!-- Wordcloud -->
		<script type='text/javascript' src='d3/d3.wordcloud.js'></script>
		<script src="https://rawgit.com/jasondavies/d3-cloud/master/build/d3.layout.cloud.js"></script>
		<script type="text/javascript" src="http://x3dom.org/download/1.7.2/x3dom-full.js"></script>
    	<link rel="stylesheet" type="text/css" href="http://x3dom.org/download/1.7/x3dom.css" />
    	<script src='js/jquery-ui.js'></script>
    	<script type="text/javascript" src = 'js/slider.js'></script>

		<!-- 2-1 -->
		<script src='d3/d3-x3dom-axis.js'></script>

		<style>
			*{
				text-align: justify;
				text-justify: inter-word;
				margin:0px;
				padding:0px;
				font-size: 100%;
				font-family: "Open Sans", sans-serif;

			}
			.carousel-inner > .item > img {
				margin: 0 auto;
			}
			body {
				position: relative; text-align:center;}
			#home{positon:relative;padding-top:50px;}

			#thefooter{
				clear:both;
				text-align:center;
				border-top: 2px solid;
				padding:10px;
				border-color:#e7e7e7;
			}

			header,section,footer,aside,nav,article,hgroup{display:block;}
			.addGradient{
				text-align:center;
				background: rgba(255,255,255,1);
				background: -moz-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 0%, rgba(239,239,239,1) 82%, rgba(237,237,237,1) 100%);
				background: -webkit-gradient(left top, right top, color-stop(0%, rgba(255,255,255,1)), color-stop(0%, rgba(246,246,246,1)), color-stop(82%, rgba(239,239,239,1)), color-stop(100%, rgba(237,237,237,1)));
				background: -webkit-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 0%, rgba(239,239,239,1) 82%, rgba(237,237,237,1) 100%);
				background: -o-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 0%, rgba(239,239,239,1) 82%, rgba(237,237,237,1) 100%);
				background: -ms-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 0%, rgba(239,239,239,1) 82%, rgba(237,237,237,1) 100%);
				background: linear-gradient(to left, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 0%, rgba(239,239,239,1) 82%, rgba(237,237,237,1) 100%);
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed', GradientType=1 );
			}
			#div1{
				border:1px transparent;
				background-size:cover;
			}


			#sidebar{positon:relative;padding-top:75px;}
			#sidebar_menu{positon:relative;padding-top:75px;background-color: #white;}
			.well{border-radius:3px;}
			.sidebar_right{positon:relative;left:50px;background-color: #white;}
			#topFix{
				position:fixed;
				top:120px;
				left: 0px;
				width: 100%;
				z-index:9999;
				border-radius:0px;
			}
		</style>
	</head>

	<body data-spy="scroll" data-target="#nav1" data-offset="10">

		<div class="container-fluid text-responsive img-responsive" id="div1">
