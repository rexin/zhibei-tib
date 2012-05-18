<?php get_header(); ?>
<!--左边栏-->
<div class="div_left">
	<img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.jpg" />
	<div class="line1"></div>
	<div class="search"><?php get_search_form(); ?></div>
	<div class="links">
		<ul>
			<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
		</ul>
	</div>
	<div class="line2"></div>
</div>
<!--顶部条幅-->
<div class="banner"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/banner.jpg"/></div>
<!--主区-->
<div class="div_main">

	<div class="cta1">
		<!--顶部文字-->
		<div class="top border_top">མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།མི་ཕམ་གསུང་འབུམ།</div>
		<!--导航条-->
		<div class="navbar"><nav id="access" role="navigation">
			<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
			<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
			<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
			<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
			<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav></div>
		<!--中部两个分栏-->
		<!--分栏1-->

		<div class="cta1_1">
			<div class="column coln1">
				<h1><ul><?php wp_list_categories('use_desc_for_title=0&include=3&title_li=');?></ul></h1>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/coln1.jpg" /><p>
					མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་
				</p>
				<ul>
					<?php
						global $post;
						$myposts = get_posts('numberposts=2&offset=0&category=3');
						foreach($myposts as $post) :
					?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endforeach; ?>
				</ul>

				<div class="clear"></div>
			</div>

			<div class="column coln2">
				<h1><ul><?php wp_list_categories('use_desc_for_title=0&include=4&title_li=');?></ul></h1>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/coln2.jpg" />
				<p>མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།</p>
				<ul>

					<?php
						global $post;
						$myposts = get_posts('numberposts=2&offset=0&category=4');
						foreach($myposts as $post) :
					?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endforeach; ?>
				</ul>

				<div class="clear"></div>
			</div>


			<div class="column coln3">
				<h1><ul><?php wp_list_categories('use_desc_for_title=0&include=7&title_li=');?></ul></h1>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/coln3.jpg" />
				<p>མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།
					མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང
				</p>
				<ul>
					<?php
						global $post;
						$myposts = get_posts('numberposts=2&offset=0&category=7');
						foreach($myposts as $post) :
					?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endforeach; ?>
				</ul>

			</div>
		</div>
		<!--分栏2-->
		<div class="cta1_2">

			<div class="column coln4">
				<h1><ul><?php wp_list_categories('use_desc_for_title=0&include=5&title_li=');?></ul></h1>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/coln4.jpg" />
				<p>མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།
				མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་ག།།</p>
				<ul>
					<?php
						global $post;
						$myposts = get_posts('numberposts=2&offset=0&category=5');
						foreach($myposts as $post) :
					?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="column coln1">
				<h1><ul><?php wp_list_categories('use_desc_for_title=0&include=6&title_li=');?></ul></h1>
				<p>མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།
				མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕ</p>
				<ul>
					<?php
						global $post;
						$myposts = get_posts('numberposts=2&offset=0&category=6');
						foreach($myposts as $post) :
					?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="column coln5">
				<div id="bgcolor2"><h1><ul><?php wp_list_categories('use_desc_for_title=0&include=9&title_li=');?></ul></h1></div>
				<p>མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།
				མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕ</p>
				<ul>
					<?php
						global $post;
						$myposts = get_posts('numberposts=2&offset=0&category=9');
						foreach($myposts as $post) :
					?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<!--右侧-->
	<div class="cta2">
		<div class="glmy"><h1>ལེགས་བཤད་གསེར་གྱི་ཐིག་པ།</h1><p>མཁན་པོ་དང་བླ་མ་རྣམ་པའི་ལེགས་བཤད་གསེར་གྱི་ཕྲེང་བ་དགེ་བར་འགོད་པ།</p></div>
		<div class="line3"></div>
		<div class="nav_rt"><span class="spn1"><a href="./?cat=9">སྲོལ་རྒྱུན་རིག་གནས།</a></span><span class="spn2"><a href="./?cat=7">དགེ་ལས་ཁོར་སྲུང་།</a></span></div>
		<!--分栏3-->
		<div class="column coln4 news">
			<!--最新信息-->
			<h1>གསར་འགྱུར་གནས་ཚུལ།</h1>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/coln5.jpg" />
			<?php
				global $post;
				$myposts = get_posts('numberposts=20&offset=0&category=11');
				foreach($myposts as $post) :
			?>
			<p><?php the_modified_date('m-j'); ?> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php the_excerpt(); ?></p>
			<?php endforeach; ?>
		</div>
		<div class="clear"></div>
	</div>

	<!--底部-->
	<div class="clear"></div>
	<div class="column_ft">
		<div class="coln_ft1"><p>མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུ</p></div>
		<div class="coln_ft2"><p>མ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུང་འབུམ།།མ	།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུ།།མི་ཕམ་གསུང་འབུམ།།མི་ཕམ་གསུ</p></div>
		<div class="coln_ft3"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/coln_ft.jpg"></div>
	</div>
</div>

<?php get_footer(); ?>
