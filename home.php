<?php
/**
 * The home template file.
 *
 * @package Sydney
 */

get_header(); ?>

<?php do_action('sydney_before_content'); ?>


<!--お知らせ-->

<h2 class="text-center pa_50p line_h24" id="info"><?php the_field('info_title',74); ?><br>

<span class="font_sz12p">お知らせ</span>

<div class="border_line"></div>

</h2>

<?php $loop = new WP_Query(array("post_type" => "info", "posts_per_page" => 4 ));
while($loop->have_posts()): $loop->the_post(); ?>
	<div class="clearfix flt_l width_100p">
		<div id=”post-<?php the_ID(); ?>” class="clearfix ma_5_p">
			<ul class="flt_l width_30p clearfix">
				<li class="flt_l text-center line_h43"><?php the_time('Y/m/d'); ?></li>
				<li class="flt_l text-center info_bs"><?php the_field('info'); ?></li>
			</ul>
			<ul class="flt_l width_50p">
				<li><h3 class="font_sz12p line_h43"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3></li>
			</ul>
		</div>
	</div>
<?php endwhile; ?>

</div>

</div>

</div>

</div>


<!--お知らせ-->


<!--間隔-->

<div class="back_stop">
  <p><img src="/iroriya/wp-content/uploads/2017/03/logo_white.png"></p>
  <p class="line_h24">イロリヤは皆が集う出会いの場と当店では考えております。<br>お客様が喜ぶイベントをご用意しております。<br>IroRiya empty meeting place where everyone gather .<br>
And prepared a variety of events for everyone .</p>
</div>

<!--間隔-->



<!--食べ物-->

<div class="container content-wrapper pa_t50b0p" id="food">

<div class="row">

<h2 class="text-center pa_50p line_h24"><?php the_field('food_title',74); ?><br>

<span class="font_sz12p">食べ物</span>

<div class="border_line"></div>

</h2>

<?php $loop = new WP_Query(array("post_type" => "food", "posts_per_page" => 6 ));
while($loop->have_posts()): $loop->the_post(); ?>
<div class="clearfix pa_20p dis_inline col-md-3 col-sm-6 col-xs-12">
	<div id=”post-<?php the_ID(); ?>” class="picup_position">
		<?php the_post_thumbnail( array(200,auto) ); ?>
		<p><?php the_time('Y/m/d'); ?></p>
		<h3 class="font_sz16p"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		<p class="picup_p picup_style"><?php the_field('food_picup'); ?></p>
		<?php the_excerpt(); ?>
<!--
		<P>営業時間 [<?php the_field('uptime'); ?>]</P>
-->
	</div>
</div>

<?php endwhile; ?>

</div>

</div>

</div>

</div>

<!--食べ物-->



<!--飲み物-->

<div class="container content-wrapper pa_50p" id="drink">

<div class="row">

<h2 class="text-cener pa_50p line_h24"><?php the_field('drink_title',74); ?><br>

<span class="font_sz12p">飲み物</span>

<div class="border_line"></div>

</h2>

<?php $loop = new WP_Query(array("post_type" => "drink", "posts_per_page" => 8 ));
while($loop->have_posts()): $loop->the_post(); ?>
<div class="clearfix pa_20p dis_inline col-md-3 col-sm-6 col-xs-12">
<div id=”post-<?php the_ID(); ?>” class="picup_position height_32p">
	<?php the_post_thumbnail( array(200,auto) ); ?>
	<p><?php the_field('new drink'); ?></p>
	<h3 class="font_sz12p"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	<?php the_excerpt(); ?>
</div>

</div>

<?php endwhile; ?>

</div>

</div>

</div>

</div>

<!--飲み物-->


<!--間隔-->

<div class="back_stop">
  <p><img src="/iroriya/wp-content/uploads/2017/03/logo_white.png"></p>
  <p class="line_h24">イロリヤは皆が集う出会いの場と当店では考えております。<br>お客様が喜ぶイベントをご用意しております。<br>IroRiya empty meeting place where everyone gather .<br>
And prepared a variety of events for everyone .</p>
</div>

<!--間隔-->


<!--イベント-->

<div class="container content-wrapper pa_50p" id="ibent">

<div class="row">

<h2 class="text-center pa_50p line_h24"><?php the_field('ibent_title',74); ?><br>

<span class="font_sz12p">イベント</span>

<div class="border_line"></div>

</h2>

<?php $loop = new WP_Query(array("post_type" => "ibent", "posts_per_page" => 8 ));
while($loop->have_posts()): $loop->the_post(); ?>
<div class="clearfix pa_20p">
<div id=”post-<?php the_ID(); ?>” class="flt_l width_25p">
	<?php the_post_thumbnail( array(200,auto) ); ?>
	<p><?php the_field('new drink'); ?></p>
	<h3 class="font_sz12p"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	<?php the_excerpt(); ?>
</div>

</div>

<?php endwhile; ?>

</div>

</div>

</div>

</div>
<!--イベント-->


<!--あいさつ-->

<div class="container content-wrapper pa_50p" id="greet">

<div class="row">

<h2 class="text-center pa_50p line_h24"><?php the_field('greet_title',74); ?><br>

<span class="font_sz12p">あいさつ</span>

<div class="border_line"></div>

</h2>

<?php $loop = new WP_Query(array("post_type" => "greet", "posts_per_page" => 8 ));
while($loop->have_posts()): $loop->the_post(); ?>
<div class="clearfix width_100p">
<div id=”post-<?php the_ID(); ?>”>
	<p><?php the_post_thumbnail( array(200,auto) ); ?></p>
	<p><?php the_field('new drink'); ?></p>
	<h3 class="font_sz12p"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	<?php the_excerpt(); ?>
</div>
</div>

<?php endwhile; ?>

</div>

</div>

</div>

</div>

<!--あいさつ-->


<!--あくせす-->

<div class="container content-wrapper pa_50p" id="access">

<div class="row">

<h2 class="text-center pa_50p line_h24"><?php the_field('access_title',74); ?><br>

<span class="font_sz12p">あくせす</span>

<div class="border_line"></div>

</h2>

<?php $loop = new WP_Query(array("post_type" => "access", "posts_per_page" => 8 ));
while($loop->have_posts()): $loop->the_post(); ?>
<div class="clearfix flt_l width_100p">
<div id=”post-<?php the_ID(); ?>”>
	<p><?php the_post_thumbnail( array(200,auto) ); ?></p>
	<p><?php the_field(''); ?></p>
	<h3 class="font_sz12p"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	<?php the_excerpt(); ?>
</div>

</div>

<?php endwhile; ?>

</div>

</div>

</div>

</div>


<!--あくせす-->

<div class="pa_50p">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51862.552297288355!2d139.657520793264!3d35.666917187437214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cb2eb3108d1%3A0xf11cd9b2395b6677!2z5p2x5Lqs6YO95riL6LC35Yy6!5e0!3m2!1sja!2sjp!4v1491233689396" width="100%" height="300px" frameborder="0" style="border:0; border: 0; pointer-events:none;" allowfullscreen></iframe>

</div>

<?php get_footer(); ?>
