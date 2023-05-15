<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>
    <h2>All Patients Info</h2><br><br>

    <?php
    session_start();

        include("connection.php");
        include("functions.php");

        $query = "SELECT * FROM users";

        if ($result = $mysqli->query($query)) {
        
            /* fetch associative array */
            while ($row = $result->fetch_assoc()) {
                $name = $row['Name'];
                echo $name.'<br />';
            }
        
            /* free result set */
            $result->free();
        }
    ?>
</body>
</html>
