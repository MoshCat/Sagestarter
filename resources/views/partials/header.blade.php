<header class="navbar navbar-expand-lg navbar-light bg-light" id="masthead">
  <div class="container">
    <a class="navbar-brand" href="{!! home_url('/') !!}" rel="home">{{ get_bloginfo('name', 'display') }}</a>
    <button class="hamburger" type="button" data-toggle="collapse" data-target="#primary_navigation" aria-controls="primary_navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="hamburger-box"><span class="hamburger-inner"></span></span>
    </button>
    <nav class="collapse navbar-collapse" id="primary_navigation">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => '', 'menu_class' => 'navbar-nav ml-auto']) !!}
      @endif
    </nav>
  </div>
</header>
