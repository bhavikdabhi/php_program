<?php
echo "Today is : ".date("dS M, Y")."<br/>"; 
echo "getdate : ";
print_r(getdate());
echo "<br/> time(current timestamp) : ".time()."<br/>";
$date = date_create(); 
date_date_set($date,2001,10,2);
echo "Seted date is : ".date_format($date,"dS M,Y")."<br/>";
echo "2/10/2001 was on ".date("l",mktime(0,0,0,10,2,2001))."<br/>"; 
echo"is 29/2/2019 valid or not ?";
var_dump(checkdate(4,24,2023));
echo "<br/><b><u>Prepared by Dabhi Bhavik  206490316029</u></b>";
?>
