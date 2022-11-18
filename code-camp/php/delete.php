<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"codecamp");

$a=$_POST["username"];
echo$a."<br>";
$d="delete from signup where username = '$a'";
mysqli_query($conn, $d);
mysqli_close($conn);
echo"<h1>value inserted</h1>";
?>

