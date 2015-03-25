<?php

require_once 'core/init.php';
require_once 'samplehtml.php';

function printLoginHtml(){
	echo LOGIN_HTML;
}
function printRegisterHtml(){
	echo REGISTER_HTML;
}
// echo Config::get();
// echo Item::get_item();
#
/*require_once 'functions/string.php';
studyString();*/
#
/*require_once 'functions/array.php';
studyArray();*/

#
/*require_once 'classes/TestClass.php';

$a=new simpleA();
echo $a->showVariable()."=========".ccc;

print_r(get_defined_constants());
echo "get_defined_constants(true)<br>";
print_r(get_defined_constants(true));*/

#

#
/*$config=new Config();
echo $config->get('hello')."<br>";
echo "<h1>".Config::get()."<h1>";
$config->setName();
$config->setPwd();
echo $config->toString();*/

printLoginHtml();


// showFooter();
#
// login('linjonh','2015jaysen');
// login('lin','12234');
#
// register("'hello'","'2015'");
#
// selectAllFromTable('user');
#
/*$values=array(
	"username"=>"'hello world'",
	);
updateUserInfo($values,"username='lin'");*/
#

//修改mysql root 密码  ~$ mysqladmin -u root -p12234 password root
