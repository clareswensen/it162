<?php include 'final-config.php'?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title><?=$title?></title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width"/>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/final.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />
  <link rel="stylesheet" href="css/slideshow.css" />
  <link rel="stylesheet" href="css/socialicons.css" />
  <link rel="stylesheet" href="css/gridgallery.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


 </head>
 <body>
 <header>
    <h1><a href="index.php">Lake City Pub</a></h1>
    <h2>Eat, Drink, Be Lively</h2>
  <nav>
    <ul class="topnav" id="myTopnav">
    <?=makeLinks($nav2)?> 
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>

     
   <div class="wrapper">
   <!--header ends here--> 