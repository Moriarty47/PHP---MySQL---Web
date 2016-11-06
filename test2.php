<?php
$q = $_GET['q'];
$con = mysqli_connect('localhost:3306','MillerWang','Admin');
if(!$con){
	die('Could not connect:' . mysqli_connect_error());
}
mysqli_select_db($con,'customers');
$sql = "SELECT * FROM cus_tab where CompanyName = '".$q."'";

$result = mysqli_query($con,$sql);
// if(!$result){printf('Error:%s\n',mysqli_error($con));exit();}


while($row = mysqli_fetch_array($result)){
	echo "<table border='1' class='tab'>
		<tr>
		<th>CustomerID</th>
		<td>".$row['CustomerID']."</td>
		</tr><tr>
		<th>CompanyName</th>
		<td>".$row['CompanyName']."</td>
		</tr><tr>
		<th>ContactName</th>
		<td>".$row['ContactName']."</td>
		</tr><tr>
		<th>Address</th>
		<td>".$row['Address']."</td>
		</tr><tr>
		<th>City</th>
		<td>".$row['City']."</td>
		</tr><tr>
		<th>PostalCode</th>
		<td>".$row['PostalCode']."</td>
		</tr><tr>
		<th>Country</th>
		<td>".$row['Country']."</td>
		</tr>";
}
echo "</table>";
mysqli_close($con);
?>