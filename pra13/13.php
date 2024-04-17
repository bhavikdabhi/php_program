<?php
$file = fopen("myself.txt","a+");
echo"The below content is already available in file.."."<br/>"; 
echo fread($file,25)."<br/>";
echo "Number of bytes written in file are : ".fwrite($file,"Dabhi Bhavik ")."<br/>";
rewind($file);
echo "After append in file.."."<br/>"; 
echo fread($file,50);
fclose($file);
?>
