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
                <th>Name1</th>
                <th>Name2</th>
				<th>Count</th>
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



        $quer = 'with coupled(id,title) as (
		select project_id,title
		from science_field left join in_field on science_field_id = infield_science_field_id left join project on project_id = infield_project_id 
		group by project_id 
		having COUNT(project_id) = 2
			),
		couples(id,title,canonical_name) as
		(	
			select id,title,canonical_name 
			from coupled left join in_field on id = infield_project_id left join science_field on infield_science_field_id = science_field_id
		)

		select c1.canonical_name as fir, c2.canonical_name as sec,COUNT(*)  as num
		from couples as c1 left join couples as c2 on c1.id = c2.id and c1.canonical_name <> c2.canonical_name
		group by c1.canonical_name, c2.canonical_name
		order by num desc;';

        $res = mysqli_query($conn, $quer);

        $numup = 0;

        if (mysqli_num_rows($res) == 0) {
            echo "<h4>There are no programs</h4>";
        } else {

            while ($tuple = mysqli_fetch_assoc($res)) {

                $numup++;
                if ($numup % 2 == 0) {
					if ($numup < 7) {
						echo "<tr style = \"background-color: powderblue;\">";
						echo "<td>" . $numup/2 . "</td>";
						echo "<td>" . $tuple['fir'] . "</td>";
						echo "<td>" . $tuple['sec'] . "</td>";
						echo "<td>" . $tuple['num'] . "</td>";
						echo "</tr>";			
					}
					else {
						echo "<tr>";
						echo "<td>" . $numup/2 . "</td>";
						echo "<td>" . $tuple['fir'] . "</td>";
						echo "<td>" . $tuple['sec'] . "</td>";
						echo "<td>" . $tuple['num'] . "</td>";
						echo "</tr>";	
					}
				}				
            }
        }

        $conn->close();
        ?>
    </table>
</body>

</html>