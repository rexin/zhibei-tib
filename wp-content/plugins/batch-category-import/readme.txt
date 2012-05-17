=== Batch categories import ===
Contributors: guymaliar
Donate link: 
Tags: category, import 
Requires at least: 3.3.1
Tested up to: 3.3.1
Stable tag: trunk

This is a plug-in allowing the user to create large amount of categories on the fly.

== Description ==

Based on the discontinued http://wordpress.org/extend/plugins/category-import/.
Allows a fast way to create a large amount of categories with whatever slugs you'd like and nested categories as well!

== Installation ==

This section describes how to install the plugin and get it working.

1. Make a new directory inside `/wp-content/plugins/` named `batch-category-import`
2. Upload all files into `/wp-content/plugins/batch-category-import/` directory
3. Login Wordpress administration panel.
4. Activate the plugin through the 'Plugins' menu.
5. Go to Posts -> Category Import and start importing!

== Frequently Asked Questions ==

= How do I create categories? =

Go to Posts -> Category Import in the administration paenl,
In the text area create categories separated by a new line, e.g. :

* Category A
* Category B
* Category C

= What about nested categories? =

Great question!
In the same text area, you can create child categories as well!
Each category who has a parent is written with a back-slash '/' separating parent from child, e.g. :

* Category A / Category B / Category C

And for massive assignment, e.g. :

* Category A / Category B
* Category B / Category C
* Category B / Category D
* Category A / Category E / Category F
* Category F / Category H

wasn't that easy?

= What slug is being set for each of my categories? =

Well, the default slug is the category name with hyphens instead of white spaces and all lowercase.

= What if I would like to change the slug? =

No problem!
When setting a category just add the dollar-sign '$' delimiter after the category name and your new slug!
e.g. :

* Category A$foo / Category B$bar / Category C$cool-isnt-it

= What about adding descriptions? =

Easy, just add another dollar-sign '$' delimiter after the category slug and wrap your description with double-quotes "". e.g. :

* Category A$foo$"this is bar!"

= And if I don't like your silly dollar-sign delimiter? =

Just change it!
Just before the text area there's a small input bar that you can put whatever delimiter you want.
Just one notice: currently it is impossible to user the back-slash '/' as a delimiter.

== Screenshots ==

== Changelog ==
v1.0.1 - Added support for comments by making a third dollar-sign '$' in the category string.
