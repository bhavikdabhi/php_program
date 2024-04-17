<?php
function divide($a,$b)
{	if($b==0)
{	throw new Exception("Divide by zero");
}
return $a/$b;
}
try
{	$ans= divide(10,0);
echo "Division is : ".$ans;
}
catch(Exception $e)
{	echo $e->getMessage();
}
echo "<br/><u>Prepared by Dabhi Bhavik  206490316029</u></b>";
?>
