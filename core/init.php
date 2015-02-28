<?php
// session_start();
// 自动加载函数
spl_autoload_register(function($class){
	 require_once 'classes/'.$class.'.php';
});