<header id="masthead" class="site-header" role="banner">

    <div class="site-branding">
        <?php if ( get_theme_mod('sixteen_logo') != "" ) : ?>
            <div id="site-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod('sixteen_logo'); ?>"></a>
            </div>
        <?php else : ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
        <?php endif; ?>
    </div>

    <?php get_template_part('modules/social/icon', 'sociocon'); ?>

</header><!-- #masthead -->