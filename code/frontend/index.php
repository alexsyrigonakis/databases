<!doctype html>
<html lang="en">

<link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>


<style>
    .navbar-nav li:hover>.dropdown-menu {
        display: block;
    }


    .eskeret {
        margin-top: 0px;
        margin-left: 42%;
        font-family: 'Alex Brush';
        font-size: 100px;
    }

    #SLIDE_BG {
        width: 100%;
        height: 93.9vh;
        background-position: center center;
        background-size: cover;
        backface-visibility: hidden;
        animation: slideBg 17s linear infinite 1s;
        animation-timing-function: ease-in-out;
	
    }
	p {
		position:center;
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
	<p style="text-align:center; margin-top:30px" id="demo1"></p>
	<script>
	var w = window.innerWidth;
	var h = window.innerHeight;
	var x = document.getElementById("demo1");
	if (w < 992) {
		x.innerHTML = "Too narrow window, expand and reload";
	}
	</script>
    <div id="SLIDE_BG"> <br/> </div>
</body>
</html>