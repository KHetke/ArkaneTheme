<?php
/**
 * Arkane2013
 */

get_header(); ?>

		<div class="page row-fluid">
			<div class="content span8">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<header class="post-header">
				<?php if ( has_post_thumbnail() ) { ?>
					<figure class="post-header-figure">
						<?php the_post_thumbnail('large'); ?>
					</figure>
					<h3 class="post-h3-figure"><a href="<?php the_permalink(); ?>">
					<?php the_title(); ?></a></h3>
				<?php
				}
				else { ?>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php } ?>
				</header>
				<article class="post-content">
					<?php the_content(); ?>
				</article>
				<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched the description.'); ?></p>
				<?php endif; ?>
			</div>
			<div class="sidebar span4">
				<?php get_sidebar(); ?>
			</div>
		</div>
<?php get_footer(); ?>