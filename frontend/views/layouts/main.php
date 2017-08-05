<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="boxed">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	<script src="vendor/modernizr/modernizr.min.js"></script>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="body">
			<header id="header" class="header-no-min-height header-mobile-nav-only" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 0, 'stickySetTop': '0'}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="index.html">
										<img alt="Puzzle Research Data Technology" width="85" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="img/gav.jpg">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									<div class="header-nav header-nav-top-line">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
											<nav>
												<ul class="nav nav-pills" id="mainNav">
													<li class="active">
														<a href="<?php echo Yii::$app->urlManager->createUrl('site/index'); ?>">
															<i class="fa fa-home"></i>&nbsp&nbsp Home
														</a>
													</li>
													<!-- <li class="">
														<a href="http://predatech.uin-suska.ac.id/" target="_blank">
															<i class="fa fa-globe"></i>&nbsp&nbsp Official Site
														</a>
													</li> -->
													<li class="">
														<a href="<?php echo Yii::$app->urlManager->createUrl('pendaftaran/predatech/index'); ?>">
															<i class="fa fa-globe"></i>&nbsp&nbsp Pendaftaran
														</a>
													</li>
													<li class="">
														<a href="<?php echo Yii::$app->urlManager->createUrl('site/event'); ?>">
															<i class="fa fa-calendar"></i>&nbsp&nbsp Event Predatech
														</a>
													</li>
													<li class="">
														<a href="<?php echo Yii::$app->urlManager->createUrl('site/information'); ?>">
															<i class="fa fa-newspaper-o"></i>&nbsp&nbsp Information
														</a>
													</li>
													<li class="">
														<a href="<?php echo Yii::$app->urlManager->createUrl('site/member'); ?>">
															<i class="fa fa-users"></i>&nbsp&nbsp Member Predatech
														</a>
													</li>
													<li class="">
														<a href="<?php echo Yii::$app->urlManager->createUrl('site/contact'); ?>">
															<i class="fa fa-address-card"></i>&nbsp&nbsp Contact Us
														</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<?=

				$content;

			?>
 
			<footer id="footer" class="light narrow">
				<div class="container">
					<div class="row">
						<center><h4>Partnership Puzzle Research Data Technology</h4></center>
						<div class="owl-carousel owl-theme" data-plugin-options="{'items': 4, 'autoplay': true, 'autoplayTimeout': 3000}">
								<div>
									<img class="img-responsive" src="img/logos/logo-1.png" alt="">
								</div>
								<div>
									<img class="img-responsive" src="img/logos/logo-2.png" alt="">
								</div>
								<div>
									<img class="img-responsive" src="img/logos/logo-3.png" alt="">
								</div>
								<div>
									<img class="img-responsive" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-responsive" src="img/logos/logo-5.png" alt="">
								</div>
								<div>
									<img class="img-responsive" src="img/logos/logo-6.png" alt="">
								</div>
								<div>
									<img class="img-responsive" src="img/logos/logo-5.png" alt="">
								</div>
								<div>
									<img class="img-responsive" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-responsive" src="img/logos/logo-3.png" alt="">
								</div>
								<div>
									<img class="img-responsive" src="img/logos/logo-2.png" alt="">
								</div>
								<div>
									<img class="img-responsive" src="img/logos/logo-1.png" alt="">
								</div>
								<div>
									<img class="img-responsive" src="img/logos/logo-6.png" alt="">
								</div>
							</div>

					</div>
				</div>				
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<p>© Copyright 2017. All Rights Reserved.</p>
							</div>
							<div class="col-md-5">
								<nav id="sub-menu">
									<ul>
										<li><a href="#">Sitemap</a></li>
										<li><a href="#">Predatech API</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>