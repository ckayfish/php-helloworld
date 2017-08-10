<html>
 <head>
  <title>PHP Says Hello</title>
 </head>
 <body>
  <div style="background-color:powderblue;height:50px;width:640px">
  </div>
<?php
 echo "<p>Hello World! I'm <strong>". gethostname()  ."</strong>, my address is <strong>" . $_SERVER['SERVER_ADDR'] . "</strong> and I'm served by PHP v<strong>". phpversion() . "</strong></p>";
  ?>
 </body>
</html>
