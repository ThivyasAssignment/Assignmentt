<head>
  <title>Assignment for IAS2243</title>
</head>
<body>
  <form action="" method="post">
    <button name="page" type="submit" value="page1">Word Guessing Game</button>
    <button name="page" type="submit" value="page2">Palindrome Checker</button>
    <button name="page" type="submit" value="page3">Train Scheduling</button>
    <button name="page" type="submit" value="page4">Change Calculator</button>
  </form>
  <?php
    error_reporting(0);
    switch($_REQUEST["page"]) {
      case "page1":
        header("Location: word_guessing_game.php");
        break;
      case "page2":
        header("Location: palindrome_checker.php");
        break;
      case "page3":
        header("Location: train_scheduling.php");
        break;
      case "page4":
        header("Location: change_calculator.php");
        break;
    }
  ?>
</body>
</html>