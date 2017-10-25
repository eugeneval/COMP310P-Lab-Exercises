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
//echo "ONE ";

$sql = "SELECT first_name FROM actor";
$result = mysqli_query($conn, $sql);
//$result = "RESULTS";


echo "TWO ";

if ($result === null){
  //echo "has results";
  echo "IF ";
}
else {
  echo "ELSE ";
}

//echo $result;

/*if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "has results ";
} else {
    echo "0 results ";
}*/

echo "THREE ";

 ?>




</body>
