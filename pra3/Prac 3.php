<?php
$n=15;
$a=0;$b=1;
echo "Fibonacci series of $n numbers are : <br/>"; echo "$a $b ";
for($i=1;$i<$n-1;$i++)
{	$temp = $a + $b; echo "$temp ";
$a = $b;
$b = $temp;
 }

echo "<b><u><br> Prepared by Dabhi Bhavik  206490316029</u></b>";
?>
