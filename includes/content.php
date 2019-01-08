<?php
    require 'variables.php';
    $sid = $_POST['id'];
    $api = file_get_contents('https://newsapi.org/v2/top-headlines?sources='.$sid.'&apiKey='.$key);
    $json = json_decode($api);
    $articles = $json->{'articles'};
    //Loop through list of articles provided by the API
    foreach($articles as $item) {
        echo "<div>";
        echo "<h4 class='hl_heading'>".$item->{'title'}."</h4>";
        echo "<p class='hl_desc'>".$item->{'description'}."</p><br>";
        echo "<a target='_blank' href=".$item->{'url'}.">Learn More</a>";
        echo "</div>";
    }
?>
