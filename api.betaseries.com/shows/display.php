<?php

header('Content-type: text/xml');

$xml = file_get_contents("http://api.betaseries.com/shows/display/".$_GET["url"].".xml?key=d6090c9f9d90");
echo $xml;
    
    
?>