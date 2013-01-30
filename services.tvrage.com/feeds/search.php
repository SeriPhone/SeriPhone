<?php

header('Content-type: text/xml');

$xml = file_get_contents("http://services.tvrage.com/feeds/search.php?show=".$_GET["show"]);
echo $xml;
    
    
?>