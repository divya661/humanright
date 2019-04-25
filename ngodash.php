<?php
include('dbcon.php');
 session_start();  

?>

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
 
	 
      <title>NGO Dashboard </title>
	  <style>
	  body{
		   	background-image:url("images/site/ng.jpg");
			background-size:100% 100%;	
			background-repeat:no-repeat;
			color:#f7071b;
		
			font-size:25px;
	  }
	  h2{
		 color:#02f975; 
	  }
	   h3,h1{
		color:#0712f7;
	} 
	  </style>
   </head>
   
   <body>


<nav>


<h5><a href ="index.php" style="float:right;margin-right:30px;margin-bottom:15px;position:relative;"><div class="btn btn-danger">Log Out</div></a></h5>

  <h2 align="center">NGO Dashboard With Proof ID:<?php echo $_SESSION['proofid'];?></h2>
  </nav>
   <?php
  $proofid = $_SESSION['proofid'];
  $sql =" SELECT * FROM `ngo` WHERE  `proofid`='$proofid' ";
$run = mysqli_query($con,$sql);
	if(mysqli_num_rows($run)>0){
		$data = mysqli_fetch_array($run);
		?>	

	
		<div colspan = "4" style="float;" >
		<?php $img=$data['logo'];
?>
		<img src = "images/ngologo/<?php echo $img; ?>" style="max-width:150px;max-height:200px;margin-left:100px;;margin-top:50px;" />
		
		<table align ="center" border="1" style ="width:40%;margin-top:50px;float:right;margin-right:350px;">
		<tr>
		<th colspan ="12" align="center"><h3 align="center">NGO Details</h3></th></tr>
		<tr >
		
		
		<th colspan ="2">Name</th>
		<td colspan ="3"><?php echo $data['name']; ?></td>
		</tr>
		<tr>
		<th colspan ="2">Address</th>
		<td colspan ="3"><?php echo $data['address']; ?></td>
		</tr>
		<tr>
		<th colspan ="2">CIty</th>
		<td colspan ="3"><?php echo $data['city']; ?></td>
		</tr>
		<tr>
		<th colspan ="2">State</th>
		<td colspan ="3"><?php echo $data['state']; ?></td>
		</tr>
		<tr>
		<th colspan ="2">Contact No</th>
		<td colspan ="3"><?php echo $data['contact']; ?></td>
		</tr><tr>
		<th colspan ="2">Email</th>
		<td colspan ="3"><?php echo $data['email']; ?></td>
		</tr><tr>
		<th colspan ="2">Found IN</th>
		<td colspan ="3"><?php echo $data['foundedin']; ?></td>
		
		</tr>
		
		<?php if($data['concern1']!="none" ){?>
		<tr>
		<th colspan ="2">concern 1 </th>
		<td colspan ="3"><?php echo $data['concern1']; ?></td>
		
		</tr><?php
		}
		?>
		
		<?php if($data['concern2']!="none" ){?>
		<tr>
		<th colspan ="2">concern 2 </th>
		<td colspan ="3"><?php echo $data['concern2']; ?></td>
		
		</tr><?php
		}
		?>
		
		<?php if($data['concern3']!="none" ){?>
		<tr>
		<th colspan ="2">concern 3</th>
		<td colspan ="3"><?php echo $data['concern3']; ?></td>
		
		</tr><?php
		}
		?>
		
		<?php if($data['concern4']!="none" ){?>
		<tr>
		<th colspan ="2">concern 4</th>
		<td colspan ="3"><?php echo $data['concern4']; ?></td>
		
		</tr><?php
		}
		?>
		
		<?php if($data['concern5']!="none" ){?>
		<tr>
		<th colspan ="2">concern 5</th>
		<td colspan ="3"><?php echo $data['concern5']; ?></td>
		
		</tr><?php
		}
		?>
		<?php if($data['concern6']!="none" ){?>
		<tr>
		<th colspan ="2">concern 6</th>
		<td colspan ="3"><?php echo $data['concern6']; ?></td>
		
		</tr><?php
		}?>
		</table>
		</div>

	<?php echo "<br>";
	echo "<br>";}
?>

<table align ="center" border="1" style ="width:70%;margin-top:50px;float:right;margin-right:100px;">
<tr><th align="center" colspan = "12"><h1 align="center">Complains Registered for your Ngo</h1><th></tr>
<tr align ="center">

<th>S. NO.</th>
<th>Date</th>
<th>Name of Victim</th>
<th>Age</th>
<th>Contact</th>
<th>Address</th>

<th>Description</th>
<th>Action Required</th>

<th>Step By Ngo</th>
<th>Photo</th>






<?php 

$concern1=$data['concern1'];
$concern2=$data['concern2'];
$concern3=$data['concern3'];
$concern4=$data['concern4'];
$concern5=$data['concern5'];
$concern6=$data['concern6'];

	include('dbcon.php');
	$sql = "SELECT * FROM `complain` WHERE `Voilation`='$concern1' OR `Voilation`='$concern2' OR `Voilation`='$concern3' OR `Voilation`='$concern4' OR`Voilation`='$concern5' OR`Voilation`='$concern6' ";
	
$run = mysqli_query($con,$sql);
	if(mysqli_num_rows($run)<1)
	{
echo "<tr ><td colspan = '10'>no complains found</td></tr>";
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
<td><?php echo $data['date']; ?></td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['age']; ?></td>

<td><?php echo $data['contact']; ?></td>

<td><?php echo $data['address']; ?></td>
<td><?php echo $data['description']; ?></td>
<td><?php echo $data['progress']; ?></td>
<td><?php echo $data['action']; ?></td>
<?php
 $img=$data['photo'];
?>

<td><img src = "images/<?php echo $data['photo']; ?>" style ="max-width:100px;"/></td>


</tr>
	<?php
}		
	}

?>

</table>
</body>
</html>
</body>  
</html>  
 