<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package storefront
 */

if ( ! function_exists( 'storefront_product_categories' ) ) {
	/**
	 * Display Product Categories
	 * Hooked into the `homepage` action in the homepage template
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_product_categories( $args ) {

		if ( is_woocommerce_activated() ) {

			$args = apply_filters( 'storefront_product_categories_args', array(
				'limit' 			=> 3,
				'columns' 			=> 3,
				'child_categories' 	=> 0,
				'orderby' 			=> 'name',
				'title'				=> __( 'Danh mục sản phẩm', 'storefront' ),
				) );

			echo '<section class="storefront-product-section storefront-product-categories">';

			do_action( 'storefront_homepage_before_product_categories' );

			echo '<h2 class="section-title">' . esc_attr( $args['title'] ) . '</h2>';
			echo do_shortcode( '[product_categories number="' . intval( $args['limit'] ) . '" columns="' . intval( $args['columns'] ) . '" orderby="' . esc_attr( $args['orderby'] ) . '" parent="' . esc_attr( $args['child_categories'] ) . '"]' );

			do_action( 'storefront_homepage_after_product_categories' );

			echo '</section>';

		}
	}
}

if ( ! function_exists( 'storefront_recent_products' ) ) {
	/**
	 * Display Recent Products
	 * Hooked into the `homepage` action in the homepage template
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_recent_products( $args ) {

		if ( is_woocommerce_activated() ) {

			$args = apply_filters( 'storefront_recent_products_args', array(
				'limit' 			=> 4,
				'columns' 			=> 4,
				'title'				=> __( 'Sản phẩm mới', 'storefront' ),
				) );

			echo '<section class="storefront-product-section storefront-recent-products">';

			do_action( 'storefront_homepage_before_recent_products' );

			echo '<h2 class="section-title">' . esc_attr( $args['title'] ) . '</h2>';
			echo do_shortcode( '[recent_products per_page="' . intval( $args['limit'] ) . '" columns="' . intval( $args['columns'] ) . '"]' );

			do_action( 'storefront_homepage_after_recent_products' );

			echo '</section>';

		}
	}
}

if ( ! function_exists( 'storefront_featured_products' ) ) {
	/**
	 * Display Featured Products
	 * Hooked into the `homepage` action in the homepage template
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_featured_products( $args ) {

		if ( is_woocommerce_activated() ) {

			$args = apply_filters( 'storefront_featured_products_args', array(
				'limit' 			=> 4,
				'columns' 			=> 4,
				'orderby'			=> 'date',
				'order'				=> 'desc',
				'title'				=> __( 'Sản phẩm nổi bật', 'storefront' ),
				) );

			echo '<section class="storefront-product-section storefront-featured-products">';

			do_action( 'storefront_homepage_before_featured_products' );

			echo '<h2 class="section-title">' . esc_attr( $args['title'] ) . '</h2>';
			echo do_shortcode( '[featured_products per_page="' . intval( $args['limit'] ) . '" columns="' . intval( $args['columns'] ) . '" orderby="' . esc_attr( $args['orderby'] ) . '" order="' . esc_attr( $args['order'] ) . '"]' );

			do_action( 'storefront_homepage_after_featured_products' );

			echo '</section>';

		}
	}
}

if ( ! function_exists( 'storefront_popular_products' ) ) {
	/**
	 * Display Popular Products
	 * Hooked into the `homepage` action in the homepage template
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_popular_products( $args ) {

		if ( is_woocommerce_activated() ) {

			$args = apply_filters( 'storefront_popular_products_args', array(
				'limit' 			=> 4,
				'columns' 			=> 4,
				'title'				=> __( 'Top sản phẩm', 'storefront' ),
				) );

			echo '<section class="storefront-product-section storefront-popular-products">';

			do_action( 'storefront_homepage_before_popular_products' );

			echo '<h2 class="section-title">' . esc_attr( $args['title'] ) . '</h2>';
			echo do_shortcode( '[top_rated_products per_page="' . intval( $args['limit'] ) . '" columns="' . intval( $args['columns'] ) . '"]' );

			do_action( 'storefront_homepage_after_popular_products' );

			echo '</section>';

		}
	}
}

if ( ! function_exists( 'storefront_on_sale_products' ) ) {
	/**
	 * Display On Sale Products
	 * Hooked into the `homepage` action in the homepage template
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_on_sale_products( $args ) {

		if ( is_woocommerce_activated() ) {

			$args = apply_filters( 'storefront_on_sale_products_args', array(
				'limit' 			=> 4,
				'columns' 			=> 4,
				'title'				=> __( 'Sản phẩm khuyến mãi', 'storefront' ),
				) );

			echo '<section class="storefront-product-section storefront-on-sale-products">';

			do_action( 'storefront_homepage_before_on_sale_products' );

			echo '<h2 class="section-title">' . esc_attr( $args['title'] ) . '</h2>';
			echo do_shortcode( '[sale_products per_page="' . intval( $args['limit'] ) . '" columns="' . intval( $args['columns'] ) . '"]' );

			do_action( 'storefront_homepage_after_on_sale_products' );

			echo '</section>';

		}
	}
}

if ( ! function_exists( 'storefront_homepage_content' ) ) {
	/**
	 * Display homepage content
	 * Hooked into the `homepage` action in the homepage template
	 * @since  1.0.0
	 * @return  void
	 */
	function storefront_homepage_content() {
		while ( have_posts() ) : the_post();

			get_template_part( 'content', 'page' );

		endwhile; // end of the loop.
	}
}

if ( ! function_exists( 'storefront_social_icons' ) ) {
	/**
	 * Display social icons
	 * If the subscribe and connect plugin is active, display the icons.
	 * @link http://wordpress.org/plugins/subscribe-and-connect/
	 * @since 1.0.0
	 */
	function storefront_social_icons() {
		if ( class_exists( 'Subscribe_And_Connect' ) ) {
			echo '<div class="subscribe-and-connect-connect">';
			subscribe_and_connect_connect();
			echo '</div>';
		}
	}
}

if ( ! function_exists( 'storefront_get_sidebar' ) ) {
	/**
	 * Display storefront sidebar
	 * @uses get_sidebar()
	 * @since 1.0.0
	 */
	function storefront_get_sidebar() {
		get_sidebar();
	}
}