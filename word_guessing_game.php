<!DOCTYPE html>
<html>
<head>
  <title>Word Guessing Game</title>
</head>
<body>
  <h2>Word Guessing Game</h2>
  <form method="post">
    <p>
      Enter a word: <input type="text" name="word" maxlength="20" required> </br>
      Guessed letters: <input type="text" name="guessed_letters" id="guessed_letters"></p> 
    <input type="submit" name="submit_guessed_letter" value="Guess">
  </form>
  <?php
    session_start();
    if (!isset($_SESSION['word'])) {
      $_SESSION['word'] = generateRandomWord(8);
      $_SESSION['guessed_letters'] = '';
    }

    if (isset($_POST['submit_guessed_letter'])) {
      $guessed_letter = $_POST['guessed_letters'];
      $_SESSION['guessed_letters'] .= $guessed_letter;
    }

    $word = $_SESSION['word'];
    $guessed_letters = $_SESSION['guessed_letters'];
    $word_with_asterisks = '';

    for ($i = 0; $i < strlen($word); $i++) {
      if (strpos($guessed_letters, $word[$i]) !== false) {
        $word_with_asterisks .= $word[$i];
      } else {
        $word_with_asterisks .= '*';
      }
    }

    echo "<p>$word_with_asterisks</p>";

    function generateRandomWord($length) {
      $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $random_word = '';
      for ($i = 0; $i < $length; $i++) {
          $random_word .= $characters[random_int(0, 25)];
      }
      return $random_word;
    }
  ?>
</body>
</html>