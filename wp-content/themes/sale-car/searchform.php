<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
    <button type="submit" id="searchsubmit" class="searchform__submit"><span class="screen-reader-text"><?php _e( 'search', 'textdomain' ); ?></button>
    <input type="text" value="" name="s" id="s" class="searchform__input" placeholder="<?php _e( 'insert keyword', 'textdomain' ); ?>" />
</form>