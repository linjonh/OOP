<?php
const ccc ="constant<br>";
class simpleA{
	public $name ="A";
		
	public function showVariable(){
		echo(ccc);
		echo($this->var1);
		return $this->name;
	}

   // 错误的属性声明
   public $var1 = 'hello ' . 'world';
   public $var2 = <<<EOD
hello world
EOD;
   public $var3 = 1+2;

   // 正确的属性声明

   public $var7 = array(true, false);

   //在 PHP 5.3.0 及之后，下面的声明也正确
   public $var8 = <<<'EOD'
hello world
EOD;

}