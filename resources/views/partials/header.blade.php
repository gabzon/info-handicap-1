{{-- https://gist.github.com/smutek/cd95c8bc4f1db70ee1eda2740bfbf6fd --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="brand navbar-brand b ttu dosis" href="<?= esc_url(home_url('/')); ?>">{{ get_bloginfo('name', 'display') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation','menu_class' => 'nav navbar-nav bg-dark dosis']) !!}
      @endif
    </div>
  </div>
</nav>
