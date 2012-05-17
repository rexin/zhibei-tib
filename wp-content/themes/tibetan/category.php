<?php get_header(); ?>
<!--左边栏-->
<div class="div_left">
	<img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.jpg" />
	<div class="line1"></div>
	<div class="search"><?php get_search_form(); ?></div>
	<div class="cat_desc">
		<h1><?php single_cat_title();?></h1>
		<p><?php echo category_description(); ?></p>

			<?php if(get_category_children($cat) != ""):?>
			<ul>
				<?php
				wp_list_categories('orderby=id&title_li=&hide_empty=0&depth=3&child_of='.$cat); ?>
			</ul>
			<?php endif;?>


	</div>

</div>
<!--顶部条幅-->
<div class="banner"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/cat_banner<? echo $cat;?>.jpg"/></div>
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
	<div class="top">མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།</div>
	<div class="line4"></div>
	<div class="line5"></div>
	<!--中部-->
	<div class="cat_column cat_coln_1">
		<h1>མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་</h1>
		<div class="line6"></div>
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/cat_coln1.jpg"/>
		<p>མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་</p>
		<div class="clear"></div>
	</div>
	<div class="cat_column cat_coln_2">
		<h1>མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་</h1>
		<div class="line6"></div>
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/cat_coln2.jpg"/>
		<p>མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་</p>
		<div class="clear"></div>
	</div>
	<div class="cat_column cat_coln_3">
		<h1>མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་</h1>
		<div class="line6"></div>
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/cat_coln3.jpg"/>
		<p>མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་</p>
		<div class="clear"></div>
	</div>
	<div class="cat_column cat_coln_3">
		<h1>མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་</h1>
		<div class="line6"></div>
		<p>མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་</p>
		<div class="clear"></div>
	</div>
	<?php $i=1;if(have_posts()) : ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<? if (get_field('mid')!=0) continue;?>
		<div class="cat_column cat_coln_<? echo $i;?>">
			<h1><? the_title();?></h1>
			<div class="line6"></div>
			<p><? the_content();?></p>
			<p><?php the_tags(); ?></p>
			<div class="clear"></div>
		</div>
			<?php $i++;endwhile; ?>
		<?php endif; ?>
	<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if (  $wp_query->max_num_pages > 1 ) : ?>
		<div id="nav-below" class="navigation">
			<?php wp_pagenavi(); ?>
		</div><!-- #nav-below -->
		<?php endif; ?>
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
			$myposts = get_posts('numberposts=20&offset=0&category='.$cat);
			foreach($myposts as $post) :
		?>
		<p><?php the_modified_date('m-j'); ?> <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
		<?php if(get_field('mid')!=0) echo "  ཕབ་ལེན།	";?></a>
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
