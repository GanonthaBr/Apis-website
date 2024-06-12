<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Site en maintenance</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .maintenance-container {
    text-align: center;
  }
  
  .maintenance-icon {
    font-size: 48px;
    color: #ff6347; /* Rouge foncé */
  }
  
  .maintenance-text {
    margin-top: 20px;
    font-size: 24px;
    color: #333; /* Noir */
  }
</style>
</head>
<body>

<div class="maintenance-container">
  <div class="maintenance-icon">&#9888;</div>
  <div class="maintenance-text">Le site est en maintenance. Veuillez revenir plus tard.</div>
</div>

</body>
</html> -->








<?php 



/**

 * Laravel - A PHP Framework For Web Artisans

 *

 * @package  Laravel

 * @author   Taylor Otwell <taylor@laravel.com>

 */



$uri = urldecode(

    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)

);



// This file allows us to emulate Apache's "mod_rewrite" functionality from the

// built-in PHP web server. This provides a convenient way to test a Laravel

// application without having installed a "real" web server software here.

if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {

    return false;

}



require_once __DIR__.'/public/index.php';