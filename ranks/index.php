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
    <title><?php echo $sitedef_titlePrefix; ?> - Ranks Leaderboard</title>
	<meta name="description" content="<?php echo $sitedef_metaDescriptionPrefix; ?> - Ranks: This page shows the server ranking leaderboard on the SFU Anime Club Discord, based on chat activity.">
    <meta name="author" content="<?php echo $sitedef_metaAuthor; ?>">
    
    <meta property="og:title" content="<?php echo $sitedef_titlePrefix; ?> - Ranks Leaderboard">
	<meta property="og:description" content="This page shows the server leaderboard on the SFU Anime Club Discord, based on chat activity since September 2017.">
  </head>

  <body>
	<?php
		# Navbar
		require_once($sitedef_globalnav);
        
        # Load the correct data.
        if ($_GET["sem"] == "2016fall")
        # 2016 Fall semester
        {
            # Data
            # Get the actual username/nicknames of people, and display those instead.
            $userObjects = file_get_contents("../data/fetchusers.txt");
            $userObjects = json_decode($userObjects,true);
            $mainTitle = "Fall 2016";
        }
		elseif ($_GET["sem"] == "2017spring")
        # 2017 Spring semester
        {
            # Data
            # Get the actual username/nicknames of people, and display those instead.
            $userObjects = file_get_contents("../data/fetchusers.txt");
            $userObjects = json_decode($userObjects,true);
            $mainTitle = "Spring 2017";
        }
        elseif ($_GET["sem"] == "2017summer")
        # 2017 Summer semester
        {
            # Data
            # Get the actual username/nicknames of people, and display those instead.
            $userObjects = file_get_contents("../data/fetchusers.txt");
            $userObjects = json_decode($userObjects,true);
            $mainTitle = "Summer 2017";
        }
		elseif ($_GET["sem"] == "2017fall")
        # 2017 Fall semester
        {
            # Data
            # Get the actual username/nicknames of people, and display those instead.
            $userObjects = file_get_contents("../data/fetchusers.txt");
            $userObjects = json_decode($userObjects,true);
            $mainTitle = "Fall 2017";
        }
        else
        # Current semester
        {
            # Data
            # Get the actual username/nicknames of people, and display those instead.
            $userObjects = file_get_contents("../data/fetchusers.txt");
            $userObjects = json_decode($userObjects,true);
            $mainTitle = "Spring 2018";
        }
		
		# Comparison Functions
		require_once($sitedef_arrayCompareFunctions);
	?>
    <div class="container">
    
	<div class="row">
    	<div class="col-sm-12">
        	<div class="renbox">
            	<h2>Info</h2>
                <p>
                	This page displays the experience of each member of the SFU Anime Club Discord.  It is based off of chat activity.<br>
                    Levels will be included soon, and data from Mee6 may be imported.<br>
                    To check your rank in the server, type <kbd>renranks check</kbd> in <kbd>#bot-spam</kbd>.<br>
                    To check the leaderboard, type <kbd>renranks leaderboard</kbd> in <kbd>#bot-spam</kbd>.
                </p>
            </div> <!-- /renbox -->
	        <div class="renbox">
            	<h1>Ranks Leaderboard - <?php echo $mainTitle; ?></h1>
                <p>
                	<div class="table table-responsive container textverticalcenter">
                        <table class="table table-condensed table-hover table-striped">
                            <thead>
                                <td><strong>Rank</strong></td>
                                <td><?php # Avatar icon ?></td>
                                <td><strong>Name</strong></td>
                                <td><strong>Experience</strong></td>
                            </thead>
                            <tbody>
                            <?php
                                require_once($sitedef_dbconnect);
                                $results = $sitedef_dbcursor->query("SELECT @rownum := @rownum + 1 as rank, userid, xp FROM renbot.xp cross join (select @rownum := 0) r WHERE guildid = 222841664585072641 order by xp desc;");
                                while($data = $results->fetch_array())
								{
                                $ranking = $data["rank"];
                                $userID = $data["userid"];
                                $xp = $data["xp"];
							?>
                            	<tr>
                                	<td style="vertical-align: middle">
									<?php
                                        echo $ranking; 
									?>
                                    </td>
                                    <td style="vertical-align: middle">
                                    <?php
										if ($userObjects[$userID]["user"]["avatar"] != NULL && array_key_exists("username", $userObjects[$userID]["user"]))
										{
									?>
                                    	<img src="https://cdn.discordapp.com/avatars/<?php echo $userID; ?>/<?php echo $userObjects[$userID]["user"]["avatar"]; ?>.png" height="75" width="75" class="img-rounded" />
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
                                            if (array_key_exists("nick", $userObjects[$userID]))
                                            {
                                                echo $userObjects[$userID]["nick"];
                                            }
                                            else if(array_key_exists("username", $userObjects[$userID]["user"]))
                                            {
                                                echo $userObjects[$userID]["user"]["username"];
                                            }
                                            else
                                            {
                                                echo "<code>Error: This user is no longer on SFU Anime Discord :(</code>";
                                            }

											if(array_key_exists("bot", $userObjects[$userID]["user"]) && $userObjects[$userID]["user"]["bot"] == true)
											{
	                                        	echo " <code>Bot</code>";
											}
                                        ?>
                                    </td>
                                    <td style="vertical-align: middle"><?php echo $xp; ?></td>
                                </tr>
                            <?php
								}
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
