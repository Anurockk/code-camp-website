<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "codecamp";  
	$db_table = "signup"; 
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
	
	$username = $_POST['username'];  
    $password = $_POST['password'];  
      
       
      
        $sql = "select *from signup where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
		
        if($count == 1) {
        
         $_SESSION['username'] = $username;
         
         header("location: ../home.html");
      } else
    {
        $searchErr = "Please enter the information";
    }
?> 
