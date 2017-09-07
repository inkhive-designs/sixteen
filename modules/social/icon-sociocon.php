<div id="social-icons">
			<div class="container">
                <?php $social_icons_styles = esc_html(get_theme_mod('sixteen_social_styles')); ?>
			    <?php for ($i = 1; $i < 8; $i++) : 
							$social = esc_html(get_theme_mod('sixteen_social_'.$i));
							if ( ($social != 'none') && ($social != '') ) : ?>
							<a href="<?php echo esc_url(get_theme_mod('sixteen_social_url'.$i)); ?>">
                                <img class="common <?php echo $social_icons_styles; ?>" src="<?php echo get_template_directory_uri().'/images/'.$social.'.png'; ?>" />
                            </a>
							<?php endif;
						
						endfor; ?>
			</div>
            </div>
