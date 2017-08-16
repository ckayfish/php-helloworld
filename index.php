<html>
 <head>
  <title>PHP Says Hello</title>
 </head>
 <body>
   <!-- background-color options: powderblue, palegreen - https://www.w3schools.com/cssref/css_colors.asp -->
  <div style="display: inline-block; padding: 5px; background-color: powderblue">
   <?php
 echo "<p>Hello Again! I'm <strong>". gethostname()  ."</strong>, my address is <strong>" . $_SERVER['SERVER_ADDR'] . "</strong> and I'm served by PHP v<strong>". phpversion() . "</strong></p>";
  ?>
  </div>

 </body>
</html>
