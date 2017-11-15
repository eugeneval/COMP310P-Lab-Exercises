<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = test_input($_POST["email"]);

    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "root";
    $dbname = "sakila";

    $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT first_name, last_name FROM customer WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) == 0) {
        $loginString = "No mathcing user!";
    }
    else {
        $loginString = "Welcome, ".$row['first_name']." ".$row['last_name']."!";
    }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

 ?>

<!DOCTYPE html>

<head>
  <link href="styling.css" rel="stylesheet">
  <title>Rob's Rentals</title>
</head>

<body>
  <header>
    <h1>Rob's Rentals</h1>
    <img src="the-movies.jpg" width="126" height="84">
    <h2>The place for all of your DVD needs!</h2>
    <div class="header_list">
      <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="rentals.php">Rentals</a></li>
        <li><a href="returns.html">Returns</a></li>
      </ul>
    </div>

  </header>
  <h2>We have:</h2>
  <div class="body_list">
    <ul>
      <li>Films</li>
      <li>TV Box Sets</li>
      <li>Games</li>
      <li>Music</li>
    </ul>
  </div>
  <h2>About us</h2>
  <p>
    Lorem ipsum dolor sit amet, et case nobis senserit sea, vel an aperiam
    fabulas definitiones. Altera iriure mediocritatem eam ad. Vis novum
    suavitate an. Mel amet audire instructior ad.
  </p>
  <form method="post" action="home.php">
      <h2>Get in touch</h2>
      <input type="email" placeholder="Your Email" id="email" maxlength="50" name="email"/>
      <input type="submit" />
      <p>
          <div id="emailSubmitted">
              <?php echo $loginString; ?>
          </div>
      </p>
  </form>

  <script src="script.js"></script>
</body>
