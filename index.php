<?php

$inners = scandir('./dataFiles');
$result = [];


foreach ($inners as $inner) {
    if (preg_match('/(([a-z]+\d+)|(\d+[a-z]+))[a-z\d]*?\.ixt$/i', $inner)) {
        $result[] = $inner;
    }
}

sort($result);

var_dump($result);
?>