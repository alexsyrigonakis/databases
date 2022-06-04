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
	
	.column {
		float: left;
		width: 50%;
		padding: 5px;
	}
	.row::after {
		content: "";
		clear: both;
		display: table;
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

<body style="background-color:powderblue;">
    <?php include('navbar.php');?>
    
	
	<?php
        $host = "127.0.0.1";
        $port = 3308;
        $socket = "";
        $user = "root";
        $password = "Account_attempt56!";
        $dbname = "mydb";
		
        $conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
            or die('Could not connect to the database server' . mysqli_connect_error());

		if(!empty($_GET['varname1']) && !empty($_GET['varname2'])){
			$science_field_id = $_GET['varname1'];
			$canonical_name = $_GET['varname2'];	
		} 
        $quer1 = 'select title from project left join in_field on project_id = infield_project_id left join science_field on science_field_id = infield_science_field_id where science_field_id = '.$science_field_id.' and finish_date > curdate();';
		
        $res = mysqli_query($conn, $quer1);

        $num = 0;
		
        if (mysqli_num_rows($res) == 0) {
            echo "<h4>There are no projects</h4>";
        } 
		else 
		{
			echo "<p style=\"text-align:center; margin-top:30px; margin-bottom:30px; font-size: 1.7em \">  ".$canonical_name." </p>";
			echo "<details style=\"font-size: 1.5em; margin-left:16px; margin-top:20px; margin-bottom:20px\">";
			echo "<summary style=\"font-size: 1.5em; margin-top:20px; margin-bottom:20px \"> Project names </summary>";
		
		
		
			while ($tuple = mysqli_fetch_assoc($res)) {
					$num++;	
					echo "<p style=\"margin-left:64px\">".$num .". ";
					echo "".$tuple['title'] ."</p>";
			}
			echo "</details>";
		}
		$quer2 = 'select researcher_id,first_name,surname 
			from researcher inner join works_on on researcher_id = workson_researcher_id inner join project on project_id = workson_project_id inner join in_field on project_id = infield_project_id inner join science_field on science_field_id = infield_science_field_id where science_field_id = '.$science_field_id. ' and finish_date > curdate()
			union
			select researcher_id,first_name,surname
			from researcher inner join science_director on researcher_id = dir_researcher_id inner join project on project_id = dir_project_id inner join in_field on project_id = infield_project_id inner join science_field on science_field_id = infield_science_field_id where science_field_id = '.$science_field_id.' and finish_date > curdate()
			order by researcher_id;';

        $res = mysqli_query($conn, $quer2);

        $num = 0;
		
        if (mysqli_num_rows($res) == 0) {
            echo "<h4>There are no researchers</h4>";
        } else {
			echo "<details style=\"font-size: 1.5em; margin-left:16px; margin-top:20px; margin-bottom:20px\">";
			echo "<summary style=\"font-size: 1.4em; margin-top:20px; margin-bottom:20px\"> Researcher names </summary>";
		   while ($tuple = mysqli_fetch_assoc($res)) {
                $num++;		
                echo "<p style=\"margin-left:64px\">".$num .". ";
                echo "".$tuple['first_name']." ";
				echo "" .$tuple['surname']."</p>";
		   }
        }
		
        $conn->close();
        ?>
    </table>
</body>

</html>