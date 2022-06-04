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
		echo "<th>Organisation id</th>";
		echo "<th>Name</th>";
		echo "<th>Abbreviation</th>";
		$address_en = "no";
		$type_en = "no";
		$all_en = "no";
		if(!empty($_GET['all'])){
			$all_en = $_GET['all'];
			echo "<th style=\"width: 180px;\">Address</th>";
			echo "<th>Postal code</th>";
			echo "<th>City</th>";
			echo "<th>Organisation type</th>";
			echo "<th>Budget</th>";
		}
		else {
			if(!empty($_GET['address'])){
				$address_en = $_GET['address'];
				echo "<th style=\"width: 180px;\">Address</th>";
				echo "<th>Postal code</th>";
				echo "<th>City</th>";
			}
			if(!empty($_GET['type'])){
				$type_en = $_GET['type'];
				echo "<th>Organisation type</th>";
				echo "<th>Budget</th>";
			}
		}	
		echo "<th>Phone</th>";
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

        $quer = 'select v.organisation_id,v.org_name,v.abbreviation,v.address,v.postal_code,v.city,v.organisation_type,v.temp1,v.temp2,p.phone_number from organisation_vw as v inner join phones as p on v.organisation_id = p.organisation_id;';

        $res = mysqli_query($conn, $quer);

        $num = 0;

        if (mysqli_num_rows($res) == 0) {
            echo "<h4>There are no projects</h4>";
        } else {

            while ($tuple = mysqli_fetch_assoc($res)) {

                $num++;
                echo "<tr>";
				
                echo "<td>" . $num . "</td>";
                echo "<td>" . $tuple['organisation_id'] . "</td>";
                echo "<td>" . $tuple['org_name'] . "</td>";
				echo "<td>" . $tuple['abbreviation'] . "</td>";
				if($all_en == "yes") {
					echo "<td>" . $tuple['address'] . "</td>";
					echo "<td>" . $tuple['postal_code'] . "</td>";
					echo "<td>" . $tuple['city'] . "</td>";
					echo "<td>" . $tuple['organisation_type'] . "</td>";
					if ($tuple['organisation_type'] == 'research center') {
						echo "<td>".$tuple['temp1'].", ".$tuple['temp2']."</td>";
					}
					else echo "<td>".$tuple['temp1']."</td>";
				}
				else {
					if ($address_en == "yes") {echo "<td>" . $tuple['address'] . "</td>";
						echo "<td>" . $tuple['postal_code'] . "</td>";
						echo "<td>" . $tuple['city'] . "</td>";
					}
					if ($type_en == "yes") {echo "<td>" . $tuple['organisation_type'] . "</td>";
						if ($tuple['organisation_type'] == 'research center') {
							echo "<td>".$tuple['temp1'].", ".$tuple['temp2']."</td>";
						}
						else echo "<td>".$tuple['temp1']."</td>";
					}
				}
				echo "<td> <details> <summary>  </summary> <p>".$tuple['phone_number']."</p> </td>";
                echo "</tr>";
		   }
        }
        $conn->close();
        ?>
    </table>
</body>

</html>