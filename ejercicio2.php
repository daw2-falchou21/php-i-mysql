<?php
//connect to MySQL
$db = mysqli_connect('localhost', 'root', 'root') or
	die ('Unable to connect. Check your connection parameters.');

//create the main database if it doesn't already exist
$query = 'CREATE DATABASE IF NOT EXISTS moviesite';
mysqli_query($db,$query) or die(mysqli_error($db));

//make sure our recently create database is the active one
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

//insert data into the people table
$query = 'INSERT INTO people
	(people_id, people_fullname, people_isactor, people_isdirector)
    VALUES
	(7, "Ryan Reynolds", 1, 0),
	(8, "Selena Gomez", 0, 1),
	(9, "Scarlett Johansson", 1, 0)';
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Data inserted successfully!';

?>