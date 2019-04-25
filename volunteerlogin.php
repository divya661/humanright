<?php
include('dbcon.php');
session_start();  

?>
   

<head>  
<title>Volunteer Login</title>  
   <style>
	body{
		background-image:url("ShowImage.jpeg");
		background-size:1700px 730px;
		background-color:red;
		background-attachment: fixed;
		font-weight:bold;
		
	}
	tr{
		font-size:40px;
			font-family:Andalus;
				color:black;
	}
	
	td,.pic{
		font-family:Andalus;
		height:50px;
		font-size:20px;
		margin:10px;
		color:white;
	}
	
	input,button{
		height:30px;
		width:300px;
		padding:5px;
		margin:10px;
		font-family:Andalus;
		font-size:20px;
		color:black;
	}
	
	.box{
		position:absolute;
		top:15%;
		left:35%;
		background-color:#000066;
		height:730px;
		width:600px;
		border-radius:10%;
		opacity:0.8;
		padding:20px;
		color:white;
	}

</style> 
</head>  
<body align="center">  
  
   
<img src="images/site/v.gif" style="height:407px;width:700px;align:center;top-margin:30px;" class="vol-img"> 
<form action="volunteerlogin.php" method="POST">  
<table align="center" style="width:40%; margin-top:90px;margin-bottom:10px;">
<tr><th><strong>Username:</strong></th><td> <input type="text" name="user"></td> </tr>
<tr>
<th><strong>Password:</th></strong> <td><input type="password" name="pass"></td> </tr>  

<tr ><td colspan="2"   style="width:50px; margin-top:10px;margin-bottom:10px;margin-left:220px;position:absolute;">

<input type ="submit" class="btn btn-primary" value="LOGIN NOW!!" name="submit"></td></tr>
</table>
</form>  
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
  
     
  $q="SELECT * FROM `volunteer` WHERE `username`='$user' AND `password`='$pass'";
    $query=mysqli_query($con,$q);  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $username=$row['username'];  
    $password=$row['password'];  
    }  
  
    if($user == $username && $pass == $password)  
    {  
    session_start();  
    $_SESSION['username']=$user;  
  
    /* Redirect browser */  
    header("Location:dashboard.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>  

