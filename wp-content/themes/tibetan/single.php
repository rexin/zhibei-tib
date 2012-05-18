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

		 <?php if(have_posts()) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

		 <div class="cat_column page_coln">
			<h1><? the_title();?></h1>
			<div class="line6"></div>
			<p>
				  <? if(get_field('mid')==2):?>
				  <div id="apDiv2">
					 <div id="apDiv1">
						<ul id="MenuBar1" class="MenuBarVertical">
						   <!--节目单开始。-->
									<?php
										$str = get_the_content();
										$str = strip_tags($str);
										$i=0;
										foreach(explode("\n", $str) as $rs){
											$rss[]=explode("|", $rs);
											echo "<li><a href='".get_bloginfo('stylesheet_directory')."/inc/mv.php?iid={$rss[$i][1]}' target='mvp'>{$rss[$i][0]}</a></li>";
											$i++;
							  }?>
						   <!--节目单结束-->
						</ul>
					 </div>
					 <div id="apDiv3">
						<iframe src='<?php bloginfo('stylesheet_directory'); ?>/inc/mv.php' name='mvp' width='460' height='345' scrolling='no' frameborder='0'></iframe>
					 </div>
				  </div>
					 <? else:?>
					 <? the_content();?>
				  <?php endif; ?>
			</p>

			<div class="clear"></div>
		 </div>
			<?php endwhile; ?>
		 <?php endif; ?>
	  <nav id="nav-single">
	  <h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
	  <span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
	  <span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
	  </nav><!-- #nav-single -->
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
</div>
<?php get_footer(); ?>
