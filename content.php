<?php
/**
 * Normal template
 */
?>
<div id="post-<?php the_ID(); ?>" class="item col-md-6 col-sm-12 item">
    <div class="thumbnail panel">
        <?php
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
            // the_post_thumbnail();
            echo '<img src="http://dep.mobi/img/14afb750-c8ea-45a5-9b22-e13c2f3ca912.jpg" class="img-reponsive">';
        } ?>
        <div class="caption">
            <?php the_title( sprintf( '<h3 class="blog-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
            <div>
                <time datetime="2015-06-16"><?php echo get_the_date(); ?></time>
                <span class="pull-right"><a href="/tag/html5/" class="tagged tag-html5">HTML5</a></span>
            </div>
            <div class="blog-post-content">
                <?php the_excerpt(); ?> 
            </div>
            <div class="blog-post-bottom-meta clearfix">
                <a href="<?php echo get_permalink(); ?>" class="pull-left btn btn-primary btn-lg">Read more</a>
            </div>
        </div>
    </div>
</div>