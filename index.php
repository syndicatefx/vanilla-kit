<?php
/**********************************************************

  Vanilla Kit
  Copyright 2013 Paulo Nunes
  https://github.com/syndicatefx/vanilla-kit
  Author Paulo Nunes (syndicatefx.com)

  All Vanilla Kit code is licensed under the MIT License:
  http://opensource.org/licenses/MIT
  Basically, you can do whatever you want as long as you 
  include the original copyright.

***********************************************************

  This file controls what pages to load based on user input.
  No need to edit it unless you know what you are doing!
  
**********************************************************/

// Defualt page will always be pages/homepage.html, if not, change this to
// the name of the file you have created to be the homepage.
$page = 'homepage';
// Lets get pages based on user input 
if (!empty($_GET['name'])) {
    //Assign a variable to a sanitised version of the data passed in the URL
    $tmp_page = basename($_GET['name']); 
    //If the file exists, update $page
    if (file_exists("pages/{$tmp_page}.html")) 
        $page = $tmp_page;
    //If the file does not exist, include our custom notfound page and don't run anymore code  
    elseif(!file_exists($tmp_page)){
      include 'pages/notfound.html';
      exit;
  	}
}
// Include $page (declared default)
include ("pages/$page.html");
 ?>