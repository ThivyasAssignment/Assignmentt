<!DOCTYPE html>
<head>
  <title>Palindrome Checker</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="word">
    <button type="submit" name="submit_palindrome">Check</button></br>
    <a href="mainpage.php">Back to Main Page</a>
  </form>
  <?php
    if (isset($_POST['submit_palindrome'])) {
      $input = $_POST['word'];
      $input = preg_replace('/[^A-Za-z0-9]/', '', $input); // Remove non-alphanumeric characters
      $input = strtolower($input); // Convert input to lowercase
      $reversed_input = strrev($input); // Reverse the input
      if ($input == $reversed_input) {
        echo "The word or phrase is a palindrome.";
      } else {
        echo "The word or phrase is not a palindrome.";
      }
    }
  ?>
</body>
</html>
