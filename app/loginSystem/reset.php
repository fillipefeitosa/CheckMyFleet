<?php
require "config.php";
?>
<html>
  <head>
    <title>Reset Password</title>
  </head>
  <body>
    <div id="content">
      <h1>Log In</h1>
      <?php
      \Fr\LS::forgotPassword();
      ?>
    </div>
    <!-- https://subinsb.com/php-logsys -->
  </body>
</html>
