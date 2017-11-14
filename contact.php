<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Arab Student Association At Cornell</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
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
            <div>
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" placeholder="Full Name" required>
            </div>
            <!-- <div class="error">
              <span class="errorContainer hiddenError" id="nameError">
                A name is required.
              </span>
            </div> -->
            <div>
              <label for="mail">E-mail:</label>
              <input type="email" id="email" name="email" placeholder="user@example.com" required>
            </div>
            <!-- <div class="error">
              <span class="errorContainer hiddenError" id="emailError">
                Please input valid email.
              </span>
            </div> -->
            <div>
              <label for="msg">Message:</label>
              <textarea id="msg" name="message" placeholder="Message" required></textarea>
            </div>
            <!-- <div class="error">
              <span class="errorContainer hiddenError" id="msgError">
                Please write a message.
              </span>
            </div> -->
            <div class="button">
              <button type="submit">Send</button>
            </div>
          </form>
    </div>
  </div>
</body>
</html>
