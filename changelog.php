<?php 
	#Include site definitions
	require_once('includes/site-definitions.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   	<?php 
		#Include the Bootstrap core. MUST COME FIRST IN HEAD!
		require_once($sitedef_bootstrap_head);
	?>
    <title><?php echo $sitedef_titlePrefix; ?> - Changelog</title>
	<meta name="description" content="<?php echo $sitedef_metaDescriptionPrefix; ?> - Changelog: This page shows the changes that have been made to Ren bot, and this website itself.">
    <meta name="author" content="<?php echo $sitedef_metaAuthor; ?>">

    <meta property="og:title" content="<?php echo $sitedef_titlePrefix; ?> - Changelog">
	<meta property="og:description" content="This page shows the changes that have been made to Ren bot, and this website itself.">
    
  </head>

  <body>
	<?php
		#Navbar
		require_once($sitedef_globalnav);
	?>
    <div class="container">
    
	<div class="row">
    	<div class="col-sm-12">
	        <div class="renbox">
            	<h1>Changelog</h1>
                <p>
	                <div class="table table-responsive container">
                        <table class="table table-condensed table-hover">
                            <thead>
                                <td><strong>Version</strong></td>
                                <td><strong>Modification Date</strong></td>
                                <td><strong>Description</strong></td>
                            </thead>
                            <tbody>
                            <?php
                                require_once($sitedef_dbconnect);
                                $results = $sitedef_dbcursor->query("SELECT * FROM webserver.changelog order by date desc;");
                                while($data = $results->fetch_array())
                                {
                            ?>
                                <tr>
                                    <td><?php echo $data["version"]; ?></td>
                                    <td><?php echo date_format(date_create($data["date"]), "Y-m-d"); ?></td>
                                    <td><?php echo $data["description"]; ?></td>
                                </tr>
                            <?php 
                                }
                            ?>
                            </tbody>
                        </table>
					</div> <!-- /div table -->
				</p>
            </div>
        </div>
    </div> <!-- /row -->
    </div> <!-- /container -->

	<?php
		#Insert footer here
		require_once($sitedef_footer);
		#Include the Bootstrap ending javascript to speed up loading.
		require_once($sitedef_bootstrap_endjs);
	?>
  </body>
</html>
