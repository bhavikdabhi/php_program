<?php
$b=10.5;
$c="20.90";
echo "b = ".$b."<br/>c = ".$c."<br/>(c is of String type)";
echo "Type of b = 10.5 is <b>".gettype($b)."</b><br/>";
settype($b,"integer");
echo	"settype	of	b	=	10.5	to	integer	from	float	:
<b>".$b."(".gettype($b).")</b><br/>";
if(isset($d))
{
 
echo "isset(d) val of $d = ".$d;


}
else
{

echo "isset(d) : <b>variable d is not seted.</b><br/>";

}
  
unset($b);
echo "<b>variable b is unseted..Now We can't use it..</b><br/>"; 
echo "String Value : <b>".strval($c)."</b><br/>";
echo "Int Value : <b>".intval($c)."</b><br/>"; 
echo "Float Value : <b>".floatval($c)."</b><br/>"; 
echo "<b><u>Prepared by Dabhi Bhavik  206490316029</u></b>";
?>
