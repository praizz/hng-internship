<!DOCTYPE html>
<html>
<head>
	<title>Figma Design Implementation</title>
	<style type="text/css">
		body{
			background-image:url(bg.jpg);
			background-repeat: no-repeat;
			width: 180px; height: auto;
		}
	</style>
</head>
<body>
<p style="color: black; text-shadow: 1px 1px 2px black; position: absolute; top: 30px; left: 85px; font-size: 34px;">
HNG INTERNSHIP<br> 4.0</p> <br>
<p style="color: white; text-shadow: 2px 2px 5px black; position: absolute; bottom: 180px; left: 350px; font-size: 30px; text-align: center;" >CURRENT TIME IS: <br>
<?php 
// date_default_timezone_set("(UTC+01:00) West Central Africa");
echo date( " h:ia") ?> </p>
</body>
</html>
