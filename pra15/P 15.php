
<?php
if(isset($_POST["fname"])&&isset($_POST["txtarea"])&&isset($_POST["r"]
)&&isset($_POST["pass"]))
{
echo"Name : ".$_POST["fname"]."<br/>";
echo"Address : ".$_POST["txtarea"]."<br/>"; 
echo"City : ".$_POST["city"]."<br/>";
echo"Gender : ".$_POST["r"]."<br/>"; 
echo"Known Languages : "; if(isset($_POST["ch"][0]))
{
foreach($_POST["ch"] as $i)
{
echo $i," ,";
}
}
echo"<br/>";
echo"Your password : ".$_POST["pass"]."<br/>";
}
?>
