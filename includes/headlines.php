<?php
    require 'variables.php';
    $api = file_get_contents('https://newsapi.org/v2/top-headlines?country=au&pageSize=5&apiKey='.$key);
    $json = json_decode($api);
    $articles = $json->{'articles'};
    //Loop through list of articles provided by the API
    foreach($articles as $item) {
        echo "<div>";
        echo $item->{'title'}."<br>";
        echo $item->{'source'}->{'name'}."<br>";
        echo $item->{'description'}."<br>";
        echo "<a target='_blank' href=".$item->{'url'}.">Learn More</a>"."<br>";
        echo "</div>";
    }
?>
