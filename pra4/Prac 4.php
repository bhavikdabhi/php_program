<?php
$java=98;
$asp=98;
$ens=97;
$icn=96;
$proj=94;
$avg=($java+$asp+$ens+$icn+$proj)/5;
echo "<H3><b>..Student Result..</b></h3><hr>";
echo "Name : Dabhi Bhavik <br/>Sem : 5th<br/><hr>";
echo "Java =",$java."<br/>";
echo "Asp = $asp<br/>";
echo "Ens = $ens<br/>";
echo "Icn = $icn<br/>";
echo "Project = $proj<br/>";
echo "Percentage is : $avg"."%<br/>"; 
if($avg>95)
{
echo "Grade : AA";
}
elseif($avg>85 && $avg<=95)
{
echo"Grade : AB";
}
elseif($avg>75 &&$avg<=85)
{
echo"Grade : BB";
}
elseif($avg>65 && $avg<=75)
{
echo"Grade : BC";
}
elseif($avg>55 && $avg<=65)
{
echo"Grade : CC";
}
elseif($avg>45 && $avg<=55)
{
echo"Grade : CD";
}
elseif($avg>35 && $avg<=45)
{
 
echo"Grade : DD";


}
else
{


echo"Grade : FF";

}
echo "<br />";
echo "Prepared  by Dabhi Bhavik  206490316029";
?>
 
