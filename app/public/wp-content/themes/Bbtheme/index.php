<?php get_header(); ?>


    <section class="slider-style-six">
        <div class="container">
            <div class="row">


            <?php 
$args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
$the_query = new WP_Query( $args ); 

 while ( $the_query->have_posts() ) { $the_query->the_post();  ?>


<?php if(1 > $the_query-> current_post ) { ?>

                <div class="col-md-8 col-sm-12 col-xs-12 first-column">


               

                    <div class="single-item">
                        <div class="single-item-overlay">
                            <div class="img-box">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                <div class="overlay">
                                    <div class="inner-box">
                                        <div class="content blog-content-one">
                                            <div class="meta-text"><?php the_category(); ?></div>
                                            <div class="title"><h3><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></h3></div>
                                            <div class="date"><span>On</span> <?php the_date(); ?> &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> <?php the_author(); ?></div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 column">
                <?php } 


                 else if(3 > $the_query-> current_post){
                
                ?>

                

                        
                <div class="single-item">
                        <div class="single-item-overlay">
                            <div class="img-box">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                <div class="overlay">
                                    <div class="inner-box">
                                        <div class="content blog-content-one">
                                            <div class="meta-text"><?php the_category(); ?></div>
                                            <div class="title"><h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3></div>
                                            <div class="date"><span>On</span> <?php the_date(); ?> &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> <?php the_author(); ?></div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    


                    <?php } ?>


                    

                <?php }
                wp_reset_postdata();
                ?>
                </div>
            </div>
        </div>
    </section>



    
  <!-- carousel-style-one -->
  <section class="carousel-style-one mar-bottom-100">
        <div class="single-item-carousel-overlay owl-control-none">


        <?php 
$args = array( 'post_type' => 'post', 'posts_per_page' => 10,  'meta_key' => 'featured',
  'meta_value' => '1', );
$the_query = new WP_Query( $args ); 
?>

<?php while ( $the_query->have_posts() ) { $the_query->the_post(); ?>

            <div class="single-item">
                <div class="single-item-overlay">
                    <div class="img-box">
                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                        <div class="overlay">
                            <div class="inner-box">
                                <div class="content blog-content-one">
                                    <div class="meta-text"><?php the_category(); ?></div>
                                    <div class="title"><h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6></div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
<?php } ?>














        </div>
    </section>
    <!-- carousel-style-one end -->


    <!-- blog side -->
    <section class="blog-side blog-style-one blog-style-three">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 content-side">
                    <div class="blog-details-content">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="images/home4/6.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-six centred">
                                        <div class="top-content">
                                            <div class="meta-text"><a href="#">FASHION</a></div>
                                            <div class="title"><h4><a href="post1.html">Flying away on a wing</a></h4></div>
                                            <div class="date"><span>On</span>  JANUARY 27, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>The need no welfare states starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="images/home4/8.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-six centred">
                                        <div class="top-content">
                                            <div class="meta-text"><a href="#">MUSIC</a></div>
                                            <div class="title"><h4><a href="post1.html">Tropic port aboard this tiny</a></h4></div>
                                            <div class="date"><span>On</span>  JANUARY 30, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>Here over starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="images/home4/10.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-six centred">
                                        <div class="top-content">
                                            <div class="meta-text"><a href="#">TRAVEL</a></div>
                                            <div class="title"><h4><a href="post1.html">Finally got a piece of the pie</a></h4></div>
                                            <div class="date"><span>On</span>  February 10, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>Here over starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="single-item sp-six">
                                        <div class="single-item-overlay">
                                            <div class="img-box">
                                                <img src="images/home4/12.jpg" alt="">
                                                <div class="overlay">
                                                    <div class="inner-box">
                                                        <div class="content blog-content-one">
                                                            <div class="meta-text"><a href="#">Fashion</a></div>
                                                            <div class="title"><h4><a href="post1.html">Mister we could use a man</a></h4></div>
                                                            <div class="date"><span>On</span> February 28, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="images/home4/14.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-six centred">
                                        <div class="top-content">
                                            <div class="meta-text"><a href="#">MUSIC</a></div>
                                            <div class="title"><h4><a href="post1.html">Broomstick you can crawl on</a></h4></div>
                                            <div class="date"><span>On</span>  March 07, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>Here over starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="images/home4/7.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-six centred">
                                        <div class="top-content">
                                            <div class="meta-text"><a href="#">MUSIC</a></div>
                                            <div class="title"><h4><a href="post1.html">The kitchen and beans</a></h4></div>
                                            <div class="date"><span>On</span>  April 15, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>Here over starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="images/home4/9.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-six centred">
                                        <div class="top-content">
                                            <div class="meta-text"><a href="#">FASHION</a></div>
                                            <div class="title"><h4><a href="post1.html">Mister we could use a man</a></h4></div>
                                            <div class="date"><span>On</span>  May 27, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>The need no welfare states starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="images/home4/11.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-six centred">
                                        <div class="top-content">
                                            <div class="meta-text"><a href="#">MUSIC</a></div>
                                            <div class="title"><h4><a href="post1.html">Moving on up to the east side</a></h4></div>
                                            <div class="date"><span>On</span>  June 21, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>Here over starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="images/home4/13.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-six centred">
                                        <div class="top-content">
                                            <div class="meta-text"><a href="#">MUSIC</a></div>
                                            <div class="title"><h4><a href="post1.html">Ship set ground on the shore</a></h4></div>
                                            <div class="date"><span>On</span>  July 17, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>Here over starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="images/home4/15.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-six centred">
                                        <div class="top-content">
                                            <div class="meta-text"><a href="#">FASHION</a></div>
                                            <div class="title"><h4><a href="post1.html">Minnow would be lost</a></h4></div>
                                            <div class="date"><span>On</span>  August 15, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> JOHN HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>The need no welfare states starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="page-pagination page-pagination centred">
                            <li><a href="#"><i class="fa fa-angle-left"></i>&nbsp;&nbsp;&nbsp;PREV</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#" class="active">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">NEXT&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>


            
                <div class="col-md-3 col-sm-12 col-xs-12 sidebar-side">
                    <div class="sidebar-content">
                   
                    <?php if ( is_active_sidebar( 'author_sidebar_1' ) ) {?>
    
    <?php dynamic_sidebar( 'author_sidebar_1' ); } ?>

                      


                        </div>
                        <div class="sidebar-newsletter centred">
                            
                        <div class="sidebar-instagram">
                            <div class="sidebar-title">INSTAGRAM</div>
                            <ul class="img-list clearfix"> 
                                <li><figure class="img-box"><a href="#"><img src="images/home/i1.jpg" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="images/home/i2.jpg" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="images/home/i3.jpg" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="images/home/i4.jpg" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="images/home/i5.jpg" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="images/home/i6.jpg" alt=""></a></figure></li>
                            </ul>
                        </div>
                       
                        <div class="sidebar-img-content">
                            <div class="single-item">
                                <figure class="img-box"><img src="images/home/12.jpg" alt=""></figure>
                                 <div class="inner-box">
                                    <div class="content">
                                        <div class="meta-text"><a href="#">Travel</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-item">
                                <figure class="img-box"><img src="images/home/13.jpg" alt=""></figure>
                                 <div class="inner-box">
                                    <div class="content">
                                        <div class="meta-text"><a href="#">MUSIC</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog side end -->







    
<?php get_footer(); ?>
