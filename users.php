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
    <title><?php echo $sitedef_titlePrefix; ?> - User Information</title>
	<meta name="description" content="<?php echo $sitedef_metaDescriptionPrefix; ?> - This page shows all users on the SFU Anime Club Discord server, including their nicknames (if any), and when they joined the server.">
    <meta name="author" content="<?php echo $sitedef_metaAuthor; ?>">
    
    <meta property="og:title" content="<?php echo $sitedef_titlePrefix; ?> - User Information">
	<meta property="og:description" content="This page shows all users on the SFU Anime Club Discord server, including their nicknames (if any), and when they joined the server.">
    
  </head>

  <body>
	<?php
		#Navbar
		require_once($sitedef_globalnav);
		
		#Data
		$userObjects = file_get_contents("/var/www/html/luiscripts/data/fetchusers.txt");
		$userObjects = json_decode($userObjects,true);
		
		#Comparison Functions
		require_once($sitedef_arrayCompareFunctions);
	?>
    <div class="container">
    
	<div class="row">
    	<div class="col-sm-12">
        	<div class="renbox">
            	<h2>Info</h2>
                <p>
                	This page displays the current number of users connected to the SFU Anime Club Discord.<br>
					The list of users was last cached on <strong><?php echo date("Y-m-d H:i:s", filemtime("/var/www/html/luiscripts/data/fetchusers.txt")); ?> PST</strong>, and is updated every 5 minutes.<br>
                	There are <strong><?php echo sizeof($userObjects); ?></strong> users connected to SFU Anime Club's Discord server.<br>
                    <?php
						if(isset($_GET["details"]) && $_GET["details"] == 1)
						{
							echo "<a href=\"?\">List users without extra details</a>";
						}
						else
						{
							echo "<a href=\"?details=1\">List users with details</a>";
						}
					?>
                </p>
            </div> <!-- /renbox -->
	        <div class="renbox">
            	<h1>Users</h1>
                <p>

                	<div class="table table-responsive container">
                        <table class="table table-condensed table-hover table-striped">
                            <thead>
                                <?php
                                	if(isset($_GET["details"]) && $_GET["details"] == 1)
									{
								?>
                                <td><strong>ID</strong></td>
                                <?php
									} //end if
								?>
                                <td></td>
                                <td><strong>Username<?php if(isset($_GET["details"]) && $_GET["details"] == 1) echo "/Discriminator"; ?></strong></td>
                                <td><strong>Nickname</strong></td>
                                <td><strong>Date Joined</strong></td>
                            </thead>
                            <tbody>
                            <?php
								//var_dump($luiJSON[$sitedef_discordServerID]);
								//var_dump($test);
								uasort($userObjects,'sortcmp_userjoin'); //Sort by earliest to latest
								//var_dump($users);
								foreach ( $userObjects as $userID => $userDetails )
								{
							?>
                            	<tr>
                                	<?php
										if(isset($_GET["details"]) && $_GET["details"] == 1)
										{
									?>
                                    <td style="vertical-align: middle">
                                    	<code>
										<?php
											#User ID column.
											echo $userDetails["user"]["id"];
										?>
                                        </code>
									</td>
									<?php
										} //end if
                                    ?>
                                    <td>
                                    <?php
										if ($userDetails["user"]["avatar"] == NULL) //User has not set an avatar.
										{
									?>
	                                    <img src="/images/default-avatar.png" height="75" width="75" class="img-rounded" />
                                    <?php
										}
										else
										{
									?>
										<img src="https://cdn.discordapp.com/avatars/<?php echo $userID; ?>/<?php echo $userDetails["user"]["avatar"]; ?>.png" height="75" width="75" class="img-rounded" />
                                    <?php
										}
									?>
									</td>
                                    <td style="vertical-align: middle">
										<?php 
											#Username and discriminator column
											echo $userDetails["user"]["username"];
											if(isset($_GET["details"]) && $_GET["details"] == 1)
											{
												echo "#".$userDetails["user"]["discriminator"];
											} //end if
											if(array_key_exists("bot",$userDetails["user"]) && $userDetails["user"]["bot"] == true)
												echo " <code>Bot</code>";											
											?>
                                    </td>
									<td style="vertical-align: middle">
										<?php
											#Nickname column, if applicable
											if(array_key_exists("nick",$userDetails))
	                                        	echo $userDetails["nick"];
											//echo get_username($duelUserID,"MjQ5ODkxMjkyMjc0NzUzNTM5.CxM47Q.7wj_g65XjJYENCc95kFjYb1UBCg");
										?>
                                    </td>
                                   
                                    <td style="vertical-align: middle">
										<?php
                                            #Date joined column
                                            $dateJoined = new DateTime($userDetails["joined_at"]);
                                            $dateJoined->setTimezone(new DateTimeZone('PST')); 
                                            echo $dateJoined->format("Y-m-d H:i:s")." PST";
                                        ?>
                                    </td>
                                </tr>
                            <?php
								}
						#var_dump($luiJSON[$serverID]); //For debugging purposes
					?>
                                
                            </tbody>
                        </table>
					</div> <!-- /div table -->
				</p>
            </div> <!-- /renbox -->
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
