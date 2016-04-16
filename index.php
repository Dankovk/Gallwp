<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package activello
 */
get_header(); ?>
	<div class="modal fade" id="modal-blog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog archive-modal">
			<div class="modal-content">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam deserunt dolorem dolores ducimus explicabo impedit ipsam ipsum iusto labore laudantium, possimus quam rem repellat reprehenderit rerum vel velit voluptatum!
			</div>
		</div>
	</div>
	<!--[if lt IE 10]>
	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->


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

	<div class="layout-content main-page-content">
		<img src="<?php echo get_template_directory_uri() ?>/images/main-page-bg.jpg" class="bg-img main-page-bg">
		<div class="layout-container-main-page">
			<div class="head-naming">
				<h1 class="logo-naming ">THEODORACOPULOS</h1>
			</div>
			<div class="blocks-wrap-main-page">
				<div class="row divider">
					<div data-wow-duration="2s" class="notes wow zoomIn">
						<h3 data-toggle="modal" data-target="#modal-blog">notes</h3>
						<div class="notes-content">
							<div class="note photo-note">

							</div>
						</div>
					</div>
					<div data-wow-duration="2s" class="recent-works wow zoomIn">
						<h3>Recent works</h3>
						<div class="recent-works-content">
							<div class="the-most-recent-work">
								<div class="work-pic">
									<img src="<?php echo get_template_directory_uri() ?>/images/small-art.png" alt="">
								</div>
								<div class="work-descr">
									<div class="name">
										<span>Name of the art</span>
									</div>
									<div class="artist">
										<span>Artist</span>
									</div>
									<div class="description">
										<span>Some information about the art love how @craigmod’s website uses my FF MetaSerif and </span>
									</div>
									<div class="when-added">
										<span>Added 7 hrs ago</span>
									</div>
								</div>
							</div>
							<div class="latest-ten-works">
								<p>Latest 10 works</p>
								<ul class="works-slider">
									<li>
										<img src="<?php echo get_template_directory_uri() ?>/images/tiny-pic.png" alt="">
										<div class="descr">
											<div class="name">
												<span>Name of the Art</span>
											</div>
											<div class="artist">
												<span>Artist</span>
											</div>
											<div class="when-added">
												<span>17 hrs ago</span>
											</div>
										</div>
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri() ?>/images/tiny-pic.png" alt="">
										<div class="descr">
											<div class="name">
												<span>Name of the Art</span>
											</div>
											<div class="artist">
												<span>Artist</span>
											</div>
											<div class="when-added">
												<span>17 hrs ago</span>
											</div>
										</div>
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri() ?>/images/tiny-pic.png" alt="">
										<div class="descr">
											<div class="name">
												<span>Name of the Art</span>
											</div>
											<div class="artist">
												<span>Artist</span>
											</div>
											<div class="when-added">
												<span>17 hrs ago</span>
											</div>
										</div>
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri() ?>/images/tiny-pic.png" alt="">
										<div class="descr">
											<div class="name">
												<span>Name of the Art</span>
											</div>
											<div class="artist">
												<span>Artist</span>
											</div>
											<div class="when-added">
												<span>17 hrs ago</span>
											</div>
										</div>
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri() ?>/images/tiny-pic.png" alt="">
										<div class="descr">
											<div class="name">
												<span>Name of the Art</span>
											</div>
											<div class="artist">
												<span>Artist</span>
											</div>
											<div class="when-added">
												<span>17 hrs ago</span>
											</div>
										</div>
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri() ?>/images/tiny-pic.png" alt="">
										<div class="descr">
											<div class="name">
												<span>Name of the Art</span>
											</div>
											<div class="artist">
												<span>Artist</span>
											</div>
											<div class="when-added">
												<span>17 hrs ago</span>
											</div>
										</div>
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri() ?>/images/tiny-pic.png" alt="">
										<div class="descr">
											<div class="name">
												<span>Name of the Art</span>
											</div>
											<div class="artist">
												<span>Artist</span>
											</div>
											<div class="when-added">
												<span>17 hrs ago</span>
											</div>
										</div>
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri() ?>/images/tiny-pic.png" alt="">
										<div class="descr">
											<div class="name">
												<span>Name of the Art</span>
											</div>
											<div class="artist">
												<span>Artist</span>
											</div>
											<div class="when-added">
												<span>17 hrs ago</span>
											</div>
										</div>
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri() ?>/images/tiny-pic.png" alt="">
										<div class="descr">
											<div class="name">
												<span>Name of the Art</span>
											</div>
											<div class="artist">
												<span>Artist</span>
											</div>
											<div class="when-added">
												<span>17 hrs ago</span>
											</div>
										</div>
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri() ?>/images/tiny-pic.png" alt="">
										<div class="descr">
											<div class="name">
												<span>Name of the Art</span>
											</div>
											<div class="artist">
												<span>Artist</span>
											</div>
											<div class="when-added">
												<span>17 hrs ago</span>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row divider">
					<div data-wow-duration="2s" class="events wow zoomIn">
						<h3>Events</h3>
						<div class="events-text">
							<p>I love how @craigmod’s website uses my FF MetaSerif and I love how @craigmod’s website uses my FF MetaSerif and </p>
						</div>
						<div class="archive">
							<h4>archive</h4>
						</div>
					</div>
					<div data-wow-duration="2s" class="new-artist wow zoomIn">
						<h3>New Artist</h3>
						<div class="new-artist-text">
							<p>I love how @craigmod’s website uses my FF MetaSerif and defaults to MetaSans on mobile. craigmod.com/sputnik/leica</p>
						</div>
						<div class="new-artist-pic">
							<img src="<?php echo get_template_directory_uri() ?>/images/new-artist-pic.png" alt="">
						</div>
					</div>
				</div>
				<div class="row divider" style="padding-top: 72px">
					<div class="guest-book wow zoomIn">
						<h3 class="centered">guest book</h3>
						<div class="comments-wrapper">
							<ul class="guest-book-slider">
								<li>
									<div class="guest-text">
										<span>I love how @craigmod’s website uses my FF MetaSerif and defaults to MetaSans on mobile</span>
									</div>
									<div class="guest-author">
										<span>James Harbor</span>
									</div>
								</li>
								<li>
									<div class="guest-text">
										<span>I love how @craigmod’s website uses my FF MetaSerif and defaults to MetaSans on mobile</span>
									</div>
									<div class="guest-author">
										<span>James Harbor</span>
									</div>
								</li>
								<li>
									<div class="guest-text">
										<span>I love how @craigmod’s website uses my FF MetaSerif and defaults to MetaSans on mobile</span>
									</div>
									<div class="guest-author">
										<span>James Harbor</span>
									</div>
								</li>
								<li>
									<div class="guest-text">
										<span>I love how @craigmod’s website uses my FF MetaSerif and defaults to MetaSans on mobile</span>
									</div>
									<div class="guest-author">
										<span>James Harbor</span>
									</div>
								</li>
								<li>
									<div class="guest-text">
										<span>I love how @craigmod’s website uses my FF MetaSerif and defaults to MetaSans on mobile</span>
									</div>
									<div class="guest-author">
										<span>James Harbor</span>
									</div>
								</li>
								<li>
									<div class="guest-text">
										<span>I love how @craigmod’s website uses my FF MetaSerif and defaults to MetaSans on mobile</span>
									</div>
									<div class="guest-author">
										<span>James Harbor</span>
									</div>
								</li>
								<li>
									<div class="guest-text">
										<span>I love how @craigmod’s website uses my FF MetaSerif and defaults to MetaSans on mobile</span>
									</div>
									<div class="guest-author">
										<span>James Harbor</span>
									</div>
								</li>
								<li>
									<div class="guest-text">
										<span>I love how @craigmod’s website uses my FF MetaSerif and defaults to MetaSans on mobile</span>
									</div>
									<div class="guest-author">
										<span>James Harbor</span>
									</div>
								</li>
								<li>
									<div class="guest-text">
										<span>I love how @craigmod’s website uses my FF MetaSerif and defaults to MetaSans on mobile</span>
									</div>
									<div class="guest-author">
										<span>James Harbor</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row divider">
					<div data-wow-duration="2s" class="form wow zoomIn" style="margin-top: 270px;">
						<h3>contact</h3>
						<form action="post">
							<div class="form-group floated">
								<input class="form-control" placeholder="Name" type="text">
							</div>
							<div class="form-group floated">
								<input class="form-control" placeholder="Last name" type="text">
							</div>
						</form>
						<div class="form-group">
							<input class="form-control" placeholder="Email" type="text">
						</div>
						<div class="form-group">
							<textarea class="form-control" placeholder="Comment" type="text"></textarea>
						</div>
						<button class="btn">SUBMIT</button>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php get_footer(); ?>