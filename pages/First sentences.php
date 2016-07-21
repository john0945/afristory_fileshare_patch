
<!DOCTYPE html> 
<html> 
<head>
    <meta charset="utf-8">
    <title>African Storybooks</title>
    <link rel="stylesheet" href="/modules/en-afristory/index-module-style.css"> 
    <base target="_blank" />
</head>
<body>

<div id="content">
<div class="indexmodule">
    <img src="/modules/en-afristory/af.jpg" alt="African_Storybooks">
<h2><a href="/modules/en-afristory/index.html">African Storybook Project</a></h2>

<ul>


<?php

$dir = getcwd() . "/First sentences";
$files1 = glob($dir . "/*.pdf");

$lang = file_get_contents('./lang.txt', true);


echo "<li class='listhead'> " . $lang. " - First Sentences</li>";
foreach($files1 as $phpfile)
{
echo str_replace("/var/www/","/", "<li><a href='$phpfile' >".basename($phpfile)."</a> \n");
}
?>
</ul>

</div>
</div>
</body>
</html>
