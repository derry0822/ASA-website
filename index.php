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
  <?php include "includes/nav.php" ?>
  <div id="body">
    <div id="header">
      <h1>Arab Student Association At Cornell</h1>
    </div>
    <div id="about">
      <div class="left-info">
        <h2>About us</h2>
        <p> The purpose of Arab Student Association at Cornell University is to create
          a forum for individuals interested in Arab language, culture, or politics
          to meet and build community.
        </p>
        <p>Those individuals will then have the opportunity to increase awareness
          of pertinent issues in the Arab world both on the Cornell campus and
          in the larger Ithaca community. The ASA is an apolitical, non-partisan
          student organization. There will be no association with or bias towards
          regional Arab political, religious, and ideological entities.
        </p>
        <p> Our weekly meetings are on Fridays at 3:30pm. Locations subject to change
          so join our mailing list to find out more!
        </p>
      </div>
      <img src="images/about.jpg" alt="group">
    </div>
    <div id="listserv">
      <h1> STAY UPDATED. JOIN OUR MAILING LIST! </h1>
      <form id="mail">
        <input type="email" id="mailinglist" placeholder="name@example.com">
        <div id="submit">
          <button type="submit" name="button">Submit</button>
        </div>
      </form>
    </div>
  </div>
  <!-- Add to listserv -->
  <?php

  if(isset($_POST['button'])){
    $to      = 'dc784@cornell.edu';
    $subject = 'Hello';
    $message = 'Welcome to the Cornell ASA email list.';
    $headers = "From: " . $_POST['button'] . "\r\n" .
    "CC: ds869@cornell.edu";

    mail($to, $subject, $message,$headers);

    echo 'Email Sent.';
  }

  ?>

  <?php include 'includes/scripts.php' ?>
</body>
</html>
