<?php  get_header(); ?>

<!-- Blogove Články -->
<section>
	<div id="blog" class="">
		<?php
			/**
			 * Display Posts Code: https://www.wpbeginner.com/wp-tutorials/how-to-display-all-your-wordpress-posts-on-one-page/
			 * 
			 * 'post_type'=>'post' checks what kind of post type is it?
			 * 'post_status'=>'publish' checks if it is published? post_status will have the val of publish?
			 * '=>' this operator is a access mechanism for array
			 * '->' object operator
			 * 
			 * Function have_post() - returns bool
			 * <?php if ( $wpb_all_query->have_posts() ) : ?> check query if it has posts?
			 * 
			 * <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?> loop until have_posts returns FALSE?
			 * 
			 * <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> Get permalink and get title of the post
			 * 
			 * <?php the_content(); ?> return the post body text
			 */
			$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

			<?php if ( $wpb_all_query->have_posts() ) : ?>

			<ul>
		
				<!-- the loop -->
				<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
					<!-- display post here -->
					<li>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<div class="content">
							<?php the_content(); ?>
						</div>
					</li>
				<?php endwhile; ?>
				<!-- end of the loop -->
		
			</ul>

		<?php wp_reset_postdata(); ?>

		<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<!-- Feature 1 -->

<section class="feature_1 bg_white padding_top100 padding_bottom85">
	<div class="container nopadding max_width970">
		<h2 class="font42 font_second light dark_gray text-center">Our Benefits</h2>
		<div class="top65 row inner">
			<div class="col-md-4 text-center bottom50 block">
				<i class="fas fa-briefcase font60 light_gray"></i>
				<div class="top30 font28 light dark_gray title">Many Useful <br />Components</div>
				<div class="top30 font18 light dark_blue text">
					Startup Framework contains components and complex blocks which can easily be integrated <br />into almost any design.
				</div>
			</div>
			<div class="col-md-4 text-center bottom50 block">
				<i class="fas fa-compress font60 light_gray"></i>
				<div class="top30 font28 light dark_gray title">Responsive <br />Layout</div>
				<div class="top30 font18 light dark_blue text">
					We haven’t forgotten about responsive layout. With Startup Framework, you can create a website with full mobile support.
				</div>
			</div>
			<div class="col-md-4 text-center bottom50 block">
				<i class="fas fa-desktop font60 light_gray"></i>
				<div class="top30 font28 light dark_gray title">Retina <br />Ready</div>
				<div class="top30 font18 light dark_blue text">
					Startup Framework works on <br />devices supporting Retina <br />Display. Feel the clarity in each <br />pixel.
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Showcase 5 -->

<section class="showcase_5 bg_light_gray padding_top100 padding_bottom80">
	<div class="container nopadding text-center">
		<h2 class="font42 light font_second dark_gray">25 Ready-to-Use Pages</h2>
		<div class="margin_auto top30 bottom75 max_width770 font22 light text">
			We prepared some high-quality web-pages, that you can use in your projects. When you have to create your website you can use these templates.
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="margin_auto bottom30 max_width270 block">
					<a href="#">
						<img srcset="<?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto1.jpg 1x, <?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto1_2x.jpg 2x" src="<?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto1.jpg" class="radius8 width_full" alt="" />
					</a>
				</div>
				<div class="margin_auto bottom30 max_width270 block">
					<a href="#">
						<img srcset="<?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto5.jpg 1x, <?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto5_2x.jpg 2x" src="<?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto5.jpg" class="radius8 width_full" alt="" />
					</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="margin_auto bottom30 max_width270 block">
					<a href="#">
						<img srcset="<?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto2.jpg 1x, <?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto2_2x.jpg 2x" src="<?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto2.jpg" class="radius8 width_full" alt="" />
					</a>
				</div>
				<div class="margin_auto bottom30 max_width270 block">
					<a href="#">
						<img srcset="<?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto6.jpg 1x, <?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto6_2x.jpg 2x" src="<?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto6.jpg" class="radius8 width_full" alt="" />
					</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="margin_auto bottom30 max_width270 block">
					<a href="#">
						<img srcset="<?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto3.jpg 1x, <?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto3_2x.jpg 2x" src="<?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto3.jpg" class="radius8 width_full" alt="" />
					</a>
				</div>
				<div class="margin_auto bottom30 max_width270 block">
					<a href="#">
						<img srcset="<?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto7.jpg 1x, <?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto7_2x.jpg 2x" src="<?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto7.jpg" class="radius8 width_full" alt="" />
					</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="margin_auto bottom30 max_width270 block">
					<a href="#">
						<img srcset="<?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto4.jpg 1x, <?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto4_2x.jpg 2x" src="<?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto4.jpg" class="radius8 width_full" alt="" />
					</a>
				</div>
				<div class="margin_auto bottom30 max_width270 block">
					<a href="#">
						<img srcset="<?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto8.jpg 1x, <?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto8_2x.jpg 2x" src="<?php echo get_template_directory_uri(); ?>/i/demo_images/showcase_5_foto8.jpg" class="radius8 width_full" alt="" />
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Pricing Table 5 -->

