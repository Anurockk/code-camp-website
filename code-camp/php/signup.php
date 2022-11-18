<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"codecamp");
$a=$_POST["name"];
$b=$_POST["username"];
$c=$_POST["age"];
$d=$_POST["email"];
$e=$_POST["mobile_number"];
$f=$_POST["gender"];
$g=$_POST["password"];
$h=$_POST["repeat_password"];
$z="insert into signup value('$a','$b','$c','$d','$e','$f','$g','$h')";
mysqli_query($conn, $z);
mysqli_close($conn);

if (cout==1){
        
    $_SESSION['username'] = $username;
    
    header("location: ../home.html");
 } else
 {
    $searchErr = "Please enter the information";
}
?>