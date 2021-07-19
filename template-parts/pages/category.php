<?php if ( ! defined( 'ABSPATH' ) ){ exit; } ?>
<h1 class="category_h1"><?= esc_html( get_the_title() ) ?></h1>

<?php
/* Start the Loop */
while ( have_posts() )
{
	the_post();
	get_template_part( 'template-parts/pages/article.php' );
}
?>
