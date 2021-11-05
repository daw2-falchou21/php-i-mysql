<?php
//connect to MySQL
$db = mysqli_connect('localhost', 'root', 'root') or
	die ('Unable to connect. Check your connection parameters.');

//make sure our recently create database is the active one
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

//AlTER TABLE ... ADD CONSTRAINT

//$query = 'ALTER TABLE movie ADD CONSTRAINT movie_leadactor_people FOREIGN KEY (movie_leadactor) REFERENCES people_id(ID)';

//MOSTRAR NOMBRES PELICULAS
//$query = 'SELECT movie_name FROM movie';

$query = 'SELECT people_fullname,movie_name,movie_director FROM movie,people WHERE movie_leadactor=people_id';
//guarda en la variable result el resultado de la consulta $query
$result = mysqli_query($db,$query) or die(mysqli_error($db));

while ($row = mysqli_fetch_assoc($result)) {
extract($row);
echo $movie_name. ' : '. $people_fullname . ':' . $movie_director . '<br>';
};

echo "<br>";
mysqli_query($db,$query) or die(mysqli_error($db));
echo 'Data inserted successfully';
?>