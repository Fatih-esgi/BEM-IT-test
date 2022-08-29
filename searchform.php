<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/loupe.svg" alt="search icon" />
<form role="search" method="get" class="c_search__searchForm" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="c_search__searchField"
            placeholder="<?php echo esc_attr_x( 'Search something here', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
</form>