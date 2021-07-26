<?php

/*
big-config.php
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
$logo_color = ''; //make logo_color an empty string by default


switch(THIS_PAGE){

    case 'index.php':
        $title = "Clare Swensen's IT 162 BIG";
        $PageID = 'Welcome';
        $logo = 'fa-home';
    break;

    case 'clientIndustry.php':
        $title = "Client Industry Research";
        $PageID = 'Client Industry';
        $logo = "fa-universal-access";
        $logo_color = ' style="color:#00f"';
        break;

    case 'SEO';
        $title = "Search Engine Optimization";
        $PageID = 'SEO';
            
    case 'contactme.php':
        $title = "Contact Clare";
        $PageID = 'Contact Page';
        $logo = "fa-paper-plane-o";
        $logo_color = ' style="color:#0f0"';
        break;

   

    default:    
        $title = THIS_PAGE; 
        $PageID = 'Welcome';   
        $logo = '';  //no icon by default    
    

}
$nav2['index.php'] = "Welcome";
$nav2['seo.php'] = "SEO";
$nav2['clientIndustry.php'] = "Client Industry";
$nav2['contactme.php'] = "Contact Client";
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

