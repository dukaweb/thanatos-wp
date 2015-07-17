<?php get_template_part('parts/header'); ?>

	<div class="main-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="jumbotron">
                                <h1>Sharing your experience</h1>
                                <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content</p>
                            </div>
                        </div>
                    </div>
                    <div class="row grid">
                		<?php if ( have_posts() ) : ?>

                			<?php while ( have_posts() ) : the_post(); ?>

                				<?php get_template_part( 'content', get_post_format() ); ?>

                			<?php endwhile; ?>

                			<?php pagination(); ?>

                		<?php else : ?>

                			<?php get_template_part( 'content', 'none' ); ?>

                		<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
	</div>

<?php get_template_part('parts/footer'); ?>
