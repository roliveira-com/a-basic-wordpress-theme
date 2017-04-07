<div id="nav" class="side-page-menu">

      <nav>
          <?php
          $menu_id = 'primary';
          wp_nav_menu( array(
              'theme_location'  => $menu_id,
              'menu_id' => 'primary-menu',
              'depth'             => 3,
              'menu_class'        => 'nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker()
          ));
          ?>
      </nav>
</div>
