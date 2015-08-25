<?php




require './vendor/autoload.php';



// set non existing path
// the source path for including files
$sourcePath = new SplFileInfo(__DIR__ . '/pages');

//try {
//	$router->setSourcePath($sourcePath);
	// $this->assertTrue(false);
//} catch (Directory\DoesNotExistException $e) {
	// $this->assertTrue(true);
//}









// die($sourcePath);



// create router
// $router = new \FileRouter\Router\IncludeRouter($sourcePath);
include './Router.php';
$router = new Router($sourcePath);


// routes
// $router->handleRoute('hello'); // include includes/hello.php
// $router->handleRoute('hello/world'); // include includes/hello/world.php



// $router->handleRoute($_GET['r']);

if (isset($_GET['r']))
{
     //do stuff that requires 's'
	 echo '1__';
	// $router->handleRoute($_GET['r']);
}
else
{
     //do stuff that doesn't need 's'
	 echo '2__';
}






echo '<hr>';

echo '<pre><code>';


print_r($_SERVER[REQUEST_URI]);
// print_r( url_raw() );

$urlArr = parse_url($_SERVER['REQUEST_URI']);
// parse_str($urlArr['query'], $output);

print_r($urlArr);





$request_url= $_SERVER['REQUEST_URI'];






// print_r($_REQUEST);

// print_r($_SERVER);










echo '</code></pre>';

echo '<br/>___ bye';