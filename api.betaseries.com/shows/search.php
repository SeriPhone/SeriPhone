<?php

header('Content-type: text/xml');
$xml = file_get_contents("http://api.betaseries.com/shows/search.xml?key=d6090c9f9d90&title=".urlencode($_GET["title"]));
echo $xml;
    
    
?>