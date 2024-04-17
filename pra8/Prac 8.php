<?php
$n=5;
function fact($n)
{
if($n==1)
{
 
return $n;


}
else
{

return $n*fact($n-1);
}
}
 

 
echo"Factorial of $n is : ",fact($n);
echo "<br/><b><u>Prepared by Dabhi Bhavik  206490316029</u></b>";
?>
