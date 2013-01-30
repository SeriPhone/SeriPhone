<?php

header('Content-type: text/xml');

$xml = file_get_contents("http://services.tvrage.com/feeds/full_search.php?show=".$_GET["show"]);
echo $xml;
    
    
?>