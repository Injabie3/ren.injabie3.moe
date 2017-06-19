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
    <title><?php echo $sitedef_titlePrefix; ?> - To Do List</title>
	<meta name="description" content="<?php echo $sitedef_metaDescriptionPrefix; ?> - To Do List.  This page provides a list of things that will be done on Ren bot.">
    <meta name="author" content="<?php echo $sitedef_metaAuthor; ?>">
    
    <meta property="og:title" content="<?php echo $sitedef_titlePrefix; ?> - To Do List">
	<meta property="og:description" content="This page provides a list of things that will be done on Ren bot.">
    
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
            	<h1>To Do</h1>
                <p>
                	Below is a list of things that will be done on Ren bot. Feel free to go to <kbd>#feedback</kbd> on the server if you identify anything else that should be addressed about Ren bot, and mention @sedruk and/or @Injabie3. If you want to help us out directly, please do message us and check out the forked GitHub repository above! We would love to involve others in making Ren awesome for the SFU Anime Club!
	                <div class="table table-responsive container">
                        <table class="table table-condensed table-hover table-striped">
                            <thead>
                            	<td><strong>Status</strong></td>
                                <td><strong>To Do List</strong></td>
                            </thead>
                            <tbody>
								<tr>
								  <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete</td>
								  <td>Add 2FA to server management</td>
							    </tr>
								<tr>
								  <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete</td>
								  <td>Add starboard.</td>
							    </tr>
                            	<tr>
                            	  <td><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Planned</td>
                            	  <td>Identify cause(s) of Ren crashes.</td>
                          	    </tr>
                            	<tr>
                            	  <td><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Planned </td>
                            	  <td><code>renplaylist</code>: Improve the playlist creation page. </td>
                               	</tr>
								<tr>
								  <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete </td>
								  <td> Server Leave: Add logging capabilities. </td>
                               	</tr>
								<tr>
								  <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete </td>
								  <td><code>renstreams</code>: Auto-removing posts from #osu<br>
								    <code>renstreams</code>: Adding game titles.<br>
								    Update streams.</td>
							    </tr>
								<tr>
                            	  <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete</td>
                            	  <td>Add bot account to VM. </td>
                               	</tr>
								<tr>
                                	<td>
                                    	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete</td>
                                    <td>
										Add a branch to Red-DiscordBot fork, and push Ren production changes to GitHub.
									</td>
                                </tr>
								<tr>
                                	<td>
                                    	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete
									</td>
                                    <td>
										<code>rentag</code>: Add Rapptz's tag command to Ren.
									</td>
                                </tr>
                            	<tr>
                                	<td>
                                    	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete
									</td>
                                    <td>
										Server Welcome: Add message to display on new user arrival.
									</td>
                                </tr>
                            	<tr>
                                	<td>
                                    	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete
									</td>
                                    <td>
                                    	<code>renrss</code>: Parse and remove HTML from summaries.
									</td>
                                </tr>
                            	<tr>
                                	<td>
                                    	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete
									</td>
                                    <td>
										Autorestart Ren on crash.
									</td>
                                </tr>
                            	<tr>
                                	<td>
                                    	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete
									</td>
                                    <td>
                                    	<code>renrss</code>: Add support for arbitrary amount of feeds.
									</td>
                                </tr>
                            	<tr>
                                	<td>
                                    	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete
									</td>
                                    <td>
                                    	<code>renrss</code>: Add image to RSS embed.
									</td>
                                </tr>
								<tr>
                                	<td>
                                    	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete
                                    </td>
                                    <td>
                                    	<code>renrss</code>: Write a RSS module to fetch anime/manga industry news.
									</td>
                                </tr>
                            	<tr>
                                	<td>
                                    	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete
                                    </td>
                                    <td>
                                    	<code>rencatgirl</code>: Write a custom cog to embed pictures of catgirls in <kbd>#botspam</kbd>, similar to Yuki-chan.
									</td>
                                </tr>
                            	<tr>
                                	<td>
                                    	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete
                                    </td>
                                    <td>
                                    	<code>renleaderboard</code>: Fix the list of usernames via script.
									</td>
                                </tr>
                            	<tr>
                                	<td>
                                    	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete
									</td>
                                    <td>
                                    	Launch Ayumi as a Listen.moe replacement.
									</td>
                                </tr>
                            	<tr>
                                	<td>
                                    	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Patched
                                    </td>
                                    <td>
                                    	<code>renduel</code>: Fix the list of usernames via script.
									</td>
                                </tr>
                            	<tr>
                                	<td>
                                    	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete
									</td>
                                    <td>
                                    	Add user avatars to users and leaderboard pages.
									</td>
                                </tr>
                            	<tr>
                                	<td>
                                    	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete
									</td>
                                    <td>
                                    	<code>renduels</code>: Change online listings to use updated nicknames/usernames instead of ones set out by Ren bot.
									</td>
                                </tr>
                            	<tr>
                                	<td>
                                    	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete
									</td>
                                    <td>
                                    	<code>renleaderboard</code>: Change online listings to use updated nicknames/usernames instead of ones set out by Ren bot.
									</td>
                                </tr>
                            	<tr>
                                	<td>
                                    	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete
									</td>
                                    <td>
                                    	Users: Provide full listing of SFU Anime Club Discord members online.
									</td>
                                </tr>
                            	<tr>
                                	<td>
                                    	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete
									</td>
                                    <td>
                                    	<code>renduels</code>: Provide full listing of duel statistics collected by Ren bot online.
									</td>
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
