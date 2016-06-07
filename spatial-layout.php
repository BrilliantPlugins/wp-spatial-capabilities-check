<?php
/**
 * A mostly html file for the preferences page.
 *
 * @package wp-spatial-capabilities-check
 */

?>
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
	<h1><?php esc_html_e( 'WP Spatial Capabilities Check','wp_spatial_capabilities_check' ); ?></h1>
<div class="spatialcapabilites">
<div class="leftblock">
<p>
<?php esc_html_e( 'WordPress runs on MySQL and MariaDB so it makes sense that the spatial capabilites available depend on what the underlying database provides.','wp_spatial_capabilities_check' ); ?>
</p>
<p>
<?php
printf( esc_html__( 'Initial spatial support arrived in MySQL 5.4.2, and is in all versions of MariaDB. Until MySQL 5.6.1 and MariaDB 5.3.3 most spatial operators worked on the bounding box instead of on the actual geometry. For details on why this was a huge limitation, see %1$sthis blog post from Percona.com%2$s.', 'wp_spatial_capabilities_check' ), '<a href="https://www.percona.com/blog/2013/10/21/using-the-new-mysql-spatial-functions-5-6-for-geo-enabled-applications/" target="_blank">','</a>' );
?>
</p>
	<h3><?php esc_html_e( 'Resources','wp_spatial_capabilities_check' ); ?></h3>
<p>
<?php
esc_html_e( 'As you add functionality to your WordPress install, the following resources may be useful to you:','wp_spatial_capabilities_check' );
?>
</p>
	<ul>
	<li><a href='http://wherepress.com/'><?php esc_html_e( 'WherePress.com - GIS for WordPress and MySQL','wp_spatial_capabilities_check' ); ?></a></li>
	<li><a href='https://mariadb.com/kb/en/mariadb/mysqlmariadb-spatial-support-matrix/' target='_blank'><?php esc_html_e( 'MySQL and MariaDB Spatial Support Matrix','wp_spatial_capabilities_check' ); ?></a></li>
	<li><a href='https://docs.oracle.com/cd/E19957-01/mysql-refman-5.4/functions.html#spatial-extensions' target='_blank'><?php esc_html_e( 'Spatial function reference for MySQL 5.4','wp_spatial_capabilities_check' ); ?></a></li>
		<li><a href='https://dev.mysql.com/doc/refman/5.5/en/spatial-function-reference.html' target='_blank'><?php esc_html_e( 'Spatial function reference for MySQL 5.5', 'wp_spatial_capabilities_check' ); ?></a></li>
		<li><a href='https://dev.mysql.com/doc/refman/5.6/en/spatial-function-reference.html' target='_blank'><?php esc_html_e( 'Spatial function reference for MySQL 5.6', 'wp_spatial_capabilities_check' ); ?></a></li>
		<li><a href='https://dev.mysql.com/doc/refman/5.7/en/spatial-function-reference.html' target='_blank'><?php esc_html_e( 'Spatial function reference for MySQL 5.7', 'wp_spatial_capabilities_check' ); ?></a></li>
		<li><a href='https://mariadb.com/kb/en/mariadb/gis-functionality/' target='_blank'><?php esc_html_e( 'Spatial function reference for MariaDB', 'wp_spatial_capabilities_check' ); ?></a></li>
	</ul>
</div>
<div class="rightblock">
<h3>Current Capabilities</h3>
<p>
<?php
printf( esc_html__( 'Your database version is %1$s.','wp_spatial_capabilities_check' ), '<strong>' .  esc_html( $version_info ) . '</strong>' );
?>
</p>
<p>
<?php
esc_html_e( 'The following table was created by querying your current database connection.','wp_spatial_capabilities_check' );
?>
</p>
<?php

if ( isset( $capabilites_table ) ) {
	print esc_html( $capabilites_table );
} else {
	print esc_html( '<p>' ) . esc_html__( 'The capabilities table could not be generated.','wp_spatial_capabilities_check' ) . esc_html( '</p>' );
}
?>
</div>
</div>
