<?php   
include('dbcon.php');

session_start();  
if(!isset($_SESSION["username"])){  
    header("location:volunteerlogin.php");  
} else {  
?> <!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


   <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5ac388121fff98001395ac77&product=inline-share-buttons"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel ="stylesheet" href ="http://startbootstrap.com/template-overviews/full/"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 
	 
	  
<title>Welcome</title>  
    <style>   
        body{  
             
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
 background-color:pink;
    font-family: verdana;  
    font-size: 100%  
     
        } 
		nav{
			margin-top:50px;
		}
	#navbar {
  overflow: hidden;
  background-color: #333;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

            h2 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 40px;  
}  
        h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 40px;  
}  
   table{
	   font-size:25px;
	  
	  border-width:2px;
   }        
    h3{
		color:white;
	} 
.img-rounded
{
	radius:50%;
}	
    </style>  
</head>  
<body align="center">  
  
   <nav id="navbar navbar-expand-sm|lg|md bg-light navbar-inverse">
<h3>Welcome, <?php echo $_SESSION['username'];?>!  



  <a href="volunteerwork.php" target="_blank"><div class="btn btn-warning " style="margin-left:30px;margin-right:30px;float:left;" >
Add my work</div></a>
<a href ="volunteerlogout.php" style="float:right;margin-right:30px;margin-bottom:15px;position:relative;">Log Out</a></h3>
</nav>
<div class="container">
<div class="details">
 

  <?php
  $username = $_SESSION['username'];
  $sql =" SELECT * FROM `volunteer` WHERE  `username`='$username' ";
$run = mysqli_query($con,$sql);
	if(mysqli_num_rows($run)>0){
		$data = mysqli_fetch_array($run);
		?>	

	
		<div colspan = "4" style="float;" >
		<?php $img=$data['photo'];
?>
		<img src = "images/<?php echo $img; ?>" style="max-width:300px;max-height:290px;margin-top:50px;" class="img-rounded" align="center" />
		
		<table align ="center" border="1" style ="width:40%;margin-top:50px;float:right;margin-right:350px;">
		<tr>
		<th colspan ="12" align="center"><h2 align="center">Your Details</h2></th></tr>
		<tr >
		
		
		<th colspan ="2">Name</th>
		<td colspan ="3"><?php echo $data['name']; ?></td>
		</tr>
		<tr>
		<th colspan ="2">Street</th>
		<td colspan ="3"><?php echo $data['street']; ?></td>
		</tr>
		<tr>
		<th colspan ="2">City</th>
		<td colspan ="3"><?php echo $data['city']; ?></td>
		</tr><tr>
		<th colspan ="2">State</th>
		<td colspan ="3"><?php echo $data['state']; ?></td>
		</tr><tr>
		<th colspan ="2">Contact</th>
		<td colspan ="3"><?php echo $data['contact']; ?></td>
		</tr><tr>
		<th colspan ="2">E-mail</th>
		<td colspan ="3"><?php echo $data['email']; ?></td>
		
		</tr>
		
		
		</table>
		</div>

	<?php echo "<br>";
	echo "<br>";}
?>
</div></div>
<div class="container">


	 <h2>Volunteer Action You Had Done</h2>
<table align = "center"  border="1" style ="width:40%;margin-top:50px;float:right;margin-right:350px;">

<tr align ="center">

<th align = "center" > S.NO </th>
<th align = "center" > Role </th>
<th align = "center"> Date </th>
<th align = "center" > Location </th>
<th align = "center"> Help </th>

<th align = "center"> Photo </th></tr>






<?php 


	include('dbcon.php');
	$sql = "SELECT * FROM `vwork` WHERE `username`='$username' ";
	
$run = mysqli_query($con,$sql);
	if(mysqli_num_rows($run)<1)
	{
echo "<tr ><td colspan = '5'>no records found</td></tr>";
	}
	else
	{
		$no=mysqli_num_rows($run);
		$count = 0;
		
while($no>0){$data = mysqli_fetch_assoc($run);
	$count++;$no--;
	?>
	
	
	
	
	<tr>
<td><?php echo $count; ?></td>
<td><?php echo $data['role']; ?></td>
<td><?php echo $data['date']; ?></td>
<td><?php echo $data['location']; ?></td>
<td><?php echo $data['help']; ?></td>

<td><img src = "images/<?php echo $data['photo']; ?>" style ="max-width:100px;"/></td>


</tr>
	<?php
}		
	}?>



</table>
</div>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>

<?php  
}  
?>  