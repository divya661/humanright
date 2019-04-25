<?php
include('dbcon.php');
include('navigationbar.php');
include('title.php');

?>
<style>
	body{
		background-image:url("mm.jpg");
		
background-size:1780px 1000px;
		background-attachment: fixed;
		font-weight:bold;
	}
	button{
		height:30px;
		width:300px;
		padding:5px;
		margin:10px;
		font-family:Andalus;
		font-size:20px;
		color:black;
	}
	
	</style>
<div class="container" class="vol" align="center">
<img src="images/volunteer.jpg" style="height:250px;width:200px;align:center;top-margin:30px;" class="vol-img">
<h1>Become A Volunteer<h1>
<p align="center">
Let's join hands togeter to be a part of noble society.</br> Help those who are near to your localty.
</br>
Register yourselves so that we can inform you when others need your help.</br>
</p>
<a href="volunteerform.php" target="_blank"><div class="btn btn-info " style="margin-left:30px;margin-right:30px;">Sign in</div></a>
<a href="volunteerlogin.php" target="_blank"><div class="btn btn-success " style="margin-left:30px;margin-right:30px;">Log in</div></a>
<a href="volunteerupdate.php" target="_blank"><div class="btn btn-warning " style="margin-left:30px;margin-right:30px;" >
Want to Update your info</div></a>
</div>
</body>
</html>
