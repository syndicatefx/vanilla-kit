<?php
/**************************************************
  Vanilla Kit
  Copyright 2013 Paulo Nunes
  https://github.com/syndicatefx/vanilla-kit
  Author Paulo Nunes (syndicatefx.com)
  
	This file contains the <head> of your website:
	The variables you see on some of the meta tags 
	are used to output the information entered in 
	your pages/<pagename>.html files, for full SEO
	implementation.(do not remove these)

	It also contains a variable on the <body> tag
	to output a class name, also added in your
	pages/<pagename>.html.(do not remove it)
	
	The <header> part is up to you, edit it to fit
	your needs, and remember to come back and add
	your pages to the main navigation(nav) links,
	without the .html extension!
**************************************************/
?>

<!DOCTYPE html>
<!--[if lt IE 9]><html lang="en" class="ie8"><![endif]-->
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php
		if($pagetitle == 'Not Found'){
			echo '<meta name="robots" content="noindex, nofollow">';
		}
	?>
	<title>Vanilla Kit | <?php echo $pagetitle ?></title>
	<meta name="title" content="Vanilla Kit | <?php echo $pagetitle ?>">
	<meta name="description" content="<?php echo $pagedescription ?>">
	<meta name="keywords" content="<?php echo $pagekeywords ?>" /> 

	<meta name="author" content="Your Name Here">
	<meta name="Copyright" content="Copyright Here.">

	<link rel="shortcut icon" href="css/i/favicon.ico">  
	<link rel="apple-touch-icon" href="css/i/apple-touch-icon.png">
	<link rel="stylesheet" href="css/style.css">
	<!--[if lt IE 9]><script type="text/javascript" src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body class="<?php echo $bodyclass ?>">
<header>
	<img src="media/vanilla.svg" alt="Vanilla logo">
	<h1><a href="./" title="home">Vanilla Kit</a></h1>
	<nav class="cf">
		<ul>
			<li><a href="about">About</a></li>
			<li><a href="contact">Contact</a></li>
		</ul>
	</nav>
</header>