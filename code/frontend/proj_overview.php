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
    <table class="table table-hover table-success table-striped table-borderless">     
        <?php
		
		echo "<thead>";
		echo "<tr>";
		echo "<th>#</th>";
		echo "<th>Project id</th>";
		echo "<th>Title</th>";
		$amount_en = "no";
		$timespan_en = "no";
		$duration_en = "no";
		$executive_en = "no";
		$organisation_en = "no";
		$all_en = "no";
		if(!empty($_GET['all'])){
			$all_en = $_GET['all'];
			echo "<th>Amount</th>";
			echo "<th>Organisation</th>";
			echo "<th>Executive</th>";
			echo "<th>Starting date</th>";
			echo "<th>Finish date</th>";
			echo "<th>Duration</th>";
		}
		else {
			if(!empty($_GET['amount'])){
				$amount_en = $_GET['amount'];
				echo "<th>Amount</th>";
			}
			if(!empty($_GET['organisation'])){
				$organisation_en = $_GET['organisation'];
				echo "<th>Organisation</th>";
			}
			if(!empty($_GET['executive'])){
				$executive_en = $_GET['executive'];
				echo "<th>Executive</th>";
			}
			if(!empty($_GET['timespan'])){
				$timespan_en = $_GET['timespan'];
				echo "<th>Starting date</th>";
				echo "<th>Finish date</th>";
			}
			if(!empty($_GET['duration'])){
				$duration_en = $_GET['duration'];
				echo "<th>Duration</th>";
			}
		}
		echo "<th>Description</th>";
		echo "<th> </th>";
		
		echo "</tr>";
		echo "</thead>";
		
        $host = "127.0.0.1";
        $port = 3308;
        $socket = "";
        $user = "root";
        $password = "Account_attempt56!";
        $dbname = "mydb";

        $conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
            or die('Could not connect to the database server' . mysqli_connect_error());

		

        $quer = 'SELECT project_id, title, amount, exec_name,org_name,starting_date, finish_date,duration,summary FROM project inner join administration_ex on administrationex_project_id = project_id inner join executive on administrationex_executive_id = executive_id inner join administration on administration_project_id = project_id inner join organisation on administration_organisation_id = organisation_id';

        $res = mysqli_query($conn, $quer);

        $num = 0;

        if (mysqli_num_rows($res) == 0) {
            echo "<h4>There are no projects</h4>";
        } else {

            while ($tuple = mysqli_fetch_assoc($res)) {

                $num++;
                echo "<tr>";
				
                echo "<td>" . $num . "</td>";
                echo "<td>" . $tuple['project_id'] . "</td>";
                echo "<td>" . $tuple['title'] . "</td>";
				if($all_en == "yes") {
					echo "<td>" . $tuple['amount'] . "</td>";
					echo "<td>" . $tuple['org_name'] . "</td>";
					echo "<td>" . $tuple['exec_name'] . "</td>";
					echo "<td>" . $tuple['starting_date'] . "</td>";
					echo "<td>" . $tuple['finish_date'] . "</td>";
					echo "<td>" . $tuple['duration'] . "</td>";
				}
				else {
					if ($amount_en == "yes") {echo "<td>" . $tuple['amount'] . "</td>";}
					if ($organisation_en == "yes") {echo "<td>" . $tuple['org_name'] . "</td>";}
					if ($executive_en == "yes") {echo "<td>" . $tuple['exec_name'] . "</td>";}
					if ($timespan_en == "yes") {echo "<td>" . $tuple['starting_date'] . "</td>";
					echo "<td>" . $tuple['finish_date'] . "</td>";}
					if ($duration_en == "yes") {echo "<td>" . $tuple['duration'] . "</td>";}
				}
				echo "<td> <details> <summary>  </summary> <p>".$tuple['summary']."</p> </td>";
				echo "<td>" . "<a class=\"button button1\" href=\"see_project.php?varname1=".$tuple['project_id']." \" role=\"button\">
					see project
					
						</a>". "</td>";
                echo "</tr>";
				

		   }
        }

        $conn->close();
        ?>
    </table>
</body>

</html>