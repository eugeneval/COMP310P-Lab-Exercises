<!DOCTYPE html>

<head>
  <link href="styling.css" rel="stylesheet">
  <title>Rob's Rentals – Rentals</title>
</head>

<body>
  <header>
    <h1>Rob's Rentals</h1>
    <img src="the-movies.jpg" width="126" height="84">
    <h2>The place for all of your film and TV needs!</h2>
    <ul>
      <li><a href="home.html">Home</a></li>
      <li><a href="rentals.php">Rentals</a></li>
      <li><a href="returns.html">Returns</a></li>
    </ul>
  </header>
  <h2>Available Rentals</h2>

<?php

//Details for connecting to freesqldatabase
//Note this database has now been deleted
/*$user = 'sql2201287';
$password = 'qC2!tI5*';
$db = 'sql2201287';
$host = 'sql2.freesqldatabase.com';
$port = 3306;*/

//Details for connecting to MAMP
$user = 'root';
$password = 'root';
$db = 'sakila';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$conn = mysqli_real_connect(
 $link,
 $host,
 $user,
 $password,
 $db,
 $port
);

if (!$conn) {
    echo "Connection failed ";
        die(mysqli_error());
          }
          else { echo "Connection succesful "; }

//$sql = "SELECT first_name FROM actor";
$result = mysqli_query($conn, "SELECT first_name FROM actor");

/*if ($result === null){
  //echo "has results";
  echo "NULL ";
}
else {
  echo "HAS STUFF ";
}*/

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "has results ";
} else {
    echo "0 results ";
}

 ?>




</body>
