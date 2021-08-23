<?php

/*
final-config.php
Used to store all of our IT162 configuration information
*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

// echo THIS_PAGE;


switch(THIS_PAGE){

    case 'index.php':
        $title = "Lake City Pub";
        $PageID = 'Welcome';
    break;

    case 'about.php':
        $title = "About Page";
        $PageID = 'About Us';
    break;

    case 'menu.php':
        $title = "Menu Page";
        $PageID = 'Menus';
    break;

    case 'events.php':
        $title = "Event Page";
        $PageID = 'Events';
    break;
            
    case 'contactme.php':
        $title = "Contact Page";
        $PageID = 'Contact';
    break;

    default:    
        $title = THIS_PAGE; 
        $PageID = 'Welcome';   
        //$logo = '';  //no icon by default    
    

}
$nav2['index.php'] = "Home";
$nav2['about.php'] = "About";
$nav2['menu.php'] = "Menu";
$nav2['events.php'] = "Events";
$nav2['contactme.php'] = "Contact";
/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
            $myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
        }else{
            $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
        }    
    }
      
    return $myReturn;    
}

?>

