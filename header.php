<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage digital-marketing-lite
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'digital-marketing-lite' ) ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	}?>

<div id="page" class="site">
	<a class="screen-reader-text skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'digital-marketing-lite' ); ?></a>
	<div class="toggle-menu responsive-menu">
		<button onclick="resMenu_open()" role="tab"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','digital-marketing-lite'); ?></span></button>
    </div>
	<div id="resp-menu" class="nav sidenav">
        <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'digital-marketing-lite' ); ?>">
          <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="resMenu_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','digital-marketing-lite'); ?></span></a>
          <?php 
            wp_nav_menu( array( 
              'theme_location' => 'responsive',
              'container_class' => 'main-menu-navigation clearfix' ,
              'menu_class' => 'clearfix',
              'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
              'fallback_cb' => 'wp_page_menu',
            ) ); 
          ?>
        </nav>
    </div>
	<div class="header-box">
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3">
						<?php if( get_theme_mod( 'digital_marketing_lite_email_address') != '') { ?>
							<p><i class="fas fa-envelope"></i><?php echo esc_html( get_theme_mod( 'digital_marketing_lite_email_address','' ) ); ?></p>
						<?php }?>
					</div>
					<div class="col-lg-3 col-md-3">
						<?php if( get_theme_mod( 'digital_marketing_lite_phone_number') != '') { ?>
							<p><i class="fas fa-phone"></i><?php echo esc_html( get_theme_mod( 'digital_marketing_lite_phone_number','' ) ); ?></p>
						<?php }?>
					</div>
					<div class="col-lg-6 col-md-6">
						<div id="header" class="topmenu-section">
							<div id="topside-menu" class="nav sidenav">
				                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'digital-marketing-lite' ); ?>">
				                  <?php 
				                    wp_nav_menu( array( 
				                      'theme_location' => 'top-menu',
				                      'container_class' => 'main-menu-navigation clearfix' ,
				                      'menu_class' => 'clearfix',
				                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
				                      'fallback_cb' => 'wp_page_menu',
				                    ) ); 
				                  ?>
				                </nav>
				            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<header class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3">
						<div class="logo">
					        <?php if ( has_custom_logo() ) : ?>
						        <div class="site-logo"><?php the_custom_logo(); ?></div>
						    <?php else: ?>
						        <?php $blog_info = get_bloginfo( 'name' ); ?>
						        <?php if ( ! empty( $blog_info ) ) : ?>
						          <?php if ( is_front_page() && is_home() ) : ?>
						            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						          <?php else : ?>
						            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						          <?php endif; ?>
						        <?php endif; ?>
						        <?php
						        $description = get_bloginfo( 'description', 'display' );
						        if ( $description || is_customize_preview() ) :
						          ?>
							        <p class="site-description">
							            <?php echo esc_html($description); ?>
							        </p>
						        <?php endif; ?>
						    <?php endif; ?>
					    </div>
					</div>
					<div class="col-lg-9 col-md-9">
						<div class="menu-section">
							<div id="sidelong-menu" class="nav sidenav">
				                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'digital-marketing-lite' ); ?>">
				                  <?php 
				                    wp_nav_menu( array( 
				                      'theme_location' => 'primary',
				                      'container_class' => 'main-menu-navigation clearfix' ,
				                      'menu_class' => 'clearfix',
				                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
				                      'fallback_cb' => 'wp_page_menu',
				                    ) ); 
				                  ?>
				                </nav>
				            </div>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>

	<div class="site-content-contain">
		<div id="content" class="site-content">