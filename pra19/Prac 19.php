<?php
session_start(); if(isset($_SESSION['count']))
{	$_SESSION['count']++;
echo $_SESSION['count']." users visited the site.";
 
}
else
{	$_SESSION['count']=1;
echo "Welcome... You are our first visitor..";
}
echo "<br/><b><u>Preapred by Dabhi Bhavik  206490316029</u></b>";
?>
