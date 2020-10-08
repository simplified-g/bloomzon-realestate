<?php
ob_start();
ob_flush();
session_start();

if (empty($_SESSION['message'])) {
    header('Location: index.php');
    exit;
}
?>
<?php require("ems-incs/header.inc.php");?>
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
								<h1>Property Successfully Added</h1>
							</div>
							<ol class="breadcrumb">
								<li><a href="<?php $emscms->base()?>">Home</a></li>
								<li class="active">Properry Added</li>
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

	<section id="blog" class="blog blog-grid">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
					<div class="signup-form-container text-center">
						<div>
                            <h5 class="mb-5">
                                <?php if (!empty($_SESSION['message'])): ?>
                                    <?= htmlspecialchars(trim($_SESSION['message'])) ?>

                                    <?php
                                    unset($_SESSION['message'])
                                    ?>
                                <?php endif ?>
                                <p class="h6">Thank you.</p>
                            </h5>
						</div>
					</div>
				</div>
				<!-- .col-md-12 end -->
			</div>
			<!-- .row end -->
		</div>
	</section>

  <?php require("ems-incs/footer.inc.php"); ?>
</body>

</html>