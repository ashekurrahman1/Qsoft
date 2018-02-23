<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <?php wp_head(); ?>
</head>

<body>
    <!-- Main-Menu-Area -->
    <nav class="mainmenu-area">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <h3 class="site-title" >
                    <a href="<?php echo home_url('/'); ?>">
                        <?php bloginfo('title'); ?>
                    </a>
                </h3>
            </div>
            <div class="collapse navbar-collapse" id="primary_menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main-Menu-Area-End -->


    <!-- Site-Header -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>
                        <?php bloginfo('title'); ?>
                    </h1>
                    <h5 class="upper">
                        <?php bloginfo('description'); ?>
                    </h5>
                </div>
            </div>
        </div>
    </header>
    <!-- Site-Header-End -->


    <!-- Main-Content -->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <?php
                        if(have_posts()):
                        while(have_posts()): the_post();
                    ?>
                        <article class="post-single">
                            <div class="post-media">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="post-body">
                                <h2 class="post-title">
                                    <?php the_title(); ?>
                                </h2>
                                <ul class="post-meta">
                                    <li>
                                        <i class="fa fa-user"></i>
                                        <?php the_author_posts_link(); ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-clock-o"></i>
                                        <?php the_date(get_option('date_format')); ?>
                                        <?php esc_html_e('at','qsoft'); ?>
                                        <?php the_time(get_option('time_format')) ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-folder-open"></i>
                                        <?php the_category(','); ?>
                                    </li>
                                </ul>
                                <div class="post-content">
                                    <?php
                                        if( !is_singular() ):
                                            wpautop(the_excerpt()); ?>
                                            <a class="readmore" href="<?php the_permalink(); ?>"><i class="fa fa-long-arrow-right"></i></a>
                                        <?php else: ?>
                                            <?php wpautop(the_content()); ?>
                                        <?php endif; ?>
                                </div>
                            </div>
                        </article>

                        <?php
                        endwhile;
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Main-Contant-End -->




    <?php wp_footer(); ?>
</body>

</html>