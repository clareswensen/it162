<?php include 'big-config.php'?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title><?=$title?></title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />

  <script src="https://use.fontawesome.com/a0d558db34.js"></script>

 </head>
 <body>
 <header>
  <h1><a href="index.php"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i>Clare Swensen</a></h1>
  <h2><a href="index.php">SCC IT162 BIG Website</a></h2>
  <nav>
    <ul class="topnav" id="myTopnav">
    <?=makeLinks($nav2)?> 
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>

     
   <div class="wrapper">
   <!--header ends here--> 