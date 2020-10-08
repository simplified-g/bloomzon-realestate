<?php require("ems-incs/header.inc.php");?>

<?php
	if(isset($_GET['pid'])){ 
	    $post_id = (int)$_GET['pid'];
	}
	if(isset($_POST['name'])){
		$emscms->insert_comments();
	}
	$reply = $emscms->show_server_msg();
?>
        <!-- Page Title #1
============================================ -->
        <section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
            <div class="bg-section">
                <img src="assets/images/page-titles/1.jpg" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="title title-1 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1>Blog</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="<?php $emscms->base()?>">Home</a></li>
                                    <li class="active">Blog</li>
                                </ol>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- .title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #page-title end -->

        <!-- Blog Single Right Sidebar
=========================================-->
        <section id="blog" class="blog blog-single pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <!-- Blog Entry -->
                        <div class="blog-entry">
                            <div class="entry--img">
                                <img src="<?php echo $emscms->post_image('posts'); ?>" alt="entry image" />
                            </div>
                            <div class="entry--content">
                                <div class="entry--meta">
                                    <a href="#"><?php echo $emscms->post_date('posts'); ?></a><a href="#"><?php echo $emscms->count_comments($post_id); ?> Comments</a>
                                </div>
                                <div class="entry--title">
                                    <h4><?php echo $emscms->post_title('posts') ?></h4>
                                </div>
                                <div class="entry--bio">
                                    <?php echo $emscms->post_content('posts') ?>
								</div>
                                <!--<div class="entry--share">
                                    <span class="share--title">share</span>
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a>
                                </div>-->
                                <div class="sharethis-inline-share-buttons"></div>
                                <!-- .entry-share end -->
                            </div>
                        </div>
                        <!-- .blog-entry end -->

                        <div class="entry-widget entry-comments clearfix">
                            <div class="entry-widget-title">
                                <h4><?php echo $emscms->count_comments($post_id); ?> Comments</h4>
                            </div>
                            <div class="entry-widget-content">
                                <ul class="comments-list">
                                    <?php $emscms->post_comments($post_id) ?>
                                    <!-- comment end -->
                                </ul>
                                <!-- .comments-list end -->
                            </div>
                        </div>
                        <!-- .entry-comments end -->

                        <div class="entry-widget entry-add-comment clearfix">
                            <div class="entry-widget-title">
                                <h4>Leave a Comment</h4>
                            </div>
                            <div class="entry-widget-content">
                                <form action="blog-single?pid=<?php $post_id; ?>" method="post" id="post-comment" class="mb-0">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label for="name">Your Name*</label>
                                                <input type="text" name="name" class="form-control" id="name" required>
                                            </div>
                                        </div>
                                        <!-- .col-md-6 end -->
                                        <div class="col-xs-12 col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label for="email">Your Email*</label>
                                                <input type="email" name="email" class="form-control" id="email" required>
                                            </div>
                                        </div>
                                        <!-- .col-md-6 end -->
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label for="comment">Comment*</label>
                                                <textarea class="form-control" name="comment" id="comment" rows="2" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
											<input type='hidden' name='sbmtComment' value='<?php echo $post_id; ?>'>
                                            <button type="submit" class="btn btn--primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- .entry-comments end -->
                    </div>
                    <!-- .col-md-8 end -->
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        
                        <!-- Recent Posts
============================================= -->
                        <div class="widget widget-recent-posts">
                            <div class="widget--title">
                                <h5>recent posts</h5>
                            </div>
                            <div class="widget--content">
                                <!-- entry #1 -->
								<?php $emscms->post_recent_blogs(); ?>
                                
                                <!-- .recent-entry end -->
                            </div>
                        </div>
                        <!-- .widget-recent end -->

                        <!-- Categories
=============================-->
                        <div class="widget widget-categories">
                            <div class="widget--title">
                                <h5>Archives</h5>
                            </div>
                            <div class="widget--content">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">December, 2017</a>
                                    </li>
                                    <li>
                                        <a href="#">November, 2017</a>
                                    </li>
                                    <li>
                                        <a href="#">October, 2017</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- .widget-categories end -->

                    </div>
                    <!-- .col-md-4 -->
                </div>
                <!-- .row end -->
                
            </div>
            <!-- .container end -->
        </section>
        <!-- #blog end -->

    <?php require("ems-incs/footer.inc.php"); ?>
</body>

</html>
