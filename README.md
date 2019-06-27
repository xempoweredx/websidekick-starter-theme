# websidekick-starter-theme
Wordpress starter theme based on Bootstrap 4.3.1. Child theme for Understrap WP Theme.
Requires Understrap theme to be installed (https://github.com/holger1411/understrap).

## Features
- Replaces default WP jQuery version with v. 3.3.1. Easily edit/upgrade release via WP Admin Dashboard settings. Rrequires "WebSidekick" admin plugin (https://github.com/xempoweredx/websidekick).
- Bootstrap 4.1.3 framework. Easily upgrade to latest Bootstrap release via WP Admin Dashboard settings. Rrequires "WebSidekick" admin plugin (https://github.com/xempoweredx/websidekick).
- Latest Fontawesome Free release. Easily upgrade to FA Pro, if you have that subscription, via WP Admin Dashboard settings. Rrequires "WebSidekick" admin plugin (https://github.com/xempoweredx/websidekick).
- Understrap calls and hooks. Use default Understrap hooks or override them individually via functions.php.

## Caveats
- This is a theme I developed to work in conjuction with a few plugins I developed. It should work fine for standard WP installs without these plugins. Simply replace or uncomment the enqueues in functions.php marked "*Requires Websidekick plugin". 
- I have also tried to indicate which code, filters, actions that I have added or edited vs which are Understrap default, denoted in comments as either " - CG" or " - Understrap".
- You can edit/delete any /page-template/..., /loop-template/..., or /sidebar-template/... files you don't need.
- If you choose to use the Wensidekick admin plugin (https://github.com/xempoweredx/websidekick), changing jQuery, Bootstrap, and FontAwesome links and versions is as simple as changing a couple of form input text fields.
- The theme has multiple options for the main menu appearance. Just change the classes in the header.php and enqueue the correct menu-x-x.css file.
- I used local fonts. You can enqueue Goole fonts in the functions.php file and override the body{} in websidekick-theme.css.

## How it works
It shares with the parent theme all PHP files and adds its own functions.php on top of the UnderStrap parent themes functions.php. To override any parent theme hooks or files simply create the file or function in the child theme. Be sure the function name or file name is identical to parent. Also be sure to keep the same directory structure.

IT DOES NOT LOAD THE PARENT THEMES CSS FILE(S)!
Instead it uses the UnderStrap.css and Underscores.css to help conform Bootstrap to WP standards, then loads its own stylesheets.

Uses the Enqueue method the load and sort the CSS files the correct way instead of the old @import method.