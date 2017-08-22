<?php { get_header(); } ?>
    <!-- Page Content -->
    <div class="container page-wrapper">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">News
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Blog Post Loop -->
        <?php if( is_home() || is_archive() ) {  ?>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <!-- Blog Post Row -->
                    <div class="row" id="post-<?php the_ID(); ?>">
                        <div class="col-lg-1 text-center">
                            <p><i class="fa fa-calendar fa-2x"></i>
                            </p>
                            <p>
                                <?php the_date('M d, Y'); ?>

                            </p>
                        </div>
                        <div class="col-lg-5">
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) { ?>
                                    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'posts-page-thumb' ); $url = $src[0]; ?>
                                        <img src="<?php echo $url ?>" alt="" class="img-responsive">
                                        <?php } else{ ?>
                                            <img class="img-responsive" src="http://placehold.it/600x300" alt="">
                                            <?php } ?>
                            </a>
                        </div>
                        <div class="col-lg-5">
                            <h3>
                    <a title="<?php printf( esc_attr__( 'Permalink to %s', 'compass' ), the_title_attribute( 'echo=0' ) ); ?>" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                </h3>
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                            <a class="btn btn-danger" href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- /.row -->

                    <hr>
                    <?php endwhile; ?>

                        <!-- Pager -->
                        <div class="pagination col-lg-10 col-lg-offset-1 text-center">
                            <?php wpex_pagination(); ?>
                        </div>

                        <?php else : ?>
                            <article class="post error">
                                <h1 class="404">Nothing posted yet</h1>
                            </article>

                            <?php endif; ?>
                                <?php } //end is_home(); ?>



    </div>

    </div>
    <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php get_footer(); ?>
