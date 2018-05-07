<?php 
	#Include site definitions
	require_once('../includes/site-definitions.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   	<?php 
		#Include the Bootstrap core. MUST COME FIRST IN HEAD!
		require_once($sitedef_bootstrap_head);
	?>
    <title><?php echo $sitedef_titlePrefix; ?> - Duels Leaderboard</title>
	<meta name="description" content="<?php echo $sitedef_metaDescriptionPrefix; ?> - Duels: This page shows the leaderboard for the renduel command on the SFU Anime Discord.">
    <meta name="author" content="<?php echo $sitedef_metaAuthor; ?>">
    
    <meta property="og:title" content="<?php echo $sitedef_titlePrefix; ?> - Duels Leaderboard">
	<meta property="og:description" content="This page shows the leaderboard for the renduel command on the SFU Anime Discord server.">
    
  </head>

  <body>
	<?php
		#Navbar
		require_once($sitedef_globalnav);
		
        #Load the correct data.
        if ($_GET["sem"] == "2016fall")
        # 2016 Fall semester
        {
            #Data
            $luiJSON = json_decode(file_get_contents("duels-2016fall.json"), true);
            //Get the actual username/nicknames of people, and display those instead.
            $userObjects = file_get_contents("../data/fetchusers.txt");
            $userObjects = json_decode($userObjects,true);
            $mainTitle = "Fall 2016";
        }
		elseif ($_GET["sem"] == "2017spring")
        # 2017 Spring semester
        {
            #Data
            $luiJSON = json_decode(file_get_contents("duels-2017spring.json"), true);
            //Get the actual username/nicknames of people, and display those instead.
            $userObjects = file_get_contents("../data/fetchusers.txt");
            $userObjects = json_decode($userObjects,true);
            $mainTitle = "Spring 2017";
        }
        elseif ($_GET["sem"] == "2017summer")
        # 2017 Summer semester
        {
            #Data
            $luiJSON = json_decode(file_get_contents("duels-2017summer.json"), true);
            //Get the actual username/nicknames of people, and display those instead.
            $userObjects = file_get_contents("../data/fetchusers.txt");
            $userObjects = json_decode($userObjects,true);
            $mainTitle = "Summer 2017";
        }
		elseif ($_GET["sem"] == "2017fall")
        # 2017 Fall semester
        {
            #Data
            $luiJSON = json_decode(file_get_contents("duels-2017fall.json"), true);
            //Get the actual username/nicknames of people, and display those instead.
            $userObjects = file_get_contents("../data/fetchusers.txt");
            $userObjects = json_decode($userObjects,true);
            $mainTitle = "Fall 2017";
        }
		elseif ($_GET["sem"] == "2018spring")
        # 2018 Spring semester
        {
            #Data
            $luiJSON = json_decode(file_get_contents("duels-2018spring.json"), true);
            //Get the actual username/nicknames of people, and display those instead.
            $userObjects = file_get_contents("../data/fetchusers.txt");
            $userObjects = json_decode($userObjects,true);
            $mainTitle = "Spring 2018";
        }
        else
        # Current semester
        {
            #Data
            $luiJSON = json_decode(file_get_contents("/home/ren/github/Ren/data/duel/duelist.json"), true);
            //Get the actual username/nicknames of people, and display those instead.
            $userObjects = file_get_contents("../data/fetchusers.txt");
            $userObjects = json_decode($userObjects,true);
            $mainTitle = "Summer 2018";
        }
		
		#Comparison Functions
		require_once($sitedef_arrayCompareFunctions);
	?>
    <div class="container">
    
	<div class="row">
    	<div class="col-sm-12">
        	<div class="renbox">
            	<h2>Info</h2>
                <p>
                	This page displays the leaderboard for <code>renduel</code>.
                </p>
            </div> <!-- /renbox -->
	        <div class="renbox">
            	<h1>Duels Ranking - <?php echo $mainTitle; ?></h1>
                <p>
                	<div class="table table-responsive container">
                        <table class="table table-condensed table-hover table-striped">
                            <thead>
								<td><strong>Ranking</strong></td>
                                <?php #<td><strong>ID</strong></td> ?>
                                <td></td>
                                <td><strong>Nickname</strong></td>
                                <td><strong>Wins</strong></td>
                                <td><strong>Losses</strong></td>
                                <td><strong>Draws</strong></td>
                            </thead>
                            <tbody>
                            <?php
								$ranking = 1;

								//var_dump($luiJSON[$sitedef_discordServerID]); //For debugging purposes
								uasort($luiJSON[$sitedef_discordServerID],'sortcmp_duels'); //Sort by balance from largest to smallest
								//var_dump($luiJSON[$sitedef_discordServerID]);
								foreach ( $luiJSON[$sitedef_discordServerID] as $duelsUserID => $duelsUserDetails)
								{
									if( $duelsUserID == "protected") //Ignore the protected list itself.
										continue;
							?>
                            	<tr>
                                	<td style="vertical-align: middle"><?php echo $ranking; ?></td>
                                    <?php /*<td><code><?php echo $userObjects[$duelsUserID]["user"]["id"] ?></code></td>*/ ?>
                                    <td style="vertical-align: middle">
                                    <?php
										if ($userObjects[$duelsUserID]["user"]["avatar"] != NULL && array_key_exists("username",$userObjects[$duelsUserID]["user"]))
										{
									?>
                                    	<img src="https://cdn.discordapp.com/avatars/<?php echo $duelsUserID; ?>/<?php echo $userObjects[$duelsUserID]["user"]["avatar"]; ?>.png" height="75" width="75" class="img-rounded" />
									<?php
										}
										else //Default avatar.
										{
									?>
	                                    <img src="/images/default-avatar.png" height="75" width="75" class="img-rounded" />
                                    <?php
										}
									?>
									</td>
									<td style="vertical-align: middle">
										<?php
											if(array_key_exists("nick",$userObjects[$duelsUserID]) && $userObjects[$duelsUserID]["nick"] != NULL)
											{
	                                        	echo $userObjects[$duelsUserID]["nick"];
											}
											else if(array_key_exists("username",$userObjects[$duelsUserID]["user"]))
											{
												echo $userObjects[$duelsUserID]["user"]["username"];
											}
											else
											{
												echo "<code>Error: This user is no longer on SFU Anime Discord :(</code>";
											}
											
											if(array_key_exists("bot",$userObjects[$duelsUserID]["user"]) && $userObjects[$duelsUserID]["user"]["bot"] == true)
											{
	                                        	echo " <code>Bot</code>";
											}
											//echo get_username($duelUserID,"MjQ5ODkxMjkyMjc0NzUzNTM5.CxM47Q.7wj_g65XjJYENCc95kFjYb1UBCg");
										?></td>
                                    <td style="vertical-align: middle">
                                    	<?php
                                    		echo $duelsUserDetails["wins"];
										?>
                                    </td>
                                    <td style="vertical-align: middle">
									<?php 
										$dateJoined = new DateTime($userDetails["joined_at"]);
										$dateJoined->setTimezone(new DateTimeZone('PST')); 
										//echo $dateJoined->format("Y-m-d H:i:s")." PST";
										echo $duelsUserDetails["losses"];
									?></td>
                                    <td style="vertical-align: middle">
                                    	<?php
											echo $duelsUserDetails["draws"];
										?>
                                    </td>
                                </tr>
                            <?php
								$ranking++;
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
