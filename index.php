<html>
 <head>
  <title>PHP Says Hello</title>
 </head>
 <body>
 <?php
 echo " <p>Hello World! My name is <strong>PHP</strong> and my location is " . $_SERVER['SERVER_ADDR'] . ". Let's be friends?</p>\r\n";
 echo "  <p>My php version is: <strong>". phpversion() . "</strong></p>"
  ?>
 </body>
</html>
