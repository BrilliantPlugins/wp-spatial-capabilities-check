=== WP Spatial Capabilities Check ===
Contributors: stuporglue
Donate link: https://cimbura.com/contact-us/make-a-payment/
Tags: GIS, spatial, mysql, mariadb, geography, mapping
Requires at least: 3.0.1
Tested up to: 4.5.2
Stable tag: trunk
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Creates a page in the dashboard with a list of the spatial functions your database supports so you can do GIS with MySQL or MariaDB in WordPress.

== Description ==

MySQL and MariaDB both have improved their spatial support in the last few years, but 
it's not always easy to track down which functions are available in which version.

This tool will check which functions are actually available in your current MySQL or MariaDB database.

Once you know what spatial functions are available you can use your database to do GIS right within WordPress.


For more information on how to use these functions see the following resources:

* [WherePress.com - GIS for WordPress and MySQL](http://wherepress.com/)
* [MySQL and MariaDB Spatial Support Matrix](https://mariadb.com/kb/en/mariadb/mysqlmariadb-spatial-support-matrix/)
* [Spatial function reference for MySQL 5.4](https://docs.oracle.com/cd/E19957-01/mysql-refman-5.4/functions.html#spatial-extensions)
* [Spatial function reference for MySQL 5.5](https://dev.mysql.com/doc/refman/5.5/en/spatial-function-reference.html)
* [Spatial function reference for MySQL 5.6](https://dev.mysql.com/doc/refman/5.6/en/spatial-function-reference.html)
* [Spatial function reference for MySQL 5.7](https://dev.mysql.com/doc/refman/5.7/en/spatial-function-reference.html)
* [Spatial function reference for MariaDB](https://mariadb.com/kb/en/mariadb/gis-functionality/)

== Installation ==

Install this plugin the usual WordPress way, then go to your WordPress dashboard to Tools::Spatial Capabilities. It will
display a table with a list of all known spatial functions from MySQL and MariaDB along with a
simple 'Yes' or 'No', indicating if your install has that function.

1. Upload the plugin files to the `/wp-content/plugins/wp-spatial-capabilities-check` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress.
1. Go to Tools::Spatial Capabilities to see what spatial functions you can use.


== Frequently Asked Questions ==

No one has actually asked any questions yet. 

= Where can I get help with GIS and WordPress? = 

For community support try [WherePress.com](http://WherePress.com/), or [The Spatial Community](https://julien24.typeform.com/to/kGPqYr).

For commercial support you can contact the plugin developer at [Cimbura.com](https://cimbura.com/contact-us/project-request-form/)

For fast and short questions you can [contact me](https://twitter.com/stuporglue) on twitter

= How can I add more spatial functions? = 

Upgrade your database to at least MySQL 5.6.1 or MariaDB 5.3.3. 

== Screenshots ==

1. WP Spatial Capabilities Check shows an easy to read table listing spatial 
functions and if they're available with your current database.
2. The tool can be found in the Dashboard under Tools::Spatial Capabilities.

== Changelog ==

= 0.0.3 = 
* Use the WordPress plugin packaging standards

= 0.0.2 =
* Internationalization
* WordPress coding standards compliance

= 0.0.1 =
* Initial development and testing

== Upgrade Notice ==

= 0.0.3 =
* You probably don't have a version installed yet, so you should definately
check out 0.0.3.
