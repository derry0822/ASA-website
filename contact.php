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
    <div id="contact">
      <h2>Contact</h2>
      <form action="thanks.php" method="post" id="mainForm" novalidate>
        <div class="name">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" placeholder="Full Name" required>
          <span class="errorContainer hiddenError" id="nameError">
            Name is required.
          </span>
        </div>
        <div class="email">
          <label for="email">E-mail:</label>
          <input type="email" id="email" name="email" placeholder="user@example.com" required>
          <span class="errorContainer hiddenError" id="emailError">
            Email Address is required.
          </span>
          <span class="errorContainer hiddenError" id="emailErrorFill">
            Not a valid Email Address.
          </span>
        </div>
        <div class="message">
          <label for="msg">Message:</label>
          <textarea id="msg" name="message" placeholder="Message" required></textarea>
          <span class="errorContainer hiddenError" id="msgError">
            Please write a message.
          </span>
        </div>
        <div class="button">
          <button type="submit">Send</button>
        </div>
      </form>
    </div>
  </div>
  <!-- Load jQuery -->
  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <!-- Load validation -->
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="scripts/smooth-scroll.min.js" type="text/javascript"></script>
  <script src="scripts/main.js" type="text/javascript"></script>
</body>
</html>
