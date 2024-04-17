<?php
$a=array(array(1,2),array(4,5));
$b=array(array(3,4),array(2,1));
$c=array(array(0,0),array(0,0)); 
echo "First array is : <br/>"; 
foreach($a as $i)
{
foreach($i as $j)
{
echo "$j".str_repeat("&nbsp",2);
}
echo"<br/>";
}
echo "Second array is : <br/>"; foreach($b as $i)
{
foreach($i as $j)
{
echo "$j".str_repeat("&nbsp",2);
}
echo"<br/>";
}
echo "Array addition is : <br/>"; for($i=0;$i<2;$i++)
{
for($j=0;$j<2;$j++)
{
$c[$i][$j] = $a[$i][$j] + $b[$i][$j];
}
}
foreach($c as $i)
{
foreach($i as $j)
{
echo "$j".str_repeat("&nbsp",2);
}
echo"<br/>";
}
echo "<b><u>Prepared  by Dabhi Bhavik  206490316029</u></b>";
?>
