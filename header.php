<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Stock
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

    <?php
    $header_iconic_boxes = cs_get_option('header_iconic_boxes');
    $enable_image_logo = cs_get_option('enable_image_logo');
    $image_logo = cs_get_option('image_logo');
    $text_logo = cs_get_option('text_logo');

    wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<div class="header-area">
		<div class="container">

			<div class="row">
				<div class="col-md-3">
					<div class="site-logo">
                        <h2>
                            <a href="<?php esc_url(home_url('/')); ?>">

                                <?php if($enable_image_logo == true && !empty($image_logo)) :
                                    $image_logo_src = wp_get_attachment_image_src($image_logo, 'large', false) ; ?>

                                    <img src="<?php echo $image_logo_src[0]; ?>" alt="<?php echo bloginfo('name'); ?>">

                                <?php else : ?>
                                    <?php if(!empty($text_logo)) { echo $text_logo; } else { bloginfo('name'); } ?>
                                <?php endif; ?>
                            </a>
                        </h2>
					</div>					
				</div>

				<div class="col-md-9">
                    <div class="header-right-content">

                        <?php if( !empty( $header_iconic_boxes )) : ?>
                            <?php foreach($header_iconic_boxes as $box) : ?>

                                    <?php if(!empty($box['link'])) : ?>
                                <a href="mailto:contact@stock.com"
                                    <?php else : ?><div
                                    <?php endif; ?>
                                                class="stock-contact-box">

                                        <i class="<?php echo $box['icon']; ?>"></i>
                                        <?php echo $box['title']; ?>
                                        <h3><?php echo $box['big_title']; ?></h3>

                                    <?php if(!empty($box['link'])) : ?>
                                </a>
                                    <?php else : ?></div>
                                    <?php endif; ?>

                            <?php endforeach; ?>
                        <?php endif; ?>

                        <a href="" class="stock-cart"><i class="fa fa-shopping-cart"></i>
                        <span class="stock-cart-count">3</span></a>
                    </div>
				</div>
			</div>


            <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="mainmenu">

                    <?php    /***
                     * Displays a navigation menu
                     * @param array $args Arguments
                     */
                    $args = array(
                        'theme_location' => 'menu-1',
                        'menu_class' => 'nav navbar-nav',
                    );
                    wp_nav_menu( $args );
                    ?>

                </div><!-- /.navbar-collapse -->
            </div>

		</div>
	</div>
