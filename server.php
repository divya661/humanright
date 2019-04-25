<?php
include('title.php');
include('navigationbar.php');
include('dbcon.php');
?>
<style type="text/css">
	input,textarea{
		position:relative;
		left:150px;
		margin:10px;
		padding:5px;
		width:750px;
		color: blue;
		font-weight: bold;
	}

	select{
		margin:10px;
		padding:5px;
	}
	body{
		background-image: url("w2.jpg");
		background-size: 100%;
		background-attachment: fixed;
		background-repeat: no-repeat;
		font-family:Andalus;
	}
	.nav{
		position: relative;
		top:50px;
		background-color: #000066;
		width: 1400px;
		margin: auto;
		opacity: 0.8;
		height:1320px;
		
			}

		td, th{
			width:350px;
			color:blue;
			font-weight: bold;
			font-size:20px;
			
			
		}
		table{
				margin:auto;
			}
		
		h1,h2{
			color:white;
		}
		
		button{
			height:60px;
			width:150px;
			margin:20px;
			padding:5px;
			font-size:30px;
		}

</style>

<body><center>
	<div class="nav">
	<h1>Non-Governmental Organisation(NGO) Registration</h1>
<form method = "post" action ="server.php" enctype ="multipart/form-data">
<div class="tab">
<table align="center">

<tr>

<td><input type="text" name ="name" placeholder ="Enter your name" required></td>
</tr>
<tr>

<td><input type="text" name ="foundedin" placeholder ="Enter your street" required></td>
</tr>
<tr>

<td><input type="text" name ="email" placeholder="Email-id" required></td>
</tr>
<tr>

<td><input type="text" name ="city" placeholder="City" required></td>
</tr>
<tr>

<td><input type="text" name ="state" placeholder="State" required></td>
</tr>
<tr>

<td><input type="text" name ="proofid" placeholder="Proofid" required></td>
</tr>
<tr>

<td><textarea name ="address" placeholder="Enter your address" required></textArea></td>
</tr>

<tr>

<td><input type="number" name ="contact" placeholder="Contact no" required></td>
</tr>
<tr>
<td><input type="file" name ="photo" ></td>
</tr>
<tr>
<td><input type="text" name ="id" placeholder="Enter your id"></td>
</tr>
<tr>
<td><input type="date" name ="foundedin" placeholder="NGO founded on"></td>
</tr>
<tr>

<td><h2>Choose your concerns:</h2></td>
</tr>
<tr>
<tr>	
<td> <select name="concern1" >
	<option value="none">select your concern</option>
  <option value="The right to life">The right to life</option>
  <option value="The right to liberty and freedom and The right to freedom of speech">The right to liberty and freedom and The right to freedom of speech</option>
  <option value="The right to live your life free of discrimination">The right to live your life free of discrimination</option>
  <option value="The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs">The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs</option>
  <option value="The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex">The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex</option>
  <option value="The right to be free from torture,slavery">The right to be free from torture,slavery</option></select>
</td></tr>
<tr><br><br>
<td> <select name="concern2" >
 <option value="none">select your concern</option>
 
  <option value="The right to life">The right to life</option>
  <option value="The right to liberty and freedom and The right to freedom of speech">The right to liberty and freedom and The right to freedom of speech</option>
  <option value="The right to live your life free of discrimination">The right to live your life free of discrimination</option>
  <option value="The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs">The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs</option>
  <option value="The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex">The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex</option>
  <option value="The right to be free from torture,slavery">The right to be free from torture,slavery</option></select>
</td></tr>
<tr>
<td> <select name="concern3" >
 <option value="none">select your concern</option>
 
  <option value="The right to life">The right to life</option>
  <option value="The right to liberty and freedom and The right to freedom of speech">The right to liberty and freedom and The right to freedom of speech</option>
  <option value="The right to live your life free of discrimination">The right to live your life free of discrimination</option>
  <option value="The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs">The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs</option>
  <option value="The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex">The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex</option>
  <option value="The right to be free from torture,slavery">The right to be free from torture,slavery</option></select>
</td></tr>
<tr>

<td> <select name="concern4" >
 <option value="none">select your concern</option>
 
  <option value="The right to life">The right to life</option>
  <option value="The right to liberty and freedom and The right to freedom of speech">The right to liberty and freedom and The right to freedom of speech</option>
  <option value="The right to live your life free of discrimination">The right to live your life free of discrimination</option>
  <option value="The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs">The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs</option>
  <option value="The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex">The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex</option>
  <option value="The right to be free from torture,slavery">The right to be free from torture,slavery</option></select>
</td>
</tr>
<tr>

<td> <select name="concern5" >
 <option value="none">select your concern</option>
 
  <option value="The right to life">The right to life</option>
  <option value="The right to liberty and freedom and The right to freedom of speech">The right to liberty and freedom and The right to freedom of speech</option>
  <option value="The right to live your life free of discrimination">The right to live your life free of discrimination</option>
  <option value="The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs">The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs</option>
  <option value="The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex">The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex</option>
  <option value="The right to be free from torture,slavery">The right to be free from torture,slavery</option></select>
</tr>
<tr>

<td> <select name="concern6" >
  <option value="none">select your concern</option>
 
  <option value="The right to life">The right to life</option>
  <option value="The right to liberty and freedom and The right to freedom of speech">The right to liberty and freedom and The right to freedom of speech</option>
  <option value="The right to live your life free of discrimination">The right to live your life free of discrimination</option>
  <option value="The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs">The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs</option>
  <option value="The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex">The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex</option>
  <option value="The right to be free from torture,slavery">The right to be free from torture,slavery</option></select>
</td>
</tr>
<tr><td colspan="2" align ="center">

<button name="submit">Submit</button></td></tr>
</table>
</div>
</form>
</div>
</body>
</html><?php 
if(isset($_POST['submit']))
{
	include('dbcon.php');
	@$name =$_POST['name'];
	@$proofid =$_POST['proofid'];
	@$foundedin =$_POST['foundedin'];
	@$address =$_POST['address'];
	@$city =$_POST['city'];
	@$concern1 =$_POST['concern1'];

		@$concern2 =$_POST['concern2'];
		
		@$concern3 =$_POST['concern3'];
		
		@$concern4 =$_POST['concern4'];
	
		@$concern5 =$_POST['concern5'];

		@$concern6 =$_POST['concern6'];
		
	@$state= $_POST['state'];
	@$contact=$_POST['contact'];
	@$photo = $_FILES['photo']['name'];
	@$tempname = $_FILES['photo']['tmp_name'];
	@$email = $_POST['email'];
	move_uploaded_file($tempname,"images/$photo");
	
	$query = "INSERT INTO `ngo`(`name`, `contact`, `email`, `address`, `city`, `state`, `logo`, `proofid`, `foundedin`,  `concern1`, `concern2`, `concern3`, `concern4`, `concern5`, `concern6`)VALUES ('$name','$contact','$email','$address','$city','$state','$photo','$proofid','$foundedin','$concern1','$concern2','$concern3','$concern4','$concern5','$concern6')";
$run=mysqli_query($con,$query);
	
	if( $run== true){
		?>
		<script>
		alert(' your NGO has to be registerd ');
		</script>
		<?php
	}else{?>
		<script>
		alert('Not   registerd');
		</script><?php
	}
	
	}
?>
