<?php
function studyString(){
/*Heredoc 结构就象是没有使用双引号的双引号字符串，这就是说在 heredoc 结构中单引号不用被转义，
但是上文中列出的转义序列还可以使用。变量将被替换，但在 heredoc 结构中含有复杂的变量时要格外小心。*/
$heredoc = <<<Heredoc
<header>Heredoc:<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h1></header>
Suscipit iusto corporis perspiciatis perferendis accusantium,
 blanditiis placeat, quaerat autem ipsa voluptatibus 
 facere unde temporibus dolorem nemo deleniti. Distinctio, 
 temporibus eaque! Magni!
Heredoc;
 echo $heredoc;
/* Nowdoc 结构

就象 heredoc 结构类似于双引号字符串，
Nowdoc 结构是类似于单引号字符串的。
Nowdoc 结构很象 heredoc 结构，
但是 nowdoc 中不进行解析操作。
这种结构很适合用于嵌入 PHP 代码或其它大段文本而无需对其中的特殊字符进行转义。
与 SGML 的 <![CDATA[ ]]> 结构是用来声明大段的不用解析的文本类似，nowdoc 结构也有相同的特征。 
一个 nowdoc 结构也用和 heredocs 结构一样的标记 <<<， 
但是跟在后面的标识符要用单引号括起来，
即 <<<'EOT'。Heredoc 结构的所有规则也同样适用于 nowdoc 结构，尤其是结束标识符的规则。 
*/
$nowdoc = <<<'NOWDOC'
<h1>NOWDOC: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non recusandae velit alias assumenda, voluptate officiis at quam ea beatae ad ducimus facere unde fuga molestias perferendis, officia incidunt nihil facilis.</h1>
<p>Lorem ipsum dolor "$name" $foo->arr['a']sit amet,</P> consectetur adipisicing elit. A quod beatae minus sint blanditiis quia, reiciendis officia voluptatem nostrum, iste vitae, aperiam, quidem repellendus numquam soluta consectetur ea tempora quas
NOWDOC;
echo $nowdoc.PHP_EOL;
echo(PHP_EOL);
// 复杂string 花括号 {$foo},{要和$紧挨着，{\$}不识别为变量表达式
$string ="复杂string 花括号Lorem {$nowdoc} ipsum dolor sit amet, consectetur adipisicing elit. Eum, possimus modi laboriosam quaerat eius nesciunt deleniti non iste quisquam ut error necessitatibus ab cumque provident alias. Est explicabo, adipisci quas!";
echo $string;
}