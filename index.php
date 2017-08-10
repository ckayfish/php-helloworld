<html>
 <head>
  <title>PHP Says Hello</title>
 </head>
 <body>
  <div style="background-color:powderblue;height:50px;width:81px">
  </div>
<?php
 echo "<p>Hello World!"."My name is: <strong>". gethostname()  ."</strong>. My address: <strong>" . $_SERVER['SERVER_ADDR'] . "</strong>. My php version is: <strong>". phpversion() . "</strong></p>";
  ?>
 </body>
</html>
