<?php
$filePath="files/data.txt";
$file=fopen($filePath,"r") or die("File can not be read.");
$content=fread($file,filesize($filePath));
echo $content;
fclose($file);


