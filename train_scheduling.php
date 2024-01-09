<!DOCTYPE html>
<head>
  <title>Train Scheduling</title>
</head>
<body>
  <form action="" method="post">
    <label for="distance">Distance (in km):</label>
    <input type="number" name="distance" required></br>
    <label for="stops">Number of stops:</label>
    <input type="number" name="stops" required></br>
    <label for="weather">Weather condition:</label></br>
    <input type="radio" name="weather" value="good" required>Good</br>
    <input type="radio" name="weather" value="bad" required>Bad</br>
    <button type="submit">Calculate</button></br>
    <a href="mainpage.php">Back to Main Page</a>
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $distance = $_POST['distance'];
    $stops = $_POST['stops'];
    $weather = $_POST['weather'];

    if ($weather === "good") {
      $speed = 100;
    } else {
      $speed = 60;
    }

    $total_time = $distance / $speed + $stops * 5 / 60; // Convert additional stop time to hours
    echo "Total time to travel " . $distance . " km considering " . $stops . " stops and " . $weather . " weather condition is approximately " . $total_time . " hours.";
  }
  ?>
</body>
</html>