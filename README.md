# Good Weather
Full liquid and light template for Docuwiki. Without css framework.

Tested in Firefox 48 and Chrome 52

![screenshot_docuwiki](https://cloud.githubusercontent.com/assets/4923502/18818186/fd24adbe-8383-11e6-859c-7372a820107d.png)

## Installation
* Download and unpack master branch
* Copy to DokuWiki tpl directory (/lib/tpl)
* Login and activate template

## How to add style for a single page
The template parses page's root namespace and adds to body as class.
Write your css rules in /user/screen.css.

## How to inlcude another css file
* Create css-file in /user/ -> https://github.com/dyatlovk/good-weather/tree/master/user
* Add path to your file at the end of [stylesheets] section ->
https://github.com/dyatlovk/good-weather/blob/master/style.ini#L50
