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
    <title><?php echo $sitedef_titlePrefix; ?> - Games</title>
	<meta name="description" content="<?php echo $sitedef_metaDescriptionPrefix; ?> - Games: This page shows the games/activities that members of the SFU Anime Club Discord are engaged in.">
    <meta name="author" content="<?php echo $sitedef_metaAuthor; ?>">

    <meta property="og:title" content="<?php echo $sitedef_titlePrefix; ?> - Games">
	<meta property="og:description" content="This page shows the games/activities that members of the SFU Anime Club Discord are engaged in.">
    
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
            $luiJSON = json_decode(file_get_contents("games-2016fall.json"), true);
            $luiJSON = $luiJSON[$sitedef_discordServerID]['GAMES'];
            $mainTitle = "Fall 2016";
            $fileTimestamp = date ("Y-m-d H:i:s", filemtime("games-2016fall.json"));
        }
        elseif ($_GET["sem"] == "2017spring")
		# 2017 Spring semester
        {
            #Data
            $luiJSON = json_decode(file_get_contents("games-2017spring.json"), true);
            $luiJSON = $luiJSON[$sitedef_discordServerID]['GAMES'];
            $mainTitle = "Spring 2017";
            $fileTimestamp = date ("Y-m-d H:i:s", filemtime("games-2017spring.json"));
        }
        elseif ($_GET["sem"] == "2017summer")
		# 2017 Summer semester
        {
            #Data
            $luiJSON = json_decode(file_get_contents("games-2017summer.json"), true);
            $luiJSON = $luiJSON[$sitedef_discordServerID]['GAMES'];
            $mainTitle = "Summer 2017";
            $fileTimestamp = date ("Y-m-d H:i:s", filemtime("games-2017summer.json"));
        }
		elseif ($_GET["sem"] == "2017fall")
		# 2017 Fall semester
        {
            #Data
            $luiJSON = json_decode(file_get_contents("games-2017fall.json"), true);
            $luiJSON = $luiJSON[$sitedef_discordServerID]['GAMES'];
            $mainTitle = "Fall 2017";
            $fileTimestamp = date ("Y-m-d H:i:s", filemtime("games-2017fall.json"));
        }
		elseif ($_GET["sem"] == "2018spring")
		# 2018 Spring semester
        {
            #Data
            $luiJSON = json_decode(file_get_contents("games-2018spring.json"), true);
            $luiJSON = $luiJSON[$sitedef_discordServerID]['GAMES'];
            $mainTitle = "Spring 2018";
            $fileTimestamp = date ("Y-m-d H:i:s", filemtime("games-2018spring.json"));
        }
		elseif ($_GET["sem"] == "2018summer")
		# 2018 Summer semester
        {
            #Data
            $luiJSON = json_decode(file_get_contents("games-2018summer.json"), true);
            $luiJSON = $luiJSON[$sitedef_discordServerID]['GAMES'];
            $mainTitle = "Summer 2018";
            $fileTimestamp = date ("Y-m-d H:i:s", filemtime("games-2018summer.json"));
        }
		elseif ($_GET["sem"] == "2018fall")
		# 2018 Fall semester
        {
            #Data
            $luiJSON = json_decode(file_get_contents("games-2018fall.json"), true);
            $luiJSON = $luiJSON[$sitedef_discordServerID]['GAMES'];
            $mainTitle = "Fall 2018";
            $fileTimestamp = date ("Y-m-d H:i:s", filemtime("games-2018fall.json"));
        }
        else
		# Current semester
        {
            #Data
            $luiJSON = json_decode(file_get_contents("/home/ren/github/Ren/data/games/games.json"), true);
            $luiJSON = $luiJSON[$sitedef_discordServerID]['GAMES'];
            $mainTitle = "Spring 2019";
            $fileTimestamp = date ("Y-m-d H:i:s", filemtime("/home/ren/github/Ren/data/games/games.json"));
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
                	This page displays number of times that each of the below games (activities) were "played" by members of the SFU Anime Club Discord.<br>
					Ren last updated this list on <strong><?php echo $fileTimestamp; ?> PST</strong>.
                </p>
            </div> <!-- /renbox -->
	        <div class="renbox">
            	<h1>Game Rankings - <?php echo $mainTitle; ?></h1>
                <p>
                	<div class="table table-responsive container">
                        <table class="table table-condensed table-hover table-striped">
                            <thead>
                                <td><strong>Ranking</strong></td>
                                <td><strong>Game/Activity Name</strong></td>
                                <td><strong>Times Played</strong></td>
                            </thead>
                            <tbody>
                            <?php
								$ranking = 1;
								#var_dump($luiJSON['222841664585072641']); //For debugging purposes
								usort($luiJSON,'sortcmp_gamecount'); //Sort by game count from largest to smallest
								#var_dump($luiJSON[$serverID]);
								foreach ( $luiJSON as $gameName => $gameValues )
								{
							?>
                            	<tr>
                                	<td>
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
                                    <td><strong>Playing </strong><?php echo $gameValues['GAME']; ?>
                                    </td>
                                    <td><?php echo $gameValues['PLAYED']; ?></td>
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
