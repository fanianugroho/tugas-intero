<html>
<head>
    <title>
        TES JSON
    </title>
</head>
<body>

<?php

// $base_url ="http:// ". $_SERVER['HTTP_HOST'].
// $_SERVER['REQUEST_URI'];
$content=file_get_contents("toprated.json");


$content=utf8_encode($content);

//mengubah data json menjadi data array asosiatif
$results=json_decode($content,true);

foreach ($results as $value) {

    echo "Title : ".$value['title']."<br>";
    echo "Release Date : ".$value['release_date']."<br>";
    echo "Vote Average : ".$value['vote_average']."<br>";
    echo "Vote Count  : ".$value['vote_count']."<br>";

}

?>
</body>
</html>