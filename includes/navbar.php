<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
        <?php
        #<div class="navbar-header">
        #	<span class="navbar-brand">Notice: Ren will be down on 2017-12-17 10:00 PST for maintenance. Type <kbd>rentag calendar</kbd> in chat for more info.</span>
        #</div>
		?>
    </div>
	<div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
			</button>
            <a class="navbar-brand" href="/"><img class="img-rounded" src="/images/ren_v2.png" height="20"/></a>
            <span class="navbar-brand">Ren Bot</span>
		</div>
	<div id="navbar" class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
            <li><a href="/"><span class="glyphicon glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>	
            <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Info <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/users"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users</a></li>
                    <li><a href="http://uptime.injabie3.moe"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Server Status</a></li>
                    <li><a href="/changelog"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Changelog</a></li>
                    <li><a href="/todo"><span class="glyphicon glyphicon-list-glyphicon glyphicon-bullhorn" aria-hidden="true"></span> To Do List</a></li>
                </ul>
           	</li>
            <li><a href="/ranks"><span class="glyphicon glyphicon-sort-by-attributes-alt" aria-hidden="true"></span> Ranks (WIP)</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Payday <span class="caret"></span></a>
                <ul class="dropdown-menu">
					<li><a href="/economy"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Spring 2018</a></li>
                    <li><a href="/economy/?sem=2017fall"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Fall 2017</a></li>
                    <li><a href="/economy/?sem=2017summer"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Summer 2017</a></li>
                    <li><a href="/economy/?sem=2017spring"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Spring 2017</a></li>
                    <li><a href="/economy/?sem=2016fall"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Fall 2016</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-tower" aria-hidden="true"></span> Games <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/games"><span class="glyphicon glyphicon-tower" aria-hidden="true"></span> Spring 2018</a></li>
					<li><a href="/games/?sem=2017fall"><span class="glyphicon glyphicon-tower" aria-hidden="true"></span> Fall 2017</a></li>
                    <li><a href="/games/?sem=2017summer"><span class="glyphicon glyphicon-tower" aria-hidden="true"></span> Summer 2017</a></li>
                    <li><a href="/games/?sem=2017spring"><span class="glyphicon glyphicon-tower" aria-hidden="true"></span> Spring 2017</a></li>
                    <li><a href="/games/?sem=2016fall"><span class="glyphicon glyphicon-tower" aria-hidden="true"></span> Fall 2016</a></li>
                </ul>
            </li>
            <li class="dropdown">
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Duels <span class="caret"></span></a>
            	<ul class="dropdown-menu">
					<li><a href="/duels"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Spring 2017</a></li>
                    <li><a href="/duels/?sem=2017fall"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Fall 2017</a></li>
                    <li><a href="/duels/?sem=2017summer"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Summer 2017</a></li>
                    <li><a href="/duels/?sem=2017spring"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Spring 2017</a></li>
                    <li><a href="/duels/?sem=2016fall"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Fall 2016</a></li>
				</ul>
                <?php
#	            <li class="dropdown">
#            	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-music" aria-hidden="true"></span> Audio <span class="caret"></span></a>
#            	<ul class="dropdown-menu">
#                    <li><a href="/localtracks"><span class="glyphicon glyphicon-equalizer" aria-hidden="true"></span> Local Tracks</a></li>
#                    <li><a href="/playlists"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Youtube/SoundCloud Playlists</a>
#				</ul>
				?>
            <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> GitHub <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="https://github.com/ARG-TLQ/Red-DiscordBot/tree/prod"><img src="https://api.travis-ci.org/ARG-TLQ/Red-DiscordBot.svg?branch=prod" /> Ren (Production branch)</a></li>
                    <li><a href="https://github.com/ARG-TLQ/Red-DiscordBot/tree/testing"><img src="https://api.travis-ci.org/ARG-TLQ/Red-DiscordBot.svg?branch=testing" /> Ren (Testing branch)</a></li>
                    <li><a href="https://github.com/ARG-TLQ/Listen.moe-Discord/tree/old-prod"><span class="glyphicon glyphicon-cloud" aria-hidden="true"></span> Ayumi (Production branch)</a></li>

                </ul>
           	</li>
			</ul>
            <ul class="nav navbar-nav navbar-right">
            <!--
            <li><a href="../navbar/">Default</a></li>
            <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
            -->
            </ul>
		</div><!--/.nav-collapse -->
	</div><!--- close container -->
</nav>