<!DOCTYPE html>
<head>
  <title>Change Calculator</title>
</head>
<body>
  <form action="" method="post">
    <label for="transaction_cost">Transaction cost:</label>
    <input type="float" name="transaction_cost">
    <label for="customer_money">Customer's money:</label>
    <input type="float" name="customer_money">
    <input type="submit" name="submit" value="Calculate"></br>
    <a href="mainpage.php">Back to Main Page</a>
  </form>
  <?php
    if (isset($_POST['submit'])) {
      $transaction_cost = $_POST['transaction_cost'];
      $customer_money = $_POST['customer_money'];
      $change = $customer_money - $transaction_cost;
      $denominations = array(100, 50, 20, 10, 5, 1, 0.5, 0.2, 0.1, 0.05);
      $change_in_denominations = array();

      foreach ($denominations as $denomination) {
        $count = 0;
        while ($change >= $denomination) {
          $change -= $denomination;
          $count++;
        }
        if ($count > 0) {
          $change_in_denominations[$denomination] = $count;
        }
      }

      echo "<p>Change to return: RM" . number_format($customer_money - $transaction_cost, 2) . "</p>";
      echo "<table>";
      foreach ($change_in_denominations as $denomination => $count) {
        echo "<tr><td>" . $count . " x RM" . number_format($denomination, 2) . "</td></tr>";
      }
      echo "</table>";
    }
  ?>
</body>
</html>
