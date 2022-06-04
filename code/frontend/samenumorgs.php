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
        <thead>
            <tr>
                <th>#</th>
                <th>Organisations with same num of projects</th>
                <th>Number of Same Projects (>3)</th>
            </tr>
        </thead>
        <?php
        $host = "127.0.0.1";
        $port = 3308;
        $socket = "";
        $user = "root";
        $password = "Account_attempt56!";
        $dbname = "mydb";

        $conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
            or die('Could not connect to the database server' . mysqli_connect_error());



        $quer = 'select org1.organisation_id,org1.org_name as namee,proj1.starting_date, COUNT(distinct proj1.project_id) num from 
			(organisation as org1 left join administration as adm1 on org1.organisation_id = adm1.administration_organisation_id left join project as proj1 on proj1.project_id = adm1.administration_project_id)
			inner join
				(organisation as org2 left join administration as adm2 on org2.organisation_id = adm2.administration_organisation_id left join project as proj2 on proj2.project_id = adm2.administration_project_id)
				where timediff(proj2.starting_date,proj1.starting_date) < 731
				group by org1.organisation_id having num > 3 order by num desc;';

        $res = mysqli_query($conn, $quer);

        $num = 0;

        if (mysqli_num_rows($res) == 0) {
            echo "<h4>There are no programs</h4>";
        } else {

            while ($tuple = mysqli_fetch_assoc($res)) {

                $num++;
                echo "<tr>";
                echo "<td>" . $num . "</td>";
                echo "<td>" . $tuple['namee'] . "</td>";
                echo "<td>" . $tuple['num'] . "</td>";
                echo "</tr>";
            }
        }

        $conn->close();
        ?>
    </table>
</body>

</html>