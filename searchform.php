<div class="p-2">
  <form role="search" method="get" class="form search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group ">
        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <input class="form-control"  type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search for anything" />
        <input class="btn btn-success" type="submit" id="searchsubmit" value="Go" />
    </div>
  </form>
</div>

