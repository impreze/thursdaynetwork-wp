<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Thursday Network Young Professionals">
    <meta name="author" content="Sylvester Ezeani">
    <title>
        <?php bloginfo( 'name' ); ?> |
            <?php bloginfo( 'description' ); ?>
    </title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Web Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700' rel='stylesheet' type='text/css'>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

    <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php bloginfo('url');?>"><span>THURSDAY</span> <span class="red-network">NETWORK</span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php bloginfo('url');?>/about/">ABOUT US</a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url');?>/leadership/">LEADERSHIP</a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url');?>/committees/">COMMITTEES</a>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">MEMBERSHIP <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php bloginfo('url');?>/join/">JOIN</a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('url');?>/member-of-the-month/">MEMBER OF THE MONTH</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">EVENTS <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php bloginfo('url');?>/calendar/">CALENDAR</a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('url');?>/signature-programs/">SIGNATURE PROGRAMS</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">SUPPORT <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php bloginfo('url');?>/donate/">DONATE</a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('url');?>/sponsors-and-contributors/">SPONSORS AND CONTRIBUTORS</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url');?>/contact-us/">CONTACT</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
