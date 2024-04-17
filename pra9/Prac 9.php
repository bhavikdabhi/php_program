<?php
echo chr("109")."<br/>";
$str = "Bhavik ";
echo "String is : ".$str."<br/>"; 
echo "order : ".ord($str)."<br/>";

echo "In lower case : ".strtolower($str)."<br/>"; 
echo "In Upper case : ".strtoupper($str)."<br/>"; 
echo "Length of string is :".strlen($str)."<br/>"; 
echo "Reverse of string is :".strrev($str)."<br/>";

$str=" Bhavik  ";
echo "Without trim:".$str."<br/>"; 
echo "With ltrim:".ltrim($str)."<br/>"; 
echo "With rtrim:".rtrim($str)."<br/>";
echo "With trim:".trim($str)."<br/><br/>";


$str="My name is Dabhi Bhavik "; 
echo"Main String : ".$str."<br/><br/>"; 
echo "Substring : ".substr($str,11,7)."<br/>";
echo "String Position(a): ".strpos($str,"a")."<br/>";
echo "String Position from last(a): ".strrpos($str,"a")."<br/>"; 
echo "String starts from(Dra): ".strstr($str,"Dra")."<br/>"; 
echo "String starts from(dra): ".stristr($str,"dra")."<br/>";
echo "Replacement of string : ".str_replace("Bhavik ","Bhavik ",$str)."<br/>";


$str1="Hello";
$str2="Hell";
echo "String Comparision of $str1 and $str2 : ".strcmp($str1,$str2)."<br/>";


$str1="Hello";
$str2="hello";
echo "String caseComparision of  $str1 and  $str2: ".strcasecmp($str1,$str2)."<br/>";
echo "Prepared by Dabhi Bhavik  206490316029";
?>
