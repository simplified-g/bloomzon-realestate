<?php

get_header(); 

if( have_posts() ) :

    while( have_posts() ) : the_post();

        do_action( 'travelers_blog_before_body', $post->ID ); ?>

        <section class="page-cover">

            <div class="container">

                <div class="row">
				<div class="col-sm-8">
                  
					<div class="col-xs-12 single_page_image_wrapper">
						<?php 
						the_post_thumbnail( 'travelers_blog_detail' , 
										   array( 
											   'alt' => esc_attr( get_the_title() ) , 
											   'title' => esc_attr( get_the_title() ) 
										   ) 
										  ); ?>                    	 
					</div>
					
					<?php 
                    $class = '';
                    if( has_post_thumbnail() ) { ?>
                        <div class="col-xs-12">
                        <?php 
                    } else { 
                        $class = 'cover-content-full'; ?> 
                        <div class="col-sm-9 text-center single-page-no-image"> 
                        <?php 
                    } ?>

                        <div class="cover-content <?php echo esc_attr($class); ?>" style="padding-top:40px;">

                            <div class="single-category">

                                <?php 

                                travelers_blog_get_first_category(); 

                                do_action( 'travelers_blog_before_title_detail_page', $post->ID );
                                 
                                ?>
                                
                            </div><br/>

                            <h2><?php the_title(); ?></h2><br/>

                            <div class="author-detail">
                                <?php travelers_blog_get_author_detail(); ?>
                            </div>

                        </div>

                    </div>
                   
                </div>
				</div>
				<div class="col-sm-4">
					<?php 
					//get_sidebar(); 
					?>
				</div>
                    
            </div>
        </section>

        <section class="item-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10">

                        <div class="item-wrapper" id="content">
                            <div class="item-detail">
                                <?php the_content(); ?>
                            </div>
                            <div class="author-profile">
                                <?php travelers_blog_author_profile(); ?>
                            </div>
                            <div class="item-tags">
                                <?php travelers_blog_get_tags(); ?> 
                            </div> 
                            <?php 
                            if ( comments_open() || get_comments_number() ) : 
                                comments_template(); 
                            endif; 
                            ?>
                        </div>
						<br/><br/><br/>
                    </div>
                </div>
            </div>
			
        </section>

        <!--<section class="detail-page-post">
            <div class="container">
                <div class="col-sm-12">
                    <div class="post-wide">
                        <div class="row">
                            <?php $ignore_post_id = travelers_blog_detail_category_post(); ?>
                        </div>
                    </div>
                    <div class="post-small">
                        <div class="row">
                            <?php travelers_blog_detail_category_posts( $ignore_post_id ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>--->

        <?php

    endwhile;

endif;

get_footer();