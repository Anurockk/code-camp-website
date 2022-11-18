<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codecamp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 $sql = "SELECT  name, father_name,
 mother_name,email,d_o_b,mobile_number
 ,state,city,zip_code,role,address,questionone
 ,questiontwo,questionthree,user_recommend,mostLike,comment FROM survey";
 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<table border=4>
	<tr>
	<td>name</td>
	<td>father_name</td>
	<td>mother_name</td>
	<td>email</td>
	<td>d_o_b</td>
	<td>mobile_number</td>
	<td>state</td>
	<td>city</td>
	<td>zip_code</td>
	<td>role</td>
	<td>address</td>
	<td>questionone</td>
	<td>questiontwo</td>
	<td>questionthree</td>
	<td>user_recommend</td>
	<td>mostLike</td>
	<td>comment</td>
	</tr>";
	echo "<tr>";
	echo "<td>";echo $row["name"];echo"</td>";
    echo "<td>";echo $row["father_name"];echo"</td>";
	echo "<td>";echo $row["mother_name"];echo"</td>";
	echo "<td>";echo $row["email"];echo"</td>";
	echo "<td>";echo $row["d_o_b"];echo"</td>";
	echo "<td>";echo $row["mobile_number"];echo"</td>";
	echo "<td>";echo $row["state"];echo"</td>";
	echo "<td>";echo $row["city"];echo"</td>";
	echo "<td>";echo $row["zip_code"];echo"</td>";
	echo "<td>";echo $row["role"];echo"</td>";
	echo "<td>";echo $row["address"];echo"</td>";
	echo "<td>";echo $row["questionone"];echo"</td>";
	echo "<td>";echo $row["questiontwo"];echo"</td>";
	echo "<td>";echo $row["questionthree"];echo"</td>";
	echo "<td>";echo $row["user_recommend"];echo"</td>";
	echo "<td>";echo $row["mostLike"];echo"</td>";
	echo "<td>";echo $row["comment"];echo"</td>";
	
	echo"</tr>";
	echo "</table>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
