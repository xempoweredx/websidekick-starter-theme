# websidekick-starter-theme
Wordpress starter theme based on Bootstrap 4.3.1. Child theme for Understrap WP Theme (https://github.com/holger1411/understrap).

## Features
- Bootstrap 4.1.3 framework. Easily upgrade to latest Bootstrap release via WP Admin Dashboard settings. Rrequires "WebSidekick" admin plugin (https://github.com/xempoweredx/websidekick).
- Latest Fontawesome Free release. Easily upgrade to FA Pro, if you have that subscription, via WP Admin Dashboard settings. Rrequires "WebSidekick" admin plugin (https://github.com/xempoweredx/websidekick).
- Understrap calls and hooks. Use default Understrap hooks or override them individually via functions.php.

## Caveats
- This is a theme I developed to work in conjuction with a few plugins I developed. It should work fine for standard WP installs without these plugins. Simply replace or uncomment the enqueues in functions.php marked "*Requires Websidekick plugin".
- You can delete any page-template files or loop-template files you don't need.
- It uses a custom version of Bootstrap 4. I left the core Bootstrap 4 classes untouched, but added a few of my own utility classes i.e. font-sizes, font-weights, etc.
- The theme has multiple options for the main menu appearance. Just change the classes in the header.php and enqueue the correct menu-x-x.css file.
- I tend to use local fonts. You can enqueue Goole fonts in the functions.php file and override the body{} in your custom css file.
- If you don't have a FontAwesome 5 Pro account, simply open functions.php, locate fa5-scripts, uncomment the free version line, and comment out the pro version. Either way, be sure to update the FA5 integrity hash (provided by FA5) located in "Settings->General".