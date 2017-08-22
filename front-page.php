<?php get_header(); ?>

    <!-- Jumbotron -->
    <div class="jumbotron">
        <div class="container">
            <img src="<?php bloginfo('url');?>/wp-content/uploads/TN-Header.png" class="img-responsive">
        </div>
    </div>

    <!-- Welcome Section -->
    <section id="welcome-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-header">
                    <h3>GREETINGS FROM THURSDAY NETWORK!</h3>
                </div>
                <div class="col-md-6 content-padding">
                    <p class="lead">Thank you for visiting the site of the premier young professionals service organization in the DC Metropolitan area!</p>
                    <p>
                        For over 23 years, Thursday Network has supported the programs of the Greater Washington Urban League by serving the diverse needs of Washington, D.C., Montgomery County and Prince George’s County, Md. Our mission is to provide a place for young professionals to support the GWUL and focus our energies on community service and economic empowerment,…
                    </p>
                    <p class="text-center">
                        <a href="<?php bloginfo('url');?>/welcome" class="btn btn-lg btn-danger">Learn More</a>
                    </p>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive" src="<?php bloginfo('url');?>/wp-content/uploads/group-pic.jpg" alt="">
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section -->

    <!-- About Section -->
    <section id="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-header text-right">
                    <h3>ABOUT US</h3>
                </div>
                <div class="col-md-6">
                    <div class="video-wrapper">
                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/139fog-SGrk?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6 content-padding">
                    <p>In 1910, the National Urban League (NUL) started a movement in the African-American community toward establishing economic self-reliance, parity, power and civil rights. Are you ready to join “The Movement”? If so, look no further than Thursday Network (TN). We are the Washington, DC and Suburban MD chapter of the National Urban League Young Professionals (NULYP).</p>

                    <p>Founded in 1992, Thursday Network is comprised of more than 130 young professionals committed to serving the Washington Metropolitan area through community programs and partnership that address the Empowerment Goals of the National Urban League. The mission of TN is to provide a forum for young adults, ages 21 – 40, to focus their energies on community service, professional development, and political involvement.
                    </p>

                    <p class="text-center">
                        <a href="<?php bloginfo('url');?>/about" class="btn btn-lg btn-danger">Continue Reading</a>
                    </p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section -->

    <!-- Recent News Section -->
    <section id="recent-news-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 section-header">
                    <h3>RECENT NEWS</h3>
                </div>
                <?php $recentPosts = new WP_Query([
   'post_type' => 'post',
   'post_status' => 'publish',
   'posts_per_page' => 4,
'ignore_sticky_posts' => 1
]); ?>
                    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="news-item">
                                <div class="news-item-img text-center">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if ( has_post_thumbnail() ) { ?>
                                            <?php the_post_thumbnail( 'thumbnail' ); ?>
                                                <?php } else{ ?>
                                                    <img class="img-responsive" src="<?php echo bloginfo( 'template_directory' ) . '/images/TN-Logo.png'; ?>" />
                                                    <?php } ?>
                                    </a>
                                </div>
                                <h4 class="news-item-meta"><i class="fa fa-calendar" aria-hidden="true"></i> <?php the_date('m-d-y'); ?> // <span class="news-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></h4>
                                <p class="news-item-excerpt">
                                    <?php the_excerpt(); ?>
                                </p>
                            </div>
                        </div>
                        <?php endwhile; ?>
            </div>
            <!-- /.row -->
            <div class="row text-center more-news">
                <a href="<?php bloginfo('url');?>/news" class="btn btn-lg btn-danger">More News</a>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section -->


    <!-- Support Section -->
    <section id="support-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-header text-center">
                    <h3>THANK YOU FOR YOUR SUPPORT!</h3>
                </div>
                <div class="col-md-12 text-center">
                    <img src="<?php get_template_directory_uri();?>/images/sponsor-amw-site-designs.png" class="responsive" width="200px"> <img src="images/sponsor-avalon-bay-communities.jpg" class="responsive" width="200px"> <img src="images/sponsor-network-digital.jpg" class="responsive" width="200px">
                </div>
                <div class="col-md-6 col-md-offset-3 well">
                    <p>Thursday Network relies on your generosity to continue serving our community. We greatly appreciate your contributions.</p>
                    <br/>
                    <div class="text-center"><a class="btn btn-lg btn-warning" href="<?php bloginfo('url');?>/donate">Donate</a></div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section -->
    <?php get_footer(); ?>
