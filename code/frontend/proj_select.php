<!DOCTYPE html>
<html lang="en">

<style>
    thead th {
        font-size: 1.3em;
		  background-color: #04AA6D;
			color: white;
    }


    .navbar-nav li:hover>.dropdown-menu {
        display: block;
	}	
	form {
		
		position:relative;
		margin-top:30px;
		margin-bottom:90px;
		margin-left:44%;
	}
	button{
		margin-top:50px;
		margin-left:50px;
	}   
</style>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title> Project Analytics </title>

</head>

<body>
	<?php include('navbar.php'); ?>
    <form action="proj_overview.php">
		  <p>Please select fields:</p>
		  <input type="checkbox" id="amount" name="amount" value="yes">
		  <label for="amount">amount</label><br>
		  <input type="checkbox" id="timespan" name="timespan" value="yes">
		  <label for="timespan">timespan</label><br>
		  <input type="checkbox" id="duration" name="duration" value="yes">
		  <label for="duration">duration</label><br>  
		  <input type="checkbox" id="executive" name="executive" value="yes">
		  <label for="executive">executive</label><br> 
		  <input type="checkbox" id="organisation" name="organisation" value="yes">
		  <label for="organisation">organisation</label><br> 
		  <input type="checkbox" id="all" name="all" value="yes">
		  <label for="all">all</label><br> 
		  <input type="submit" value="See projects">
		  
		</form>

</body>

</html>