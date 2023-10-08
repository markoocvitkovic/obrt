<?php
session_start();

include("baza.php");
include("functions.php");

// Establish a database connection
$connection = spojiSeNaBazu();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    $user_name = $_POST['user_name'];
    $user_lastname = $_POST['user_lastname'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($user_lastname) && !empty($password) && !is_numeric($user_name)) {
        // Generate a random user_id
        $user_id = random_num(20);

        // Create the SQL query with placeholders to prevent SQL injection
        $query = "INSERT INTO users (user_id, user_name, user_lastname, password) VALUES (?, ?, ?, ?)";

        // Prepare the statement
        $stmt = mysqli_prepare($connection, $query);

        if ($stmt) {
            // Bind parameters and execute the query
            mysqli_stmt_bind_param($stmt, "ssss", $user_id, $user_name, $user_lastname, $password);
            if (mysqli_stmt_execute($stmt)) {
                
                header("Location: login1.php");
                die;
            } else {
               // echo "Error executing the query: " . mysqli_error($connection);
            }
        } else {
            echo "Error preparing the statement: " . mysqli_error($connection);
        }
    } else {
        echo "Please enter some valid information!";
    }
}

// Close the database connection when you're done
zatvoriVezuNaBazu($connection);
?>



<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="text" name="user_lastname"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login1.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>