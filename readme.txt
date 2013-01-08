=== Plugin Name ===
Contributors: Nick the Geek
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=RGUXZDAKT7BDW
Tags: agentpress, color, selector, genesis, genesiswp, studiopress, style, stylesheet,
Requires at least: 3.0
Tested up to: 3.3.1
Stable tag: 1.0

Permits users to quickly and easily change style sheets with the Genesis framework themes

== Description ==

This plugin adds a new menu box to the Genesis theme settings. This menu box allows users to easily select from any Genesis style sheets within the child theme folder.

This is useful for child themes that come with multiple style sheets, such as the Agent Press Child theme 1.0, or in a multisite environment using WPMU, or WP 3.0+ with networking enabled.  In such an environment each child theme could have multiple style sheets allowing multiple sites to use the child theme with significantly different appearances, while not affecting the other sites.

This plugin requires the [Genesis Theme Framework](http://www.studiopress.com/)

== Installation ==

1. Upload the entire `genesis-style-select` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to Genesis theme settings
4. Select desired stylesheet from the new menu box (Style Select) in the right column
5. If desired stylesheet is not available on list, please ensure that it is in the child theme folder, and that it has "template: genesis" in the head of the stylesheet (first 500 characters).
6. Save the changes

== Change Log ==

1.0 (1-20-2012 : Current)

* Extended the test for Genesis style sheet to allow newer style sheets with more theme information to work with this plugin.
* Added support for Genesis 1.8

0.7 (7-16-2010 : current)
-added a test to prevent plugin from loading functions twice when a Child theme is activated that includes this function.

0.6.1b (6-9-2010)
-updated meta-box and list names
-added description to meta-box describing how to use the plugin

0.6b (6-8-2010)
-added function to show only Genesis style sheets
-added check for selected style sheet so that the default loads when switching themes or if a style sheet is deleted

0.5b (6-7-2010)
-added a check for Genesis theme
-added autopopulated style sheets (big thanks to Ade and Nathan Rice)


== Special Thanks ==
I owe a huge debt of gratitude to all the folks at StudioPress, their themes make my life easier.

This plugin is about 98% better because of two people.

Ade (http://www.studiograsshopper.ch) who gave me some good tips including the suggestion that the drop down list be populated automatically based on what is in the theme folder. I was about to make people type that in so things are about 99% easier because of that idea.

Nathan Rice (http://www.nathanrice.net/) who made that autopopulated drop down list a reality before I even saw the suggestion. He also made the Genesis check work in his plugin "Genesis Simple Hooks" and gave me permission to use that in this plugin.