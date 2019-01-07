<?php
    require 'variables.php';
    $api = file_get_contents('https://newsapi.org/v2/sources?apiKey='.$key);
    $json = json_decode($api);
    $sources = $json->{'sources'};
    //Loop through list of sources provided by API
    foreach($sources as $item) {
        echo "<option value=".$item->{'id'}.">".$item->{'name'}."</option>";
    }
?>
