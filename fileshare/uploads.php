<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Great Books of the World : About</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="/modules/en-file_share/style.css">
</head>
<body>
<a href="/" id="rachel">Rachel</a>
<div id="content">
<div id="header">
<h1>Local Content</h1>
<p id="description"></p>
</div>
<div class="textbody">
<ul>
<?php
$dir = getcwd() . "/uploads";
$files1 = glob($dir . "/*");
foreach($files1 as $phpfile)
{
echo str_replace("/var/www/","/", "<li><a href='$phpfile' >".basename($phpfile)."</a> \n");
}
?>
</ul>
</div>
<div style="clear: both;"></div>
</div>
</body>
</html>