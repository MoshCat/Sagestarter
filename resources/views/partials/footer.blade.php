<footer class="content-info">
  <div class="container">
    @if (has_nav_menu('social'))
      <nav aria-label="<?php esc_attr_e( 'Social links', 'strt' ); ?>" class="social-menu-wrapper">
        <ul class="social-menu">
          {!! wp_nav_menu(
            array(
              'theme_location'  => 'social',
              'container'       => '',
              'container_class' => '',
              'items_wrap'      => '%3$s',
              'depth'           => 1,
              'link_before'     => '<span class="screen-reader-text">',
              'link_after'      => '</span>',
              'fallback_cb'     => '',
            )
          ) !!}
        </ul><!-- .footer-social -->
      </nav><!-- .footer-social-wrapper -->
    @endif
    {!! date("Y") !!} &copy; <a href="{!! home_url('/'); !!}" rel="home">{!! get_bloginfo('name'); !!}</a><span class="sep"> | </span>{!! get_bloginfo( 'description' ) !!}
  </div>
</footer>

