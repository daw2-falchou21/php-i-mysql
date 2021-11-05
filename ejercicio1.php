<?php
//connect to MySQL
$db = mysqli_connect('localhost', 'root', 'root') or
	die('Unable to connect. Check your connection parameters.');



//make sure our recently created database is the active one
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

//crete the main database if it doesn't already exist
$query = 'ALTER TABLE movie
ADD CONSTRAINT FK_people
FOREIGN KEY(movie_leadactor) REFERENCES people(people_id)';
mysqli_query($db,$query) or die(mysqli_error($db));



echo 'Created relationship!';
?>