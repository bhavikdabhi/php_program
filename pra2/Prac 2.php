<?PHP
echo " <b>Arithmetic Operators</b> <br/><hr>";
$a=10;$b=20;
echo "Addition of ".$a." and ".$b." is ",$a+$b,"<br/>";
echo "Subtraction of ".$a." and ".$b." is ",$a-$b,"<br/>"; echo "Multiplication of ".$a." and ".$b." is ",$a*$b,"<br/>"; echo "Division of ".$a." and ".$b." is ",$a/$b,"<br/>";
echo "Modulo of ".$a." and ".$b." is ",$a%$b,"<br/>"; echo "Increment in $a is : ".++$a."<br/>";
echo "Decrement in $a is : ".--$a;
echo " <br/><br/><b>Comparision Operators</b> <br/><hr>"; echo "$a is greater than $b : ";
echo var_dump($a>$b);
echo "<br/>$a is less than $b : "; echo var_dump($a<$b);
echo "<br/>$a is equals $b : "; echo var_dump($a==$b);
echo "<br/>$a is not equals $b : "; echo var_dump($a!=$b);
echo "<br/>$a is less than or equal to $b : "; echo var_dump($a<=$b);
echo "<br/>$a is greater than or equal to $b : "; echo var_dump($a>=$b);
echo " <br/><br/><b>Logical Operators</b> <br/><hr>"; echo "<u>And logiacl operator</u></br>";
echo "$a is less than $b and not equals to $b: "; echo var_dump($a<$b And $a!=$b);
echo "<br/><u>Or logiacl operator</u></br>"; echo "$a is greater than $b Or equals to $b: "; echo var_dump($a>$b or $a==$b);
echo "<br/><u>Not logiacl operator</u></br>"; echo "$a is less than $b : ";
echo var_dump(!($a<$b));
echo"<br/><b><u>Dabhi Bhavik  206490316029</u></b>";
?>
