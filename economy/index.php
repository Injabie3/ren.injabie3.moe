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
    <title><?php echo $sitedef_titlePrefix; ?> - Economy (Payday) Leaderboard</title>
	<meta name="description" content="<?php echo $sitedef_metaDescriptionPrefix; ?> - Economy: This page shows the economy leaderboard on the SFU Anime Club Discord for the current semester.">
    <meta name="author" content="<?php echo $sitedef_metaAuthor; ?>">
    
    <meta property="og:title" content="<?php echo $sitedef_titlePrefix; ?> - Economy (Payday) Leaderboard">
	<meta property="og:description" content="This page shows the economy leaderboard on the SFU Anime Club Discord for the current semester.">
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
            $luiJSON = json_decode(file_get_contents("economy-2016fall.json"), true);
            //Get the actual username/nicknames of people, and display those instead.
            $userObjects = file_get_contents("../data/fetchusers.txt");
            $userObjects = json_decode($userObjects,true);
            $mainTitle = "Fall 2016";
        }
		elseif ($_GET["sem"] == "2017spring")
        # 2017 Spring semester
        {
            #Data
            $luiJSON = json_decode(file_get_contents("economy-2017spring.json"), true);
            //Get the actual username/nicknames of people, and display those instead.
            $userObjects = file_get_contents("../data/fetchusers.txt");
            $userObjects = json_decode($userObjects,true);
            $mainTitle = "Spring 2017";
        }
        elseif ($_GET["sem"] == "2017summer")
        # 2017 Summer semester
        {
            #Data
            $luiJSON = json_decode(file_get_contents("economy-2017summer.json"), true);
            //Get the actual username/nicknames of people, and display those instead.
            $userObjects = file_get_contents("../data/fetchusers.txt");
            $userObjects = json_decode($userObjects,true);
            $mainTitle = "Summer 2017";
        }
        else
        # Current semester
        {
            #Data
            $luiJSON = json_decode(file_get_contents("/home/ren/github/Ren/data/economy/bank.json"), true);
            //Get the actual username/nicknames of people, and display those instead.
            $userObjects = file_get_contents("../data/fetchusers.txt");
            $userObjects = json_decode($userObjects,true);
            $mainTitle = "Fall 2017";
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
                	This page displays number of credits for each member of the SFU Anime Club Discord that has a bank account registered on the bot.
                </p>
            </div> <!-- /renbox -->
	        <div class="renbox">
            	<h1>Payday Rankings - <?php echo $mainTitle; ?></h1>
                <p>
                	<div class="table table-responsive container textverticalcenter">
                        <table class="table table-condensed table-hover table-striped">
                            <thead>
                                <td><strong>Ranking</strong></td>
                                <td><?php #Avatar icon ?></td>
                                <td><strong>Name</strong></td>
                                <td><strong>Balance</strong></td>
                            </thead>
                            <tbody>
                            <?php
								$ranking = 1;
								#Sort by balance from largest to smallest, retaining original keys
								uasort($luiJSON[$sitedef_discordServerID],'sortcmp_bankbalance'); 
								foreach ( $luiJSON[$sitedef_discordServerID] as $economyUserID => $economyUserDetails )
								{
							?>
                            	<tr>
                                	<td style="vertical-align: middle">
									<?php
                                    echo $ranking; 
/* 									if ($ranking <= 3)
										{
											$ii = 3;
											while ($ii >= $ranking)
											{
												echo "<span class=\"glyphicon glyphicon-usd\" aria-hidden=\"true\"></span>";
												$ii--;
											}
										} */
									?>
                                    </td>
                                    <td style="vertical-align: middle">
                                    <?php
										if ($userObjects[$economyUserID]["user"]["avatar"] != NULL && array_key_exists("username",$userObjects[$economyUserID]["user"]))
										{
									?>
                                    	<img src="https://cdn.discordapp.com/avatars/<?php echo $economyUserID; ?>/<?php echo $userObjects[$economyUserID]["user"]["avatar"]; ?>.png" height="75" width="75" class="img-rounded" />
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
                                            if (array_key_exists("nick",$userObjects[$economyUserID]))
                                            {
                                                echo $userObjects[$economyUserID]["nick"];
                                            }
                                            else if(array_key_exists("username",$userObjects[$economyUserID]["user"]))
                                            {
                                                echo $userObjects[$economyUserID]["user"]["username"];
                                            }
                                            else
                                            {
                                                echo "<code>Error: This user is no longer on SFU Anime Discord :(</code>";
                                            }

											if(array_key_exists("bot",$userObjects[$economyUserID]["user"]) && $userObjects[$economyUserID]["user"]["bot"] == true)
											{
	                                        	echo " <code>Bot</code>";
											}
                                        ?>
                                    </td>
                                    <td style="vertical-align: middle"><?php echo $economyUserDetails['balance']; ?></td>
                                </tr>
                            <?php
								$ranking++;
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
