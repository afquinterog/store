<?php
/**
 * Pagination - Show numbered pagination for catalog pages.
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $wp_query;

if ( $wp_query->max_num_pages <= 1 ) {
	return;
}

$pagination = woodmart_get_opt( 'shop_pagination' );

# fix bug with wrong escaped url generated by next_posts() call
if( is_search() ) {
	$pagination = 'pagination';
}

?>
<div class="products-footer">
	<?php if ( $pagination == 'more-btn' || $pagination == 'infinit' ): ?>
		<?php if( get_next_posts_link() ) :?>
			<a href="<?php echo next_posts( $wp_query->max_num_pages, false ); ?>" class="btn woodmart-load-more woodmart-products-load-more load-on-<?php echo ($pagination == 'more-btn') ? 'click' : 'scroll'; ?>"><span class="load-more-label"><?php esc_html_e('Load more products', 'woodmart'); ?></span><span class="load-more-loading"><?php esc_html_e('Loading...', 'woodmart'); ?></span></a>
		<?php endif; ?>
	<?php else: ?>
		<nav class="woocommerce-pagination">
			<?php
				echo paginate_links( apply_filters( 'woocommerce_pagination_args', array(
					'base'         => ( str_replace( 999999999, '%#%', remove_query_arg( 'add-to-cart', get_pagenum_link( 999999999, false ) ) ) ),
					'format'       => '',
					'current'      => max( 1, get_query_var( 'paged' ) ),
					'total'        => $wp_query->max_num_pages,
					'prev_text'    => '&larr;',
					'next_text'    => '&rarr;',
					'type'         => 'list',
					'end_size'     => 3,
					'mid_size'     => 3
				) ) );
			?>
		</nav>
	<?php endif ?>
</div>
