<div id="search">

				<form method="get" action="<?php echo home_url(''); ?>"><input type="text" name="s" placeholder="<?php echo esc_attr(__('Search','thefoxwp')); ?>" class="search"  value="<?php the_search_query(); ?>"/><input type="submit" id="searchsubmit" value=""></form>

			</div>