<?php
$str= "BST";
echo "<br>";
echo $str;

$length = strlen($str);
echo "<br>";
echo " The lenght of the string is : ";
echo $length;

echo "<br>";
$str1= " I am Php ";
$str2 = "Lets learn to me ";
echo $str1.$str2;
echo " :) <br>";

echo "<br>";

$str3="I am PHP learner ";
echo $str3;
echo "<br>";
echo "String word size is : ";

echo $str3.str_word_count($str3);
echo "<br>";
echo "reverse string : ";

$str4="This";
echo strrev($str4);
echo "<br>";
echo " Position of 'is' : ";
echo strpos($str4,"is");
echo "<br>";
echo "Replace perticular string 'is' to 'at' : This to  ";
echo str_replace("is","at",$str4);
?>