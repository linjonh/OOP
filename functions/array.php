<?php
function studyArray(){
	$cars =[
		1=>"lanbergini",
		2=>"BMW",
		3=>[
			1=>"hello",
			4=>234235
		]
	];
	print_r($cars);
	echo '<p>array one :'.json_encode($cars).PHP_EOL.'<p>';
	$arr2=array('hello word','array2',  array("arr2","hhhh" ));
	print_r($arr2);
	echo('<p>array2:'.json_encode($arr2));
}