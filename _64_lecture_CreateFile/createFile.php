<?php
$fileName="dumy.txt";
$content="this is dummy content";
$file=fopen($fileName,"w") or die("Unable to create file");
fwrite($file,$content);
fclose($file);
echo "file created";




