<?php get_header(); ?>
			
			<div id="content" class="clearfix">
			
				<div id="main" class="five columns clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
						

							<h2 class="single-title" itemprop="headline"><?php the_title(); ?></h2>
                            <?php the_post_thumbnail( 'wpbs-featured' ); ?>

							<p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
							
					
						</section> <!-- end article section -->
						
						<footer>
			
							<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ' ', '</p>'); ?>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1>Not Found</h1>
					    </header>
					    <section class="post_content">
					    	<p>Sorry, but the requested resource was not found on this site.</p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    			<div class="four columns">
                    <div id="tivi-guide">
                    </div>
                    <script type="text/javascript">
                        (function(d) {
                            var url = "http://www.guide.tivi.co.ke/javascript/embed.js";
                            var guide = document.createElement('script'); guide.type = 'text/javascript'; guide.async = true;
                            guide.src = url;
                            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(guide);

                        }) (document);
                    </script>
    			</div>
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>