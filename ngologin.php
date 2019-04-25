<?php
 session_start();  
include('dbcon.php');?>
<!DOCTYPE HTML>
<html lang = "en_US">
<head>

<meta charset = "UTF-8">
<title>Ngo Login</title>.

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


   <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5ac388121fff98001395ac77&product=inline-share-buttons"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel ="stylesheet" href ="http://startbootstrap.com/template-overviews/full/"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 

	  <style>
	  body{
		   	background-image:url("images/site/ngo.jpg");
			  background-repeat: no-repeat;
			  background-position:center;
			  background-size:800px 600px;
			  margin-top:370px;
				background-color:orange;  
	  }
	  th{
		  font-size:20px;
		  
	  }
	  td{
		font-family:Andalus;
		height:50px;
		font-size:15px;
		margin:10px;
		color:white;
	}
	table{
		margin-top:60px;
	}
	  </style>
   </head>
   
<body>

<form action = "ngologin.php" method = "post" >
<table align = "center" >
<tr>
<th>Proofid</th><td><input  type ="text" name = "proofid"  required\></td>
</tr>
<tr>
<th>Name</th><td><input  type ="text" name ="name"  required\></td>
</tr>

<tr>
<td><input type = "submit" value ="submit" name = "submit" class="btn btn-primary"></td>
</tr>
</table>
</form>
</body>
</html>

<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['proofid']) && !empty($_POST['name'])) {  
    $name=$_POST['name'];  
    $proofid=$_POST['proofid'];  
  
  
     
  $q="SELECT * FROM `ngo` WHERE `name`='$name' AND `proofid`='$proofid'";
    $query=mysqli_query($con,$q);  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $name=$row['name'];  
    $proofid=$row['proofid'];  
    }  
  
    if($name == $name && $proofid == $proofid)  
    {   session_start();  
      $_SESSION['proofid']=$proofid; 
    /* Redirect browser */  
    header("Location:ngodash.php");  
    }  
    } else {  
    echo "Invalid name or proofid!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>  