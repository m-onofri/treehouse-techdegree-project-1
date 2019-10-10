<?php 
  require 'inc/functions.php';
  //Return random integer between 1 and 5 for background color
  $colorNum = rand(1, 5);
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
<body class="<?php echo "color{$colorNum}"; ?>">
  <div class="container">
    <?php printQuote($quotes); ?>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>

  <script>
    //Auto-refresh the page every 20 seconds
    setTimeout(() => window.location.reload(true), 20000);
  </script>
</body>
</html>