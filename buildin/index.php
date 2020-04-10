<?php

echo "<h2>Php Built-in functions</h2>";

echo str_replace("world","Peter","Hello world!")."<br/><br/>";

echo strlen("Hello")."<br/><br/>";

echo substr("Hello world",6)."<br/><br/>";

echo strrev("Hello World!")."<br/><br/>";

echo strtoupper("Hello WORLD!")."<br/><br/>";

echo strtolower("Hello WORLD.")."<br/><br/>";

echo lcfirst("Hello world!")."<br/><br/>";

echo ucfirst("Hello world!")."<br/><br/>";

echo ucwords("hello world")."<br/><br/>";

$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr)."<br/><br/>";

$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
?>