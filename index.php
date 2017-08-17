<html>
 <head>
  <title>PHP Says Hello</title>
 </head>
 <body>
   <!-- background-color options: powderblue, palegreen, yellow - https://www.w3schools.com/cssref/css_colors.asp -->
  <div style="display: inline-block; padding: 5px; background-color: yellow">
   <?php
   $divContent= "<p>I'm <b>" . gethostname()  . "</b>, my address is <b>" . $_SERVER['SERVER_ADDR'] . "</b> and I'm served by PHP v<b>". phpversion() . "</b></p>"
   echo $divContent;
   ?>
   
  </div>
 </body>
</html>
