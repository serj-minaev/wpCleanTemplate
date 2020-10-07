<!-- search -->

<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
	<label for="search-input">Search</label>
	<input class="search-input" id="search-input" type="search" name="s" placeholder="<?php _e( 'To search, type and hit enter.', 'wpCore' ); ?>">
	<button class="search-submit" type="submit" role="button"><?php _e( 'Search', 'wpCore' ); ?></button>
</form>
<!-- /search -->
