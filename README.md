vanilla-kit
===========
![Vanilla Kit logo](http://dl.dropbox.com/u/26469456/vanilla.png)

Vanilla Kit is a very simple php powered dynamic website template to kickstart a small to medium sized project that does not require a CMS or a complicated file structure.

It is not a MVC framework, it is not a CSS/Grid framework. It aims to ease the task of web designers to quickly setup and develop an organized and easy to edit website, it uses some basic PHP to separate the static parts of the website from the page content, and do the 'ol dynamic fetch page.

It's straight out of my own tool box and i use it for specific cases where no CMS or complicated content requirements are in demand. I decided to polish it up and drop it on Github for anybody who wants to make use of it.

Just change some titles around, create your page files, add your html, style them with your own css, and it's ready to rock. Simple tasks like adding page titles, description and keywords on a per page basis has also been taken care of. It's simplicity leaves out room to improve or add other functionalities you might require.

##Requirements##

- Apache/linux Server running PHP
- mod_rewrite enabled - uses .htaccess for friendly URL's.
- HTML/CSS knowledge
- Some PHP knowledge, if you intend to expand or improve it.
- Know how to read english - code comments are written in english.

##Usage##

Vanilla Kit it pretty straight forward and you should be able to understand how everything works, anyway you will find that all code is commented!

Edit the `inc/header.php` and `inc/footer.php` files and change the website titles and footer notes. The website's static parts like title, navigation and footer links are contained in these files.

Inside the `pages` folder you will find some already created example pages, follow the instructions in these to know what needs to be included on every site page you create inside this folder. All images used in your page content can be directly linked to the `media` folder like this:

	<img src="media/mypic.png" alt="some pic">

The rest is up to you - html, css and jQuery(link to jQuery lib already included in footer.php)

I've also included a starting style.css, with some pretty typography presets that you can use to kick off your design and a handy javascript function  for .svg fallback to .png if you are using .svg images in your content.

Enjoy!!

##License##

All Vanilla Kit code is licensed under the MIT License: http://opensource.org/licenses/MIT

Basically, you can do whatever you want as long as you include the original copyright. See LICENSE.txt.
