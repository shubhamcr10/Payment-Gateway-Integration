<?php session_start();
$_SESSION['page']="contact";

?>

<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" href="styleC.css">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <script src="scriptC.js" type="text/javascript"></script>
    </head>
    <body style="background-color: #ffffff;margin: 8px">
        <header>
            <?php include './Header.php'; ?>
<br>

<br><br>

<div class="wrapper">
    <h2>Contact us</h2>
    <div id="error_message"></div>
    <form id="myform" action="ins.php" method="get" onsubmit="return validation()">
      <div class="input_field">
          <input type="text" name="name" placeholder="Name" id="name">
      </div>
      <div class="input_field">
          <input type="text" name="is" placeholder="Issue (Optional)" id="issue">
      </div>
      <div class="input_field">
          <input type="text" name="ph" placeholder="Phone" id="phone">
      </div>
      <div class="input_field">
          <input type="text" name="em" placeholder="Email" id="email">
      </div>
      <div class="input_field">
          <textarea placeholder="Message" name="msg" id="message"></textarea>
      </div>
      <div class="btn">
          <input type="submit">
      </div>
    </form>
  </div>
     </header>

    </body>
</html>