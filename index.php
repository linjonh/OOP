<?php
// require_once 'classes/Config.php';
require_once 'classes/ClassAutoLoadRegister.php';
require_once 'functions/Functions.php';

// $config=new Config();
// echo $config->get('hello')."<br>";
// echo "<h1>".Config::get()."<h1>";
// $config->setName();
// $config->setPwd();
// echo $config->toString();



// $doc=<<<HTML
// <br>this is a sentence from hear doc.
// <!DOCTYPE html>
// <html>
// <head>
// 	<title>hello</title>			
	
// </head>
// <body>
// 	here doc html
// 	<div style='marigin:0 ;padding:0 10; color: red; background: blue;'>hahhahhahaahah<div>
	
// </body>
// </html>
// HTML;
// echo $doc;

// login('"hello"','"1223"');

// register("'linjonh'","'2015jaysen'");
selectAllFromTable('user');
