<?php
$var=array(9,1,7,5,3,2); print_r($var);
echo "<br/>";
echo "Number of elements in array is : ".count($var)."<br>"; 
list($a1,$a2,$a3)=$var;
echo "Values of a1=".$a1." a2=".$a2." a3=".$a3."<br>"; 
echo"Is 3 available in array or not?"."<br/>"; 
if(in_array(3,$var))
echo "3 is available in Array"."<br>";
else
echo "3 is not available in Array"."<br>";
echo "current : ".current($var)."<br/>"; 
echo"next : ". next($var)."<br/>";
echo "prev : ".prev($var)."<br/>";
echo "end : ".end($var)."<br/>";
echo "reset : ".reset($var)."<br/>";
echo "All values in array with their key : "."<br>"; 
echo "Merge avilable array with new array : "."<br>"; 
print_r(array_merge($var,array(10,20,30)));
echo "<br/>";
echo "Reverse of an array : "."<br>"; 
print_r(array_reverse($var));
echo "<br/>";
echo "Sorting of an array : "."<br>"; 
sort($var);
print_r($var); echo "<br/>";
echo "Sorting of an array in descending order: "."<br>"; rsort($var);
print_r($var);
echo "<br/><b><u>Prepared by Dabhi Bhavik  206490316029</u></b>";
?>
