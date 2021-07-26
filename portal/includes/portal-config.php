<?php

/*
portal-config.php
Used to store all of our IT162 configuration information
*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

// echo THIS_PAGE;

// die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Clare Swensen's IT 162 Portal Page";
        $PageID = 'Welcome';
        $logo = 'fa-home';
        $logo_color = ' style="color:#00f"';
    break;

    case 'big/index.php';
        $title = "Big";
        $PageID = 'Big Research Home Page';
        $logo = 'fa-home';
        $logo_color = ' style="color:#00f"';

    case 'aia.php':
        $title = "Clare's Final Project Audience, Issues and Approach Research";
        $PageID = 'AIA';
        $logo = "fa-universal-access";
        $logo_color = ' style="color:#00f"';
        break;
            
    case 'contactme.php':
        $title = "Contact Clare";
        $PageID = 'Contact Page';
        $logo = "fa-paper-plane-o";
        $logo_color = ' style="color:#0f0"';
        break;

    case 'flowchart.php':
            $title = "Flowchart";
            $PageID = 'Flowchart';
            $logo = "";
            $logo_color = ' style=""';
            break;   

    default:    
        $title = THIS_PAGE; 
        $PageID = 'Welcome';   
        $logo = '';  //no icon by default    
        $logo_color = "";

}
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Clare";
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

