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
                      echo "<tr><td>".$row['Categories']."</td><td>".$row['Number Available']."</td></tr>";
                  }
              } else {
                  echo "0 results";
              }

              mysqli_close($conn);
              ?>
          </tbody>
      </tr>
  </table>
  <form>
      <h3>Select genres or search for a specific DVD: </h3>
      <!-- Note: there are 16 categories -->
      <input type="checkbox" name="Category" value="Action" id="Action"/><label> Action</label>
      <input type="checkbox" name="Category" value="Animation" id="Animation"/><label> Animation</label>
      <input type="checkbox" name="Category" value="Children" id="Children"/><label> Children</label>
      <input type="checkbox" name="Category" value="Classics" id="Classics"/><label> Classics</label>
      <input type="checkbox" name="Category" value="Comedy" id="Comedy"/><label> Comedy</label>
      <input type="checkbox" name="Category" value="Documentary" id="Documetary"/><label> Documentary</label>
      <input type="checkbox" name="Category" value="Drama" id="Drama"/><label> Drama</label>
      <input type="checkbox" name="Category" value="Family" id="Family"/><label> Family</label>
      <input type="checkbox" name="Category" value="Foreign" id="Foreign"/><label> Foreign</label>
      <input type="checkbox" name="Category" value="Games" id="Games"/><label> Games</label>
      <input type="checkbox" name="Category" value="Horror" id="Horror"/><label> Horror</label>
      <input type="checkbox" name="Category" value="Music" id="Music"/><label> Music</label>
      <input type="checkbox" name="Category" value="New" id="News"/><label> New</label>
      <input type="checkbox" name="Category" value="Sci-Fi" id="Sci-Fi"/><label> Sci-Fi</label>
      <input type="checkbox" name="Category" value="Sports" id="Sports"/><label> Sports</label>
      <input type="checkbox" name="Category" value="Travel" id="Travel"/><label> Travel</label>
      <br /><br />
      <input type="text" name="Name" placeholder="Film name " id="textInput"/>
      <input type="submit" onclick="submitRentals()"/>
  </form>

    <script src="script.js"></script>

</body>
