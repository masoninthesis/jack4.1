<header class="banner" id="nav">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><svg class="jackalogo" width="28" height="30"><?php get_template_part( 'assets/svg/inline', 'jackalogo.svg' ); ?></svg></a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
