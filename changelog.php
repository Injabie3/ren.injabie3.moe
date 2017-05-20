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
                            	<tr>
                                	<td>v1.0.33</td>
                                    <td>2017-05-20</td>
                                    <td>
                                    	Server management is now 2FA secured.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.32</td>
                                    <td>2017-05-08</td>
                                    <td>
                                    	<kbd>renstar</kbd> is live.<br>
                                        Leaderboards were archived and reset.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.31</td>
                                    <td>2017-04-27</td>
                                    <td>
                                    	Server Welcome: Added logging.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.30</td>
                                    <td>2017-04-26</td>
                                    <td>
                                    	Added navbar links to GitHub.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.29</td>
                                    <td>2017-04-24</td>
                                    <td>
                                    	Added GitHub branch: prod.<br>
                                        Added Travis CI checks.<br>
                                        Updated Ren to latest Red-DiscordBot version.<br>
                                        Migrated Ren to different user account.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.28</td>
                                    <td>2017-04-15</td>
                                    <td>
                                    	Server Welcome: Ren now sends welcome DMs to new members.<br>
                                        Ren's avatar updated.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.27</td>
                                    <td>2017-04-11</td>
                                    <td>
                                    	<kbd>rencatgirl</kbd> updated with add command. Still WIP.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.26</td>
                                    <td>2017-03-30</td>
                                    <td>
                                    	Ren's RSS module now parses and removes HTML from summaries.										
									</td>
                                </tr>
                                <tr>
                                	<td>v1.0.25</td>
                                    <td>2017-03-09</td>
                                    <td>
                                    	Ren's RSS module moved to AWS.<br>
										Ren's AWS audio module linked with in-house music directories.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.24</td>
                                    <td>2017-03-07</td>
                                    <td>
                                    	Ren's audio module moved to AWS.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.23</td>
                                    <td>2017-02-20</td>
                                    <td>
                                    	<kbd>renkanna</kbd> is live. Based off of <kbd>rencatgirl</kbd>.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.22</td>
                                    <td>2017-02-19</td>
                                    <td>
                                    	<kbd>renrss</kbd> now has image embeds.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.21</td>
                                    <td>2017-02-17</td>
                                    <td>
                                    	<kbd>renrss</kbd> is in testing.<br>
                                        Bot requirements updated.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.20</td>
                                    <td>2017-02-16</td>
                                    <td>
                                    	<kbd>renleaderboard</kbd> is now fetching updated usernames/nicknames.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.19</td>
                                    <td>2017-02-11</td>
                                    <td>
                                    	<kbd>rencatgirl</kbd> is now live.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.18</td>
                                    <td>2017-02-08</td>
                                    <td>
                                    	Requested, and was granted permission to have Ayumi bot added to SAD. Ayumi lives on AWS in the Canada (Central) region.  Ayumi is an instance of the Listen.moe bot, modified to allow everyone to add/remove it from a voice channel.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.17</td>
                                    <td>2017-02-06</td>
                                    <td>
                                    	sedruk: Added more drinks to <kbd>renbar</kbd>.<br>
                                        Injabie3: Modified <kbd>renbank transfer</kbd> to accept parameters <code>sum user</code> instead of <code>user sum</code> to match <kbd>renbar</kbd>
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.16</td>
                                    <td>2017-01-26</td>
                                    <td>
                                    	Altered display of results after a duel in <kbd>renduel</kbd>.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.15</td>
                                    <td>2017-01-25</td>
                                    <td>
                                    	Added SFU Anime Club Facebook feed to homepage.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.14</td>
                                    <td>2017-01-23</td>
                                    <td>
                                    	Modified startup scripts to start Ren in auto-restart mode.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.13</td>
                                    <td>2017-01-22</td>
                                    <td>
                                    	Added user avatars to user, economy, and duel pages.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.12</td>
                                    <td>2017-01-19</td>
                                    <td>
                                    	Fixed empty row displaying on duels statistics page.<br>
                                        Bot requirements updated.<br>
                                        Uptime page changed to <a href="http://uptime.injabie3.moe/">uptime.injabie3.moe</a>
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.11</td>
                                    <td>2017-01-14</td>
                                    <td>
                                    	Added "Ren" as a prefix for commands, for mobile friendliness.  Now, "ren" and "Ren" are prefixes.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.10</td>
                                    <td>2017-01-13</td>
                                    <td>
                                    	Updated to latest version of Red-DiscordBot using <kbd>git pull</kbd>.  Adjusted economy module to accommodate custom modifications. Adjusted owner module to fix <kbd>reninfo</kbd> and <kbd>renversion</kbd> error exceptions.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.9</td>
                                    <td>2017-01-04</td>
                                    <td>
                                    	Leaderboards were archived and reset.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.8</td>
                                    <td>2016-12-29</td>
                                    <td>
                                    	Modified user info to show/hide details.<br>
                                        User info updates every 2 minutes instead of every 4 hours, after verifying Discord API rate limits.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.7</td>
                                    <td>2016-12-19</td>
                                    <td>
                                    	Economy now fetches updated nicknames and usernames (nicknames take precedence), and displays them instead of the ones that Ren shows.<br>
										Added user info.<br>
                                        Modified navigation bar.<br>
                                        Added duels info.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.6</td>
                                    <td>2016-11-25</td>
                                    <td>
                                    	CSS updated<br>
                                        AyumiBot in development by @sedruk.<br>
										Server successfully backed up at 04:10.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.5</td>
                                    <td>2016-11-18</td>
                                    <td>
                                    	Using economy info page, added games page.<br>
                                        Modified navigation bar.<br>
                                        Server successfully backed up at 04:10.
									</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.4</td>
                                    <td>2016-11-17</td>
                                    <td>Added playlist viewer.<br>Added test bot uptime.</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.3</td>
                                    <td>2016-11-16</td>
                                    <td>Added economy info.</td>
                                </tr>
                            	<tr>
                                	<td>v1.0.2</td>
                                    <td>2016-11-15</td>
                                    <td>Added uptime on site, plus additional info.</td>
                                </tr>
                                <tr>
                                    <td>v1.0.1</td>
                                    <td>2016-11-14</td>
                                    <td>Added Local Track listing</td>
                                </tr>
                                <tr>
                                	<td>v1.0.0</td>
                                    <td>2016-11-13</td>
                                    <td>Initial version of site, bot migrated to in-house hosting.</td>
                                </tr>
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
