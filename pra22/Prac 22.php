<html>
<body>
<table align = "center" border = "2px">
<tr>
<th> No. </th>
<th> Name </th>
<th> Item purchase </th>
<th> Mobile no. </th>
</tr>
<?php
		$con=mysqli_connect('localhost','root',"","pr22");
		echo "Connected Successfully";
		
		

echo "<br/><center><b>...Details of customer...</b></center><br/>"; 
			$str = "select * from customer_info";
			$result= mysqli_query($con,$str);	
			if(mysqli_num_rows($result)>0)
			{
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>".$row['cust_no']."</td>"; 
					echo "<td>".$row['cust_name']."</td>";
					echo "<td>".$row['item_purchase']."</td>"; 
					echo "<td>".$row['mobile_no']."</td>"; 
					echo "</tr>";
				}
			}mysqli_close($con);	
	?>
	</table>
<h4>Prepared by Dabhi Bhavik  206490316029
</h4>
</body>
</html>
