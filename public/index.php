<?php 
$domain = $_SERVER["HTTP_HOST"];
Header( "HTTP/1.1 301 Moved Permanently" ); 
header("location: https://www." . $domain); 
