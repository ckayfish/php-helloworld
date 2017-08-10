<html>
 <head>
  <title>PHP Says Hello</title>
 </head>
 <body>
  <div style="background-color:blue">
<?php
 echo "<p>Hello World!"."My name is: <strong>". gethostname()  ."</strong>. My address: <strong>" . $_SERVER['SERVER_ADDR'] . "</strong>. My php version is: <strong>". phpversion() . "</strong></p>";
  ?>
  </div>
 </body>
</html>
