<!-- Before using this file, you must rename it to process.php -->
<html><head><title>process.php for HW06</title>
</head>
<body>
<h1>Your results from process.php:</h1>
<?php
  // Un-comment the next line if your variables aren't showing up and you would like some help
  print_r($_POST);
  print "<table border=1><tr><th>Item</th><th>Name</th><th>Value</th></tr>";
  print "<tr><td>Credit card number</td><td>cardnum</td><td>" . $_POST['cardnum'] . "</td></tr>";
  print "<tr><td>Expiry date</td>       <td>expdate</td><td>" . $_POST['expdate'] . "</td></tr>";
  print "<tr><td>CVV number</td>        <td>cvv    </td><td>" . $_POST['cvv']     . "</td></tr>";
  print "</table>";
?>
</body></html>