<style type="text/css">


.spatialcapabilites {
	margin-top: 10px;
	background-color: white;
	margin-right: 10px;
	padding: 10px;
}

.spatialcapabilites > div {
	width: 45%;
	max-width: 500px;
	min-width: 250px;
}

@media all and (max-width: 940px) {
	.spatialcapabilites > div {
		width: 100% !important;
		max-width: none;
		min-width: none;
	}
}

.spatialcapabilites th {
	text-align: left;
	border-bottom: 1px dotted #aaa;
}

.spatialcapabilites td.hassupport {
	background-color: mediumseagreen;
}

.spatialcapabilites td.lackssupport {
	background-color: lightcoral;
}

.spatialcapabilites .leftblock, 
.spatialcapabilites .rightblock {
	display: inline-block;
	vertical-align: top;
	margin-right: 35px;
	margin-bottom: 35px;
}

.spatialcapabilites ul li {
	list-style-type: disc;
	margin-left: 25px;
}

</style>
<h1>WP Spatial Capabilities Check</h1>
<div class="spatialcapabilites">
<div class="leftblock">
<p>
WordPress runs on MySQL and MariaDB so it makes sense that the spatial capabilites available depend on what the underlying database provides.
</p>
<p>
Initial spatial support arrived in MySQL 5.4.2, and is in all versions of MariaDB. Until MySQL 5.6.1 and MariaDB 5.3.3 most spatial operators worked on the bounding box instead of on the actual geometry. For details on why this was a huge limitation, see <a href='https://www.percona.com/blog/2013/10/21/using-the-new-mysql-spatial-functions-5-6-for-geo-enabled-applications/' target='_blank'>
	this blog post from Percona.com</a>.
</p>
<h3>Resources</h3>
<p>
As you add functionality to your WordPress install, the following resources may be useful to you: 
</p>
	<ul>
		<li><a href='http://wherepress.com/'>WherePress.com - GIS for WordPress and MySQL</a></li>
		<li><a href='https://mariadb.com/kb/en/mariadb/mysqlmariadb-spatial-support-matrix/' target='_blank'>MySQL and MariaDB Spatial Support Matrix</a></li>
		<li><a href='https://docs.oracle.com/cd/E19957-01/mysql-refman-5.4/functions.html#spatial-extensions' target='_blank'>Spatial function reference for MySQL 5.4</a></li>
		<li><a href='https://dev.mysql.com/doc/refman/5.5/en/spatial-function-reference.html' target='_blank'>Spatial function reference for MySQL 5.5</a></li>
		<li><a href='https://dev.mysql.com/doc/refman/5.6/en/spatial-function-reference.html' target='_blank'>Spatial function reference for MySQL 5.6</a></li>
		<li><a href='https://dev.mysql.com/doc/refman/5.7/en/spatial-function-reference.html' target='_blank'>Spatial function reference for MySQL 5.7</a></li>
		<li><a href='https://mariadb.com/kb/en/mariadb/gis-functionality/' target='_blank'>Spatial function reference for MariaDB</a></li>
	</ul>
</div>
<div class="rightblock">
<h3>Current Capabilities</h3>
<p>
Your database version is <strong><?php print $version_info->v;?></strong>.
</p>
<p>
The following table was created by querying your current MySQL connection.
</p>
<?php

if( isset( $capabilites_table ) ) {
	echo $capabilites_table;
} else {
	echo '<p>The capabilities table could not be generated.</p>';
}
?>
</div>
</div>