<section class="pricing_table_5 bg_white padding_top90 padding_bottom60">
	<div class="container nopadding dark_blue text-center">
		<h2 class="max_width600 margin_auto font42 font_second light dark_gray">Simple & flexible pricing built for everyone</h2>
		<div class="max_width600 margin_auto top25 font18 light">
			Start with 14-day free trial. No credit card needed. Cancel at anytime.
		</div>
		<div class="row top65">
			<div class="col-lg-4 bottom70">
				<div class="max_width370 margin_auto radius10 padding_sides70 padding_top40 padding_bottom45 block">
					<div class="font14 semibold uppercase spacing15 title">Start</div>
					<div class="top30 inline_block font62 light text_left price clearfix">
						<span class="float_left font16">$</span>
						<span class="float_left">19</span>
						<span class="top10 left15 float_left font16">per user<br />per month</span>
					</div>
					<div class="top15">
						All the features you need to keep your personal files safe, accessible, and easy to share.
					</div>
				</div>
				<div class="width250 margin_auto top35 block2">
					<ul class="nopadding text_left">
						<li class="bottom10"><span class="opacity3">2 GB of hosting space</span> <i class="fas fa-check font14 green float_right"></i></li>
						<li class="bottom10"><span class="opacity3">14 days of free backups</span> <i class="fas fa-times font14 red float_right"></i></li>
						<li class="bottom10"><span class="opacity3">Social integrations</span> <i class="fas fa-times font14 red float_right"></i></li>
						<li class="bottom10"><span class="opacity3">Advanced client billing</span> <i class="fas fa-times font14 red float_right"></i></li>
					</ul>
					<a href="#" class="top20 btn size50 width_full transparent_blue border border_blue radius6">Start Free Trial</a>
				</div>
			</div>
			<div class="col-lg-4 bottom70">
				<div class="max_width370 margin_auto radius10 padding_sides70 padding_top40 padding_bottom45 block block_dark white">
					<div class="font14 semibold uppercase spacing15 title">Advanced</div>
					<div class="top30 inline_block font62 light text_left price clearfix">
						<span class="float_left font16">$</span>
						<span class="float_left">49</span>
						<span class="top10 left15 float_left font16">per user<br />per month</span>
					</div>
					<div class="top15">
						More storage, sharing features, and controls to take your Start plan to the next level.
					</div>
				</div>
				<div class="width250 margin_auto top35 block2">
					<ul class="nopadding text_left">
						<li class="bottom10"><span class="opacity3">1 TB of hosting space</span> <i class="fas fa-check font14 green float_right"></i></li>
						<li class="bottom10"><span class="opacity3">30 days of free backups</span> <i class="fas fa-check font14 green float_right"></i></li>
						<li class="bottom10"><span class="opacity3">Social integrations</span> <i class="fas fa-check font14 green float_right"></i></li>
						<li class="bottom10"><span class="opacity3">Advanced client billing</span> <i class="fas fa-times font14 red float_right"></i></li>
					</ul>
					<a href="#" class="top20 btn size50 width_full transparent_blue border border_blue radius6">Start Free Trial</a>
				</div>
			</div>
			<div class="col-lg-4 bottom70">
				<div class="max_width370 margin_auto radius10 padding_sides70 padding_top40 padding_bottom45 block">
					<div class="font14 semibold uppercase spacing15 title">Enterprise</div>
					<div class="top30 inline_block font62 light text_left price clearfix">
						<span class="float_left font16">$</span>
						<span class="float_left">99</span>
						<span class="top10 left15 float_left font16">per user<br />per month</span>
					</div>
					<div class="top15">
						All the features you need to keep your personal files safe, accessible, and easy to share.
					</div>
				</div>
				<div class="width250 margin_auto top35 block2">
					<ul class="nopadding text_left">
						<li class="bottom10"><span class="opacity3">2 TB of hosting space</span> <i class="fas fa-check font14 green float_right"></i></li>
						<li class="bottom10"><span class="opacity3">Unlimited backups</span> <i class="fas fa-check font14 green float_right"></i></li>
						<li class="bottom10"><span class="opacity3">Social integrations</span> <i class="fas fa-check font14 green float_right"></i></li>
						<li class="bottom10"><span class="opacity3">Advanced client billing</span> <i class="fas fa-check font14 green float_right"></i></li>
					</ul>
					<a href="#" class="top20 btn size50 width_full transparent_blue border border_blue radius6">Start Free Trial</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Contact 6 -->

