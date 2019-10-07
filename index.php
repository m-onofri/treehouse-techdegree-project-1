<?php 
  require 'inc/functions.php';
  $quote = getRandomQuote($quotes);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body class="<?php echo defineBgColor($quote) ?>">
  <div class="container">
    <?php echo printQuote($quote); ?>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>

  <script>
    setTimeout(() => window.location.reload(true), 20000);
  </script>
</body>
</html>