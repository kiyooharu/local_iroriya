<?php

/*
Template Name: メインタイトルテンプレート
*/

get_header(); ?>

<?php do_action('sydney_before_content'); ?>

<?php $loop = new WP_Query(array("post_type" => "main_title", "posts_per_page" => 4 ));
while($loop->have_posts()): $loop->the_post(); ?>
<div id=”post-<?php the_ID(); ?>” class="flt_l width_50p">
	<ul>
		<li class="font_sz22p"><?php the_field('info_title'); ?></li>
		<li class="font_sz22p"><?php the_field('food_title'); ?></li>
		<li class="font_sz22p"><?php the_field('drink_title'); ?></li>
		<li class="font_sz22p"><?php the_field('ibent_title'); ?></li>
		<li class="font_sz22p"><?php the_field('greet_title'); ?></li>
		<li class="font_sz22p"><?php the_field('access_title'); ?></li>
	</ul>
	<h3 class="font_sz12p"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
</div>


<!--ページID取得-->
<h4>ページID番号</h4>
<ul>
	<li class="font_sz22p"><?php the_ID(); ?></li>
</ul>

<!--ページID取得-->


<style>
ul, li, ol{
	margin:0;
	padding: 0;
	list-style: none;
}
.font_sz22p{
	font-size: 22px;
}
</style>

<?php endwhile; ?>

























<?php get_footer(); ?>
