<?php
	#Economy: Used to sort from largest balance to smallest balance.
	function sortcmp_bankbalance($a, $b)
	{
		if ($a['balance'] == $b['balance']) {
			return 0;
		}
		return ($a['balance'] > $b['balance']) ? -1 : 1;
	}
	#Games: Used to sort from largest playcount to lowest playcount.
	function sortcmp_gamecount($a, $b) 
	{
		if ($a['PLAYED'] == $b['PLAYED']) {
			return 0;
		}
		return ($a['PLAYED'] > $b['PLAYED']) ? -1 : 1;
	}
	
	#Users: Used to sort users by join date, from latest to earliest.
	function sortcmp_userjoin($a, $b)
	{
		if ($a["joined_at"] == $b["joined_at"])
		{
			return 0;
		}
		return ($a["joined_at"] > $b["joined_at"]) ? -1 : 1;
	} 
	
	#Duels: Sort by win-losses.  If tied, use draws to determine.
	function sortcmp_duels($a, $b) //Used to sort from earliest to latest.
	{		
		if ($a['wins']-$a['losses'] == $b['wins']-$b['losses'])
		{
			if ($a['draws'] == $b['draws'])
			{
				if($a['wins'] == $b['wins'])
				{
					return 0;
				}
				return ($a['wins'] > $b['wins']) ? -1 : 1;
			}
			return ($a['draws'] < $b['draws']) ? -1 : 1;
		}
		return ($a['wins']-$a['losses'] > $b['wins']-$b['losses']) ? -1 : 1;
	}
?>