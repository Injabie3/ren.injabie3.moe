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
    <title><?php echo $sitedef_titlePrefix; ?> - Home</title>
	<meta name="description" content="<?php echo $sitedef_metaDescriptionPrefix; ?> - Home: The homepage of Ren, providing useful information about the SFU Anime Club Discord server.">
    <meta name="author" content="<?php echo $sitedef_metaAuthor; ?>">
    
    <meta property="og:title" content="<?php echo $sitedef_titlePrefix; ?> - Home">
	<meta property="og:description" content="The homepage of Ren, providing useful information and statistics about the SFU Anime Club Discord server.">
    <script src="test.js" type="text/javascript"></script>
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
            	<h1>SFU Anime Club - Ren on Discord</h1>
                <p>Welcome to the page for Ren on Discord! Ren is an instance of Red-DiscordBot, which was created by <a href="https://github.com/Twentysix26/Red-DiscordBot">Twentysix</a>.  Ren bot is maintained by <a href="https://github.com/KamiCreed">@KamiCreed</a>, <a href="https://github.com/zapsel">@LeSpaz</a>, and <a href="https://injabie3.moe/">@Injabie3</a>.  This website serves as an extension to Ren bot, providing more information on the statistics collected by Ren, as well as general Discord server information.</p>
                <p>Ren Bot (Core) goes down every Friday at 4:00am Pacific Time for backup, which lasts approximately 10-20 minutes.</p>
                <p>If you want to add features to Ren, please check out the forked GitHub repository above!</p>
            </div>
        </div> <!-- End col-sm-12 -->
	</div> <!-- End row -->
    <div class="row">
        <div class="col-sm-4">
        	<div class="renbox">
            	<h2>Ren (Core)</h2>
                <p>
                <img src="/images/ren_v2.png" class="img-rounded" height=70 width=70 />              
				<?php
                    	$output = (int)shell_exec('ps -C python3.5 -o etimes=');
						$days = (int)($output/3600/24);
						$hours = (int)($output/3600)-($days*24);
						$minutes = (int)(($output/60)-($hours+24*$days)*60);
						$seconds = (int)($output-($minutes+60*$hours+1440*$days)*60);
						
						if($output == 0)
						{
							echo "Down :(";
						}
						else
						{
	                    	echo "Up for $days day(s) ".
								str_pad($hours, 2, "0", STR_PAD_LEFT).":".
								str_pad($minutes, 2, "0", STR_PAD_LEFT).":".
								str_pad($seconds, 2, "0", STR_PAD_LEFT);
						}
				?>
                </p>
            </div> <!-- /renbox -->
		</div> <!-- End col-sm-4 -->
        <div class="col-sm-4">
            <div class="renbox" onclick="getAWSRenUptime()">
            	<h2>Ren (Audio/RSS)</h2>
                	<p>
                    	<img onload="getAWSRenUptime()" src="/images/ren_v2.png" class="img-rounded" height=70 width=70 />
                    	<span id="renuptime">Checking...</span>
                    </p>
            </div> <!-- /renbox -->
        </div> <!-- End col-sm-4 -->
        <div class="col-sm-4">
            <div class="ayubox" onclick="getAWSAyumiUptime()">
            	<h2>Ayumi (Listen.moe)</h2>
                <p>
                	<img onload="getAWSAyumiUptime()" src="/images/ayumi_v2.png" class="img-rounded" height=70 width=70 />
              		<span id="ayumiuptime">Checking...</span>
                </p>
            </div> <!-- /renbox -->
        </div> <!-- End col-sm-4 -->
	</div>
    <div class="row">
    	<div class="col-sm-6">
			<!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="7167/"></script> <!-- end feedwind code -->
        </div> <!-- /col-sm-6 -->
        <div class="col-sm-6">
		<a class="twitter-timeline" data-height="650" data-theme="dark" data-link-color="#E81C4F" href="https://twitter.com/SfuAnime">Tweets by SFU Anime</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	</div><!-- /col-sm-6 -->
    </div> <!-- /row -->
    <div class="row">
        <div class="col-md-12">
                <div class="renbox">
                <h1>SAD Year End Video</h1>
                <p><iframe width="100%" height="425" src="https://www.youtube.com/embed/yYCuxO4tWyc" frameborder="0" allowfullscreen></iframe></p>
            </div>
        </div> <!-- End col-md-12 -->
    </div> <!-- End row -->

    </div> <!-- /container -->

	<?php
		#Insert footer here
		require_once($sitedef_footer);
		#Include the Bootstrap ending javascript to speed up loading.
		require_once($sitedef_bootstrap_endjs);
	?>
  </body>
</html>
