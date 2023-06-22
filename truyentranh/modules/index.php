<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./admin2.css">
    <title>Document</title>
</head>
<body>
    <h3>Welcome to AdminCP </h3>
    <div class="wapper">
    <?php
     include("./web_mysql/config.php");
     include("./menu.php");
     include("./main.php");
     include("./fotter.php");
   ?>
   </div>
  
</body>
</html>