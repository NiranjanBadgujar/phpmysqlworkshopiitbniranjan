<?php

$file = file_get_contents("count.txt");
$visitors = $file;
$visitorsn = $visitors + 1;
$filenew = fopen("count.txt","w");
fwrite ($filenew,$visitorsn);
echo "you had $visitorsn visitors";
fclose($filenew);

?>