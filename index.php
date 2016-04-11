<html>
<head>
<Title>Registration Form</Title>
<style type="text/css">
    body { background-color: black; border-top: solid 10px #000;
        color: #333; font-size: .85em; margin: 20; padding: 20;
        font-family: "Segoe UI", Verdana, Helvetica, Sans-Serif;
    }
    h1, h2, h3,{ color: #000; margin-bottom: 0; padding-bottom: 0; }
    h1 { font-size: 2em; }
    h2 { font-size: 1.75em; }
    h3 { font-size: 1.2em; }
    table { margin-top: 0.75em; }
    th { font-size: 1.2em; text-align: left; border: none; padding-left: 0; }
    td { padding: 0.25em 2em 0.25em 0em; border: 0 none; }
</style>
</head>
<body>
<h1>Register here!</h1>

<?php


    // DB connection info
    //TODO: Update the values for $host, $user, $pwd, and $db
    //using the values you retrieved earlier from the Azure Portal.
    
	$host = "eu-cdbr-azure-north-e.cloudapp.net";
    $user = "b371513fda8190";
    $pwd = "bff35241";
    $db = "protmysql";
    // Connect to database.
    try {
        $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }
    catch(Exception $e){
        die(var_dump($e));
    }
    // Insert registration info

    try {
        /*
		$name = $_POST['name'];
        $email = $_POST['email'];
        $date = date("Y-m-d");
		*/
		$fName = "Kalev";
        $lName = "Kaasik";
        $city = "Tartu";
        // Insert data
        $sql_insert = "INSERT INTO tabel (fName, lName, city)
                   VALUES (?,?,?)";
				   //VALUES (?,?,?)
        $stmt = $conn->prepare($sql_insert);
        $stmt->bindValue(1, $fName);
        $stmt->bindValue(2, $lName);
        $stmt->bindValue(3, $city);
        $stmt->execute();
    }
    catch(Exception $e) {
        die(var_dump($e));
    }
    echo "<h3>Table deleted!</h3>";

    // Retrieve data
    
	$sql_select = "SELECT * FROM tabel";
    $stmt = $conn->query($sql_select);
    $persons = $stmt->fetchAll();
    if(count($persons) > 0) {
        echo "<h2>People who are registered:</h2>";
        echo "<table>";
        echo "<tr><th>Eesnimi</th>";
        echo "<th>Perenimi</th>";
        echo "<th>Linn</th></tr>";
        foreach($persons as $person) {
            echo "<tr><td>".$person['fName']."</td>";
            echo "<td>".$person['lName']."</td>";
            echo "<td>".$person['city']."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<h3>No one is currently registered.</h3>";
    }
	
?>
</body>
</html>