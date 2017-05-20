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
    <title><?php echo $sitedef_titlePrefix; ?> - Local Tracks</title>
	<meta name="description" content="<?php echo $sitedef_metaDescriptionPrefix; ?> - Local Tracks: This page shows the locally cached music available to stream on a voice channel in the SFU Anime Club Discord server.">
    <meta name="author" content="<?php echo $sitedef_metaAuthor; ?>">
    
    <meta property="og:title" content="<?php echo $sitedef_titlePrefix; ?> - Local Tracks">
	<meta property="og:description" content="<?php echo $sitedef_metaDescriptionPrefix; ?> - Local Tracks: This page shows the locally cached music available to stream on a voice channel in the SFU Anime Club Discord server.">
    
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
            	<h2>Info</h2>
                <p>Below is a local server listing of tracks available with the <code>renlocal</code> command.  Listing will be improved in the near future.</p>
            </div>
        	<div class="panel-group" id="localtracks-allplaylists">
                <div class="renbox">
                    <h2 class="panel-title">
                        <a data-toggle="collapse" href="#localtracks-playlists">Available Local Playlists</a>
                    </h2>
                    <div class="panel-collapse collapse" id="localtracks-playlists">
                    <p class="panel-body">
                    <?php
                    	$output = shell_exec('ls -L "/var/localtracks/"');
	                    echo "<pre>$output</pre>";
                    ?>
                    </p>
                	</div>
				</div>
            </div> <!-- /panel-group -->
        	<div class="panel-group" id="localtracks-alltracks">
                <div class="renbox">
                    <h2 class="panel-title">
                        <a data-toggle="collapse" href="#localtracks-tracks">Available Tracks in Playlists</a>
                    </h2>
                    <div class="panel-collapse collapse" id="localtracks-tracks">
                    <p class="panel-body">
                    <?php
                        $output = shell_exec('ls -R -L "/var/localtracks/" --ignore="*.jpg" --ignore="*.png" --ignore="*.htm" --ignore="*.txt" --ignore="*.url" | sed -e \'s/\.mp3$//\'');
                        echo "<pre>$output</pre>";
                    ?>
                    </p>
                	</div>
				</div>
            </div> <!-- /panel-group -->
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
