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
                                    <h1>Agents</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="<?php $emscms->base()?>">Home</a></li>
                                    <li class="active">Agents</li>
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


        <!-- agents
============================================= -->
        <section id="agents" class="agents bg-white pt-90">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2 text-center mb-70">
                            <h2 class="heading--title">List of Agents</h2>
                            <p class="heading--desc">Below is a list of agents with properties listed in our site</p>
                        </div>
                        <!-- .heading end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row mb-55">
                    <!-- agent #1 -->
                    <?php $emscms->post_agents(); ?>
                    <!-- .col-md-4 end -->
                    <!-- agent #2 -->
                </div>
                <!-- .row end -->
				<div class="row">
                    <?php $emscms->post_guest_agents(); ?>
                    <!-- .col-md-4 end -->
                </div>
            </div>
            <!-- .container -->
        </section>
        <!-- #agents end  -->

    <?php require("ems-incs/footer.inc.php"); ?>
</body>

</html>