<section class="contact_6 bg_white padding_top115 padding_bottom125">
	<div class="container nopadding max_width970 dark_blue">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="max_width370 block_left bottom80">
					<h2 class="font42 font_second light dark_gray">Get in Touch</h2>
					<div class="top20 font18 light text">
						We appreciate each customer and we are proud that 60% of clients come back to work with us again.
					</div>
					<a href="tel:+15555055050" class="top35 link green font_second font18 semibold"><i class="fas fa-phone right15"></i>+1 555 505 5050</a>
					<a href="mailto:info@designmodo.com" class="top10 link green font_second font18 semibold"><i class="fas fa-envelope right15"></i>info@designmodo.com</a>
					<div class="top50 hr width_full height1 light_gray"></div>
					<div class="top40 font28 font_second light dark_gray">Find Us on Map</div>
					<div class="top15 font18 light">Via Salaria, 243, 00199 Rome</div>
					<div class="top30 width_full height230 radius10 google_map"
						 data-marker="i/map-pin-red.png"
						 data-marker-size="30*40"
						 data-coords="41.922496, 12.501173"
						 data-zoom="15"
						 ></div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="max_width470 block_right">
					<h2 class="font42 font_second light dark_gray">You Can Mail Us</h2>
					<div class="top20 font18 light text">
						We are always looking for a next great project.
					</div>
					<form action="form-handler.php" method="post" class="top40 width_full padding_sides50 padding_top45 padding_bottom30 radius10">
						<div class="bottom35">
							<div class="bottom10 font14 semibold uppercase spacing20 text-left">E-mail</div>
							<input type="email" name="email" placeholder="Your e-mail" class="input width_full size50 border border_light_gray focus_green radius6 padding_sides20" />
						</div>
						<div class="bottom10 font14 semibold uppercase spacing20 text-left">Message</div>
						<textarea name="message" placeholder="Drop us a line" class="bottom35 height170 input border border_light_gray focus_green radius6 width_full padding_sides20"></textarea>
						<div class="bottom35 float_left input_block">
							<div class="bottom10 font14 semibold uppercase spacing20 text-left">Name</div>
							<input type="text" name="name" placeholder="Your name" class="input width_full size50 border border_light_gray focus_green radius6 padding_sides20" />
						</div>
						<button class="top35 float_right min_width70 btn size50 green font16 radius6"><i class="fas fa-paper-plane"></i></button>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>