<?php

header('Content-type: text/xml');

$xml = file_get_contents("http://services.tvrage.com/feeds/episode_list.php?sid=".$_GET["sid"]);
echo $xml;
    
    
?>