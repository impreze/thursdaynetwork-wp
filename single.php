<?php get_header(); ?>
    <!-- Page Content -->
    <div class="container page-wrapper">
        <?php if( is_single()) { ?>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-title"><?php the_title(); ?>
                </h1>
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- Page Content -->
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <!-- /.row -->
                    <?php endwhile; ?>
                        <?php endif; ?>

                            <?php } //end is_page(); ?>
    </div>
    <!-- /.container -->
    <?php get_footer(); ?>
