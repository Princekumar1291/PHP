<?php
// setcookie(name, value, expire, path, domain, secure, httponly);


setcookie("fruit","apple",time()+(86400 * 30));
// print_r($_COOKIE);

if(isset($_COOKIE['fruit'])){
  echo $_COOKIE['fruit'];
}else{
  echo "cookie not set";
}

echo "<br>";

if(isset($_COOKIE['colors'])){
  echo $_COOKIE['fruit'];
}else{
  echo "cookie not set";
}