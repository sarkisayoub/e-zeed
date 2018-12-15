<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\widgets\ListView;
$this->title = 'Home';
?>

<?php $this->registerJsFile(Url::base() . '/js/jquery-backward-timer.min.js'); ?>
<style>
	.owl-next{position:absolute; right:-25px; top:50%; background: url(<?= Url::base(true);?>/images/next.png) no-repeat 50% 50%!important; width:25px; height:30px; }
	.owl-next span,.owl-prev span{display:none;}
	.owl-prev{position:absolute; left:-25px; top:50%; background: url(<?= Url::base(true);?>/images/prev.png) no-repeat 50% 50%!important; width:25px; height:30px; margin-top:-15px;}
	.owl-dots{display:none;}
	.owl-item{padding-left:15px; padding-right:15px;}
</style>
<div class="site-index">
	<div class="banner">
		<img src="<?= Url::base(true);?>/uploads/banner/banner1.jpg" />
	</div>
	<div class="product-home">
		<div class="live-aution">
			<div class="container">
				<div class="title">Live auctions</div>
				<ul class="products">
					<?= ListView::widget([
						'dataProvider' => $dataProvider,
						'options' => [
						'tag' => 'div',
						'class' => 'owl-carousel',
						'id' => 'live-owl-carousel',
						],
						'itemOptions' => ['class' => 'item'],
						'itemView' => '_liveauction',
						'summary' => ''
					]) ?>
				</ul>
			</div>
		</div>
		<div class="favorite-products">
			<div class="container">
				<div class="title">Top picks this week</div>
				<ul class="products">
					<?= ListView::widget([
						'dataProvider' => $dataProvider,
						'options' => [
						'tag' => 'div',
						'class' => 'owl-carousel',
						'id' => 'top-owl-carousel',
						],
						'itemOptions' => ['class' => 'item'],
						'itemView' => '_topproducts',
						'summary' => ''
					]) ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
	 });
 </script>