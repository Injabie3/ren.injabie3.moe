<?php 
	#Include site definitions
	require_once('/var/www/html/site-definitions.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   	<?php 
		#Include the Bootstrap core. MUST COME FIRST IN HEAD!
		require_once($sitedef_bootstrap_head);
		require_once($sitedef_root.'anime_nowplaying.php');
	?>
    <title>Ren - Payday Rankings</title>
	<meta name="description" content="Ren - Economy Leaderboard">
    <meta name="author" content="Injabie3">
    
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
                <p>
                	This page displays number of credits for each member of the SFU Anime Club Discord that has a bank account registered on the bot.
                </p>
            </div> <!-- /renbox -->
	        <div class="renbox">
            	<h1>Payday Rankings</h1>
                <p>
                	<div class="table table-responsive container">
                        <table class="table table-condensed table-hover">
                            <thead>
                                <td><strong>Ranking</strong></td>
                                <td><strong>Name</strong></td>
                                <td><strong>Balance</strong></td>
                            </thead>
                            <tbody>
                            <?php
								$serverID = 222841664585072641;
								$ranking = 1;
								function cmp($a, $b) //Used to sort from largest balance to smallest balance.
								{
									if ($a['balance'] == $b['balance']) {
										return 0;
									}
									return ($a['balance'] > $b['balance']) ? -1 : 1;
								}
								$luiJSON = json_decode(file_get_contents("/home/ashton/Red-DiscordBot/data/economy/bank.json"), true);
								#var_dump($luiJSON['222841664585072641']); //For debugging purposes
								uasort($luiJSON[$serverID],'cmp'); //Sort by balance from largest to smallest
								#var_dump($luiJSON[$serverID]);
								
								$userObjects = file_get_contents("/var/www/html/luiscripts/data/fetchusers.txt");
								$userObjects = json_decode($userObjects,true);
								foreach ( $luiJSON[$serverID] as $economyUserID => $economyUserDetails )
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
                                    <td>
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
											echo "<code>Error: User not found!</code>";
										}
									?>
                                    </td>
                                    <td><?php echo $economyUserDetails['balance']; ?></td>
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
