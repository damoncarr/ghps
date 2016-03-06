<?php
/*
Template Name: Home Template
*/
get_header(); ?>
<?php while ( have_posts( ) ) : the_post(); ?>
<main role="main" id="main">
	<div class="twocolumns">
		<div class="container">
			<div class="wrap-holder">
				<div class="section-1">
					<?php if($box1_pic=get_field("box1_pic","options")):?>
					<a href="<?php the_field("box1_link","options")?>">
						<div class="img-holder">
							<picture>
								<source srcset="<?php echo $box1_pic["sizes"]["thumbnail_465x356"];?>, <?php echo $box1_pic["sizes"]["thumbnail_930x712"];?> 2x" media="(max-width: 767px)">
								<img src="<?php echo $box1_pic["sizes"]["thumbnail_760x476"];?>" alt="<?php echo $box1_pic["alt"]?>">
							</picture>
							<div class="inner-text">
								<?php if($box1_text=get_field("box1_text","options")):?>
									<h1><?php echo $box1_text;?></h1>
								<?php endif;?>
								<?php if($box1_sub_text=get_field("box1_sub_text","options")):?>
									<div class="text-line">
										<?php echo $box1_sub_text?>
									</div>
								<?php endif;?>
							</div>
						</div>
					</a>
					<?php endif;?>
					<div class="color-boxes">
						<div class="color-box img-box">
							<div class="holder">
								<?php if($box2_link=esc_url(get_field("box2_link","options"))):?>
									<a href="<?php echo $box2_link;?>">
								<?php endif;?>
										<?php if($box2_pic=get_field("box2_pic","options")):?>
											<picture>
												<source media="(max-width: 767px)" srcset="<?php echo $box2_pic["sizes"]["thumbnail_620x619"];?>, <?php echo $box2_pic["sizes"]["thumbnail_1240x1238"];?> 2x">
												<source media="(max-width: 1023px)" srcset="<?php echo $box2_pic["sizes"]["thumbnail_248x248"];?>">
												<img src="<?php echo $box2_pic["sizes"]["thumbnail_246x248"];?>" height="248" width="248" alt="<?php echo $box2_pic["alt"];?>" >
											</picture>
										<?php endif;?>
										<?php if($box2_text=get_field("box2_text","options")):?>
											<div class="img-caption">
												<?php echo $box2_text;?>
											</div>
										<?php endif;?>
								<?php if($box2_link):?>
									</a>
								<?php endif;?>
							</div>
						</div>
						<?php if($box3_text=get_field("box3_text","options")):?>
							<div class="color-box red-bg">
								<a href="<?php the_field("box3_link","options");?>" class="holder">
									<?php echo $box3_text;?>
								</a>
							</div>
						<?php endif;?>
						<?php if($post_on_home=get_field("post_on_home","options")):?>
							<?php
								$post=get_post($post_on_home);
								switch ($post->post_type):
									case "video":$class=" video-type";break;
									case "photo":$class=" photo-type";break;
									default:$class="";break;
								endswitch;
							?>
							<div class="color-box img-box show-mobile hide-widescreen<?php echo $class?>">
								<div class="holder">
									<?php if($box_wide_link=get_the_permalink($post_on_home)):?>
										<a href="<?php echo $box_wide_link?>">
									<?php endif;?>
										<?php
											$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_on_home ), 'thumbnail_505x504' );
											$image_mobile = wp_get_attachment_image_src( get_post_thumbnail_id( $post_on_home ), 'thumbnail_620x616' );
											$image_mobile2= wp_get_attachment_image_src( get_post_thumbnail_id( $post_on_home ), 'thumbnail_1240x1232' );
										?>
										<picture>
											<source srcset="<?php echo $image_mobile[0]?>, <?php echo $image_mobile2[0]?> 2x" media="(max-width: 767px)">
											<source srcset="<?php echo $image[0]?>" media="(max-width: 1024px)">
											<img src="<?php echo $image[0]?>" alt="<?php echo get_post_meta( get_post_thumbnail_id( $post_on_home), '_wp_attachment_image_alt', true );?>">
										</picture>
										<div class="img-caption">
											<h3><?php echo get_the_title($post_on_home);?></h3>
										</div>
									<?php if($box_wide_link):?>
										</a>
									<?php endif;?>
								</div>
							</div>
						<?php endif;?>
						<?php if($box4_text=get_field("box4_text","options")):?>
							<div class="color-box gray-bg hide-mobile">
								<a href="<?php the_field("box4_link","options");?>" class="holder">
									<?php echo $box4_text;?>
								</a>
							</div>
						<?php endif;?>
					</div>
				</div>
				<div class="section-2">
					<div class="color-boxes">
						<?php if($box5_text=get_field("box5_text","options")):?>
							<div class="color-box primary-box">
								<a href="<?php the_field("box5_link","options");?>" class="holder">
									<?php echo $box5_text;?>
								</a>
							</div>
						<?php endif;?>
						<?php if($box6_text=get_field("box6_text","options")):?>
							<div class="color-box gray-bg show-mobile">
								<a href="<?php the_field("box6_link","options");?>" class="holder">
									<?php echo $box6_text;?>
								</a>
							</div>
						<?php endif;?>
						<?php if($box7_text=get_field("box7_text","options")):?>
							<div class="color-box info-box blue-bg">
								<a href="<?php the_field("box7_link","options");?>" class="holder">
									<?php echo $box7_text;?>
								</a>
							</div>
						<?php endif;?>
						<?php if($post_on_home=get_field("post_on_home","options")):?>
							<div class="img-box-holder">
								<?php
									$post=get_post($post_on_home);
									switch ($post->post_type):
										case "video":$class=" video-type";break;
										case "photo":$class=" photo-type";break;
										default:$class="";break;
									endswitch;
								?>
								<div class="color-box img-box big-box<?php echo $class?>">
									<div class="holder">
										<a href="<?php echo get_the_permalink($post_on_home);?>">
											<?php
												$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_on_home ), 'thumbnail_505x504' );
												$image_mobile = wp_get_attachment_image_src( get_post_thumbnail_id( $post_on_home ), 'thumbnail_620x616' );
												$image_mobile2= wp_get_attachment_image_src( get_post_thumbnail_id( $post_on_home ), 'thumbnail_1240x1232' );
											?>
											<picture>
												<source srcset="<?php echo $image_mobile[0]?>, <?php echo $image_mobile2[0]?> 2x" media="(max-width: 767px)">
												<source srcset="<?php echo $image[0]?>" media="(max-width: 1024px)">
												<img src="<?php echo $image[0]?>" alt="<?php echo get_post_meta( get_post_thumbnail_id( $post_on_home), '_wp_attachment_image_alt', true );?>">
											</picture>
											<div class="img-caption">
												<h3><?php echo get_the_title($post_on_home);?></h3>
											</div>
										</a>
									</div>
								</div>
							</div>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php endwhile; ?>
<?php get_footer(); ?>