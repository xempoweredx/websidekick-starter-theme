# Websidekick WP Starter Theme

**Theme Name**:    Websidekick Theme Starter<br/>
**Theme URI**:     https://github.com/xempoweredx/websidekick-theme-starter<br/>
**Description**:   Wordpress Child Theme for UnderStrap (https://github.com/holger1411/understrap)<br/>
**Author**:        Chad Gray<br/>
**Author URI**:    https://github.com/xempoweredx/<br/>
**Template**:      understrap<br/>
**Version**:       1.1.0<br/>
**License**:       GNU General Public License v2 or later<br/>
**License URI**:   http://www.gnu.org/licenses/gpl-2.0.html<br/>
**Text Domain**:   websidekick-theme-starter<br/>
**Tags**:          one-column, custom-menu, featured-images, theme-options, translation-ready<br/>
**GitHub Theme URI**: https://github.com/xempoweredx/websidekick-theme-starter<br/>

Wordpress starter theme based on Bootstrap 4.3.1. Child theme for Understrap WP Theme.

**Requires Understrap** theme to be installed (https://github.com/holger1411/understrap).

## Features

- Bootstrap 4.3.1 compatible.
- Understrap 0.9.3 compatible.
- FontAwesome 5.9.0 compatible.
- Wordpress 5.2.2 compatible.
- Understrap calls and hooks. Use default Understrap hooks or override them individually via functions.php.

## Description

- This is a theme I developed to work in conjuction with a WP Admin plugin I developed. It should work fine for standard WP installs without this plugin, but will require some minor edits to *functions.php* Simply replace or uncomment the enqueues in marked as **"*Requires Websidekick plugin"**. 
- I have also tried to indicate which code, filters, actions that I have added or edited vs which are Understrap default, denoted in comments as either **- CG** or **- Understrap**.
- You can edit/delete any /page-template/..., /loop-template/..., or /sidebar-template/... files you don't need.
- If you choose to use the Wensidekick admin plugin (https://github.com/xempoweredx/websidekick), changing jQuery, Bootstrap, and FontAwesome links and versions is as simple as changing a couple of form input text fields.
- The theme has multiple options for the main menu appearance for mobile. Again, using the Websidekick plugin allows you to select mobile menu style by ticking an option. Or manually change style by enqueuing the corresponding CSS.
- I used local fonts. You can enqueue Goole fonts in the functions.php file and override the body{} in websidekick-theme.css.

### Style & Code Options via Websidekick Admin Plugin

Below is a list of options which are integrated into the Websidekick WP Admin plugin (https://github.com/xempoweredx/websidekick) that this theme uses. These settings can be found (once plugin is active) under Sidekick Options > Sidekick Options menu.

- Replaces default WP jQuery version with v. 3.3.1. Easily edit/upgrade release via text-box input.
- Bootstrap 4.1.3 framework. Easily edit/upgrade release via text-box input.
- Latest Fontawesome Free release. Easily upgrade to FA Pro, if you have that subscription, and input the new reference info via text-box input.
- Adds text-box input option for script security hashes.
- Select mobile menu style (3 options).
- Enable/Disable Maintenatnce Mode Option.
- Enable/Disable Add-to-any Share Buttons.
- Enable/Disable BLB Script Tagger.
- Enable/Disable BLB Text Search.
- Uses BS4 form styles instead of default CMB2 or WP form styles when creating Custom Metaboxes & Inputs.
- Adds List Taxonomy Widget.

**Color Selector Options**

- Main Body Text
- Primary Link
- Primary Link Hover
- Menu Link
- Menu BG
- Menu Link Hover
- Menu Link Hover BG
- Mobile Menu BG

## How it works

It shares with the parent theme all PHP files and adds its own functions.php on top of the UnderStrap parent themes functions.php. To override any parent theme hooks or files simply create the file or function in the child theme. Be sure the function name or file name is identical to parent. Also be sure to keep the same directory structure.

IT DOES NOT LOAD THE PARENT THEMES CSS FILE(S)!
Instead it uses the UnderStrap.css and Underscores.css to help conform Bootstrap to WP standards, then loads its own stylesheets.

Uses the Enqueue method to load and sort the CSS files the correct way instead of the old @import method.

## Installation
1. Download the Websidekick Starter Theme latest release .zip.
2. Go into your WP admin backend.
3. Install the parent theme UnderStrap first: https://github.com/holger1411/understrap. DO NOT activate.
    - Appearance/Themes > Add New > type Understrap in "Search themes" box and click install.
    - IMPORTANT: If you download it from GitHub make sure you rename the "understrap-master.zip" file just to "understrap.zip" or you might have problems using this child themes!!
4. Upload the websidekick-theme-starter.zip (Appearance/Themes > Add New > Upload Theme). Be sure the .zip file is named "websidekick-theme-starter.zip". Also be sure the .zip file structure contained is "websidekick-theme-starter/{theme-files}" NOT "websidekick-theme-starter/websidekick-theme-starter/{theme-files}"!
    - Or via FTP copy all theme files to "/wp-content/themes/websidekick-theme-starter/{theme-files}".
5. Activate the Websidekick Theme Starter theme.

## Editing
- Add your own custom stylesheet(s) or js files in the /css or /js directory and enqueue them as the last stylesheet or script files in functions.php. 
- Or edit "css/websidekick-theme.css" and "js/websidekick-theme.js" for overrides.
