<?php
$email=$_REQUEST["email"];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Arab Student Association At Cornell</title>
  <!-- Auxilliary Stylesheets -->
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" type="text/css" href="styles/style.css" media="all">
</head>
<body>
  <div class="container" id="solid">
    <?php include "includes/nav.php" ?>
    <div id="thanks">
      <h2>Thanks for contacting us!</h2>
    </div>
    <div class="twoPar">
      <p>Thank you for messaging us. We will E-mail you a response
        as soon as possible at <?php echo($email);?>.</p>
      <p>We really appreciate it!!</p>
    </div>
  </div>
  <?php include 'includes/scripts.php' ?>
</body>
</html>
