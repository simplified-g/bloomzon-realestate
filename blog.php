 <?php require("ems-incs/header.inc.php");?>

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

        <!-- Blog #1
============================================= -->
        <section id="blog" class="blog blog-grid">
            <div class="container">
                <div class="row mb-50">

                    <!-- Blog Entry #5 -->
					
				<?php $emscms->posts_blogs(); ?>
                    <!-- .col-md-4 end -->

                </div>
                <!-- .row end -->
                <div class="row">
                    <!--<div class="col-xs-12 col-sm-12 col-md-12 clearfix text--center">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                        </a>
                            </li>
                        </ul>
                    </div>-->
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #blog  end -->

    <?php require("ems-incs/footer.inc.php"); ?>
</body>

</html>
