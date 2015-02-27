<?php
/**
This is a class auto load register. using build-in function method: spl_autoload_register([callback]);
That mean you can new one instance directly in one file which required this function.	
This is so useful that we don't need to require the specified class file all the time.
*/
spl_autoload_register(function($classname){
	require_once $classname.'.php';
});