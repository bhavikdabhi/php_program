<?php
session_start();
if(isset($_SESSION['name'])&&isset($_SESSION['surname']))
{
echo "My name is : ".$_SESSION['name']." ".$_SESSION['surname']."<br/>";
}
else
{
echo "session variables are not set";
}
session_destroy();

?>
