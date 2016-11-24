<?php

$dir = '/var/www/html/AmigosDaSorte/uploads';

$array_dir = scandir($dir);
foreach ($array_dir as $images) {
    if ($images != "." && $images != ".."){
        echo "<img src='/var/www/html/AmigosDaSorte/uploads/$images' width=450 height=450 />";
        echo '<br>';
    }
    
}