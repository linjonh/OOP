<?php
require_once '../core/init.php';
if (isset ( $_REQUEST ['name'] ) && isset ( $_REQUEST ['pwd'] )) {
	$name = htmlentities ( $_REQUEST ['name'], ENT_QUOTES, 'UTF-8' );
	$pwd = htmlentities ( $_REQUEST ['pwd'], ENT_QUOTES, 'UTF-8' );
	register ( $name, $pwd );
} else {
	exit ( '{"result":0,"description":"Register failed! name or password is not set."}' );
}