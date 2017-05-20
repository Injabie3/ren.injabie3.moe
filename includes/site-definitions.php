<?php
#Below is a list of definitions for the site to make life easier.

#The server path to the root of the site. All definitions below are relative to this path:
$sitedef_root = __DIR__."/..";

#The location of the database connection file.
$sitedef_dbconnect = $sitedef_root."/includes/config/dbconfig.php";

#The location of the Bootstrap core, relative to the site root
$sitedef_bootstrap = "/vendor/twbs/bootstrap";

#The location of the file to include for the Bootstrap core in the head.
$sitedef_bootstrap_head = $sitedef_root."/includes/bootstrap-head.php";

#The location of the file to include for the Bootstrap core for the end of the page.
$sitedef_bootstrap_endjs = $sitedef_root."/includes/bootstrap-endjs.php";

#Location of the global nav bar.
$sitedef_globalnav = $sitedef_root."/includes/navbar.php";

#Location of the global footer.
$sitedef_footer = $sitedef_root."/includes/footer.php";

#Include file for Discord API credentials
require_once("config/discordapi.php");

$sitedef_metaAuthor = "Ren Bot";
$sitedef_metaDescriptionPrefix = "Ren";
$sitedef_titlePrefix = $sitedef_metaDescriptionPrefix;

#Functions for sorting arrays using user defined functions.
$sitedef_arrayCompareFunctions = $sitedef_root."/includes/functions.php";

?>