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
  <table>
      <tr>
          <thead>
              <th>Category</th>
              <th>Number Available</th>
          </thead>
          <tbody>
              <?php
              $servername = "localhost";
              $username = "root";
              $password = "root";
              $dbname = "sakila";

              // Create connection
              $conn = mysqli_connect($servername, $username, $password, $dbname);
              // Check connection
              if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
              }

              $sql = "SELECT c.name AS 'Categories', COUNT(fc.film_ID) AS 'Number Available'
              FROM category c
              JOIN film_category fc ON fc.category_ID = c.category_ID
              GROUP BY c.name;";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                      echo "<tr><td>".$row['Categories']."</td><td>".$row['Categories']."</td></tr>";
                  }
              } else {
                  echo "0 results";
              }

              mysqli_close($conn);
              ?>
          </tbody>
      </tr>

  </table>

</body>
