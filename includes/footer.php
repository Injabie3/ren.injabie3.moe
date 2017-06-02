<?php
    $hash_short = exec('git rev-parse --short HEAD');
    $hash_long = exec('git rev-parse --long HEAD');
    
?>
<footer class="footer">
	<div class="container">
        <p class="text-muted">
            © <a href="https://injabie3.moe/">Injabie3</a> (2016-2017).  Ren bot maintained by @sedruk, @LeSpaz, and @Injabie3. Commit <a href="https://github.com/Injabie3/discord.injabie3.moe/commit/<?php echo $hash_long; ?>"><code><?php echo $hash_short; ?></code></a>
			<?php
            if (strtolower($_SERVER['HTTP_HOST']) == "discord.injabie3.moe")
			{
				?>
                Proudly hosting a <img src="/images/moe.png" height=20> domain!
                <?php
			}
			?>
		</p>
      </div>
</footer>