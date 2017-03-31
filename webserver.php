<?php 

$h = getallheaders();

$fh = fopen('data.txt','w');

// URL submited to server
fwrite($fh, "URL: of destination server \n {$_SERVER['SERVER_NAME']}{$_SERVER['REQUEST_URI']} \n");

// Write headers to file
fwrite($fh, "Headers: \n");
foreach ($h as $key => $value) {
     fwrite($fh, " $key: $value \n");
}
fwrite($fh, "\n");

// Write POST data to file
fwrite($fh, "POST data: \n");
foreach ($_POST as $key => $value) {
     fwrite($fh, " $key - $value \n");
}
fwrite($fh, "\n");

// Write cookies to file
fwrite($fh, "Cookies : \n");
foreach ($_COOKIE as $key => $value) {
     fwrite($fh, " $key - $value \n");
}
fwrite($fh, "\n");

fclose($fh);
?> 