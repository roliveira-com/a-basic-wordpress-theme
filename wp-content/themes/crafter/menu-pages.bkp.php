<div class="collapse navbar-collapse pull-right" id="ql_nav_collapse">
      <nav id="jqueryslidemenu" class="jqueryslidemenu navbar " role="navigation">
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
</div><!-- /ql_nav_collapse -->
