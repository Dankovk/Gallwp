<? /*
Template Name: Archives
*/ ?>
<?php get_header() ?>
	<div class="layout-header header-static">
		<div class="nav">
			<div class="the-studio">
				<a href="#"> <span class="bold">THEO</span><span>STUDIO</span></a>
			</div>
			<div class="artists">
				<a href="#">
					<span>ARTISTS</span>
				</a>
			</div>
			<div class="contact">
				<a href="#">
					<span style="color: transparent">CONTACT</span>
				</a>
			</div>
			<div class="basket">
				<a href="#">
					<span class="ic-basket"></span>
				</a>
			</div>
		</div>
	</div>

	<div class="layout-content single-art-content">
		<div class="layout-container art-container post-wrap">
			<?php while(have_posts()) : the_post(); ?>
			<div class="archive-header">
				<h4><?php the_title(); ?></h4>
			</div>
			<div class="archive-items-wrap">
				<?php $myposts = get_posts('numberposts=100&offset=0');
				foreach($myposts as $post) :
				?>

				<div class="archive-item">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<?php the_content(); ?>
				</div>

				<?php endforeach; ?>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
<?php get_footer(); ?>