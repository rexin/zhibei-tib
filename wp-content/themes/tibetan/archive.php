<?php get_header(); ?>
<!--左边栏-->
<div class="div_left">
	<img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.jpg" />
	<div class="line1"></div>
	<div class="search"><?php get_search_form(); ?></div>

</div>
<!--顶部条幅-->
<div class="banner"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/cat_banner.jpg"/></div>
<!--主区-->
<div class="div_main">

<div class="cta1">
	<!--导航条-->
	<div class="navbar border_top"><nav id="access" role="navigation">
		<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
		<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
		<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
		<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
		<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</nav></div>
	<!--顶部文字-->
	<div class="line4"></div>
	<!--中部-->

	<section id="primary">
	<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

					<header class="page-header">
			<h1 class="page-title">
					<?php if ( is_day() ) : ?>
							<?php printf( __( 'Daily Archives: %s', 'twentyeleven' ), '<span>' . get_the_date() . '</span>' ); ?>
						<?php elseif ( is_month() ) : ?>
						<?php printf( __( 'Monthly Archives: %s', 'twentyeleven' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyeleven' ) ) . '</span>' ); ?>
						<?php elseif ( is_year() ) : ?>
						<?php printf( __( 'Yearly Archives: %s', 'twentyeleven' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'twentyeleven' ) ) . '</span>' ); ?>
						<?php else : ?>
						<?php _e( 'Blog Archives', 'twentyeleven' ); ?>
					<?php endif; ?>
			</h1>
				</header>
				<div class="line6"></div>


				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

			<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
				get_template_part( 'content', get_post_format() );
			?>
				<div class="line5"></div>
				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

				<?php else : ?>

				<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
				<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
				</header><!-- .entry-header -->

			<div class="entry-content">
				<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
				<?php get_search_form(); ?>
			</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

	</div><!-- #content -->
	</section><!-- #primary -->

	<div class="clear"></div>
</div>


<!--右侧-->
<div class="cta2">
	<div class="nav_rt border_top"><span class="spn1"><a href="./?cat=9">སྲོལ་རྒྱུན་རིག་གནས།</a></span><span class="spn2"><a href="./?cat=7">དགེ་ལས་ཁོར་སྲུང་།</a></span></div>
	<!--分栏3-->
	<div class="column coln4 cat_title">
		<!--本分类的内容列表-->
		<h1>གསར་འགྱུར་གནས་ཚུལ།</h1>
		<?php
			global $post;
			$myposts = get_posts('numberposts=10&offset=0&category='.$cat);
			foreach($myposts as $post) :
		?>
		<p><?php the_modified_date('m-j'); ?> <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
		<?php if(get_field('mid')!="0") echo "  ཕབ་ལེན།	";?></a>
		</p>
		<?php endforeach; ?>
	</div>
	<div class="clear"></div>
</div>

<!--底部-->
<div class="clear"></div>
<div style="width:100%;height:100px";></div>
<div class="line7"></div>

<?php get_footer(); ?>
