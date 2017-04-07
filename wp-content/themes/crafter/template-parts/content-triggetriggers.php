<?php
$crafter_enable_section = get_theme_mod( 'crafter_triggetriggers_enable', true );
if ( $crafter_enable_section || is_customize_preview() ) :
?>
<div id="triggetriggers" class="triggersetrigg padding-top-medium bg-green" <?php if( false == $crafter_enable_section ): echo 'style="display: none;"'; endif ?>>


    <div class="video-text-wrap wow fadeInRight" data-wow-delay="300ms">
        <h3 class="video-text-title">Quem é a Trigg?</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="" class="btn-ql-round">link</a>
    </div>
</div>
<?php endif ?>
