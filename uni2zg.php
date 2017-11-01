<?php

include("function/convert.php");
$zawgyi = @$_POST['zawgyi'];
$result = uni2zg($zawgyi);

?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Unicode Converter</title>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>

<link rel='stylesheet' id='cleansimplewhite-style-css'  href='http://mrdba.info/wp-content/themes/clean-simple-white/style.css?ver=1.4.2' type='text/css' media='all' />

<body class="page-template-default page page-id-1518">
	<div id="container">
		<div id="header">
			<h1 id="header-title"><a href="#">Unicode to Zawgyi Converter</a></h1>
		</div><!-- #header -->
		
		<div id="head-nav">
			<div class="menu">
				<ul>
					<li class="page_item page-item-1492"><a href="http://localhost/zg2uni/new/zg2uni.php">Unicode Converter</a></li>
					<li class="page_item page-item-1518 current_page_item"><a href="http://localhost/zg2uni/new/uni2zg.php">Zawgyi Converter</a></li>
					<li class="page_item page-item-1518 current_page_item"><a href="http://localhost/zg2uni/new/uni2zg.php">Refresh</a></li>
				</ul>
			</div>
		<div class="clear"></div>
		</div><!-- #head-nav -->
		
		<div id="main-content">
			<div id="post-1518" class="post-1518 page type-page status-publish hentry">
				<div>
					<form method="POST">
						<textarea name="zawgyi" id="zawgyi" style="width: 98%; height: 350px;font-size: 12px;"></textarea>
						<button style="color: rgb(0, 85, 0); font: bold 84% 'trebuchet ms',helvetica,sans-serif; background-color: rgb(255, 238, 221); padding: 8px 40px;" type="submit">Convert</button>
					</form>
					<hr />
					<div><strong>Zawgyi</strong> Output will show below:</div>
					<p><span style="font-family: ZawGyi-One,zawgyi1; font-size: 13px;"><textarea id="zgout" style="width: 98%; height: 350px; font-family: ZawGyi-One,zawgyi1; font-size: 13px;"><?php echo $result; ?></textarea></span></p>

				</div><!-- #container -->
			</div>
		</div>
</body>
</html>