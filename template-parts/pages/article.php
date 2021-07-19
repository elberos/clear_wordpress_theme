<?php if ( ! defined( 'ABSPATH' ) ){ exit; } ?>
<?php
	$post = get_post();
	$post_link = get_permalink($post["ID"]);
?>
<article class="article article-<?= esc_attr( $post["post_type"] ) ?>" id="tease-<?= esc_attr( $post["ID"] ) ?>">
	<h2 class="tease__title">
		<a class="nolink" href="<?= esc_attr( $post_link ) ?>"><?= esc_html($post["post_title"]) ?></a>
	</h2>
	<div class='tease__read_more'>
		<a class="nolink" href="<?= esc_attr( $post_link ) ?>"><?= esc_html( __('Читать далее', 'template') ) ?></a>
	</div>
</article>