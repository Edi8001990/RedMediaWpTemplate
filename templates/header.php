<a href="#" data-toggle="collapse" data-target=".navbar-collapse" class="mobile-trigger"><i class="fa fa-navicon"></i></a>

<div class="mobile">
  <div class="navbar-collapse collapse">
    <nav class="nav-primary" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'navbar-nav']);
        endif;
      ?>
    </nav>
  </div>
</div>

<header class="banner">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        
        <div class="menu-container">
          <nav class="nav-primary" role="navigation">
            <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
              endif;
            ?>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>