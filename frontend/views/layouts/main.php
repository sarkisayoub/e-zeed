<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <script defer src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	 <?php $this->registerJsFile(Url::base() . '/js/owl.carousel.js'); ?>
	<?php $this->registerCssFile(Url::base() . '/css/owl.carousel.min.css'); ?>
	<?php $this->registerCssFile(Url::base() . '/css/owl.theme.default.min.css'); ?>
	<?php $this->registerCssFile(Url::base() . '/css/owl.carousel.css'); ?>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


	<header>
		<div class="topHeader">
			<div class="logo"><a href="<?= Url::to(['site/index/']) ?>"><img src="<?= Url::base(true);?>/images/logo.png" /></a></div>
			<div class="topMenu">
				<ul>
				  <li><a href="<?= Url::to(['site/index/']) ?>">Home</a></li>
				  <li><a href="<?= Url::to(['site/index/']) ?>">Products</a></li>
				  <li><a href="<?= Url::to(['site/index/']) ?>">Seller</a></li>
				  <li><a href="<?= Url::to(['site/index/']) ?>">About</a></li>
				  <li><a href="<?= Url::to(['site/index/']) ?>">Contact Us</a></li>
				</ul>	
			</div>
			<div class="rightmenu">
				<a href="<?= Url::to(['site/login/']) ?>">Sign in</a>
			</div>
		</div>
	</header>

    <div class="pageContent">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
	<footer class="footer" id="footer">
		<div class="bottom-footer">
			<div class="container">
				<a href="<?php echo Yii::$app->getUrlManager()->createUrl(''); ?>"  class="footer-logo">
					<img src="<?= Url::base(true);?>/images/footer-logo.png" id="logo"/>
				</a>
				<div class="all-right-content">
					<div class="all-right">All rights reserved &copy; e-zeed 2019</div>
					
				</div>
				<div class="footer-pay">
					<span class="visa"></span>
					<span class="master"></span>
				</div>
			</div>
		</div>
	</footer>

<?php $this->endBody() ?>
</body>
</html>


<?php $this->endPage() ?>
