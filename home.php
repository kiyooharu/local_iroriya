<?php
/**
 * The home template file.
 *
 * @package Sydney
 */

get_header(); ?>

<?php do_action('sydney_before_content'); ?>


<!--お知らせ-->

<div class="container content-wrapper pa_50p" id="info">

<div class="row">

<h2 class="text-center pa_50p line_h24" id="animation_a"><?php the_field('info_title',74); ?><br>

<span class="font_sz12p">お知らせ</span>

<div class="border_line"></div>

</h2>

<?php $loop = new WP_Query(array("post_type" => "info", "posts_per_page" => 4 ));
while($loop->have_posts()): $loop->the_post(); ?>
	<div class="clearfix flt_l width_100p">
		<div id=”post-<?php the_ID(); ?>” class="clearfix ma_5_p info">
			<ul class="flt_l col-lg-5 col-md-6 col-sm-12 col-xs-12 clearfix">
				<li class="flt_l text-center line_h43 col-lg-3 col-md-3 col-sm-5 col-xs-6"><?php the_time('Y/m/d'); ?></li>
				<li class="flt_l text-center info_bs col-lg-6 col-md-6 col-sm-6 col-xs-6"><?php the_field('info'); ?></li>
			</ul>
			<ul class="flt_l col-lg-6 col-md-6 col-sm-12 col-xs-12">
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

<h2 class="text-center pa_50p line_h24" id="animation_b"><?php the_field('food_title',74); ?><br>

<span class="font_sz12p">食べ物</span>

<div class="border_line"></div>

</h2>

<?php $loop = new WP_Query(array("post_type" => "food", "posts_per_page" => 6 ));
while($loop->have_posts()): $loop->the_post(); ?>
<div class="clearfix pa_201p dis_inline col-md-3 col-sm-6 col-xs-12">
	<div id=”post-<?php the_ID(); ?>” class="picup_position food_mw">
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

<div class="back_cb">

<!--飲み物-->

<div class="container content-wrapper pa_50p" id="drink">

<div class="row">

<h2 class="text-center pa_50p line_h24" id="animation_c"><?php the_field('drink_title',74); ?><br>

<span class="font_sz12p">飲み物</span>

<div class="border_line"></div>

</h2>

<?php $loop = new WP_Query(array("post_type" => "drink", "posts_per_page" => 8 ));
while($loop->have_posts()): $loop->the_post(); ?>
<div class="clearfix pa_201p dis_inline col-md-3 col-sm-6 col-xs-12">
<div id=”post-<?php the_ID(); ?>” class="picup_position height_32p drink_mw">
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

</div>

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

<h2 class="text-center pa_50p line_h24" id="animation_d"><?php the_field('ibent_title',74); ?><br>

<span class="font_sz12p">イベント</span>

<div class="border_line"></div>

</h2>

<?php $loop = new WP_Query(array("post_type" => "ibent", "posts_per_page" => 8 ));
while($loop->have_posts()): $loop->the_post(); ?>
<div class="clearfix pa_201p dis_inline col-md-3 col-sm-6 col-xs-12">
<div id=”post-<?php the_ID(); ?>” class="picup_position height_32p ibent_mw">
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

<div class="back_greet">

<!--あいさつ-->

<div class="container content-wrapper pa_50p" id="greet">

<div class="row">

<h2 class="text-center pa_50p line_h24 color_cf" id="animation_e"><?php the_field('greet_title',74); ?><br>

<span class="font_sz12p color_cf">あいさつ</span>

<div class="border_line color_cf"></div>

</h2>

<?php $loop = new WP_Query(array("post_type" => "greet", "posts_per_page" => 8 ));
while($loop->have_posts()): $loop->the_post(); ?>
<div class="clearfix width_100p">
<div id=”post-<?php the_ID(); ?>” class="pa_10p clearfix greet_sp greet_mw">
	<ul class="col-lg-3 col-md-6 col-sm-6 col-xs-6 greet">
		<li>
		<?php the_post_thumbnail( array(400,auto) ); ?>
		</li>
	</ul>
	<ul class="col-lg-9 col-md-6 col-sm-6 col-xs-6">
		<li>
		<h3 class="font_sz12p pa_10_10p color_cd"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		</li>
		<li class="pa_10_20p">
		<p><strong><?php the_field('name'); ?></strong></p>
		</li>
		<li class="pa_0_10p">
		<p><?php the_field('cathf'); ?></p>
		</li>
		<li class="pa_10_20p bo_sd1p">
		<?php the_excerpt(); ?>
		</li>
	</ul>
</div>
</div>

<?php endwhile; ?>

</div>

</div>

</div>

</div>

<!--あいさつ-->

</div>

<!--あくせす-->

<div class="container content-wrapper pa_50p" id="access">

<div class="row">

<h2 class="text-center pa_0p_50p line_h24" id="animation_f"><?php the_field('access_title',74); ?><br>

<span class="font_sz12p">あくせす</span>

<div class="border_line"></div>

</h2>

<?php $loop = new WP_Query(array("post_type" => "access", "posts_per_page" => 8 ));
while($loop->have_posts()): $loop->the_post(); ?>
<div class="clearfix flt_l width_100p">
<div class="row">
<div id=”post-<?php the_ID(); ?>” class="col-xs-12">
	<h3 class="font_sz20p pa_30pb access_mw">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	</h3>
	<table class="type01 access_mw" border="0">
		<tr>
			<th scope="row">住所</th>
			<td>東京都港区1-3-24</td>
		</tr>
		<tr>
			<th scope="row">TEL</th>
			<td>06-444-5555</td>
		</tr>
		<tr>
			<th scope="row">最寄り駅</th>
			<td>地下鉄線　銀座駅</td>
		</tr>
	</table>
</div>
</div>

</div>

<?php endwhile; ?>

</div>

</div>

</div>

</div>


<!--あくせす-->

<div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51862.552297288355!2d139.657520793264!3d35.666917187437214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cb2eb3108d1%3A0xf11cd9b2395b6677!2z5p2x5Lqs6YO95riL6LC35Yy6!5e0!3m2!1sja!2sjp!4v1491233689396" width="100%" height="300px" frameborder="0" style="border:0; border: 0; pointer-events:none;" allowfullscreen></iframe>

</div>

<?php get_footer(); ?>
