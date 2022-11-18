
<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"codecamp");
$a=$_POST["username"];
$b=$_POST["password"];
$c=$_POST["repeat_password"];
echo$a."<br>";
echo$b."<br>";
echo$c."<br>";
$u="UPDATE signup SET password='$b',
repeat_password='$c' where username='$a'";
mysqli_query($conn, $u);
mysqli_close($conn);
echo"<h1>value inserted</h1>";
?>