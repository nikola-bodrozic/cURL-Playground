<?php 

// Array for POST data
$post_data =  array (
    "firstname" => "John",
    "lastname" => "Smith",
    "email" => "my@email.com"
);

// Array for HTTP headers
$http_headers =  array (
    'X-FirstHeader: Foo',
    'X-SecondHeader: Bar'
);

// Set user agent
$ua = "My User agent";

$Url = 'http://localhost/webserver.php';

// Cookies string
$Cookie = 'FirstCookie=User; SecondCookie=Prefs; path=/';

$ch = curl_init();
 
    // Set URL 
    curl_setopt($ch, CURLOPT_URL, $Url);
 
    // Set user agent
    curl_setopt($ch, CURLOPT_USERAGENT, $ua);
    
    // Set HTTP headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, $http_headers);
    
    // Send data by POST protocol
    curl_setopt ($ch, CURLOPT_POST, true);
    curl_setopt ($ch, CURLOPT_POSTFIELDS, $post_data);
    
    // Set cookies
    curl_setopt( $ch, CURLOPT_COOKIE, $Cookie );
    
    // Include header in result? (0 = yes, 1 = no)
    curl_setopt($ch, CURLOPT_HEADER, 0);
 
    // Should cURL return or print out the data? (true = return, false = print)
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
    // Timeout in seconds
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
 
    // Get HTTP body sent by server
    $output = curl_exec($ch);
 
    // Close the cURL resource, and free system resources
    curl_close($ch);
    
    echo "HTTP headers and HTTP body  received by web server are in <a href='data.txt'>data.txt</a>. ";
?>