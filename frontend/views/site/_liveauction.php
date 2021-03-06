<?php
use yii\helpers\Html;
use yii\helpers\Url;
$module = $this->context->module->id;
?>

<li> 
	<div class="time" id="time-<?php echo $model->id; ?>"><?php echo $model->start_date ?></div>
	<div class="content-product">
		<div class="category"><?php echo $model->category->name; ?></div>
		<div class="title-product"><?php echo $model->name; ?></div>
		<a class="product-image" href="<?= Url::to(['/auction/individual/', 'id' => $model->id]) ?>">
			<img src="<?= Url::base(true);?>/uploads/products/<?php echo $model->image; ?>"/>
		</a>
		<div class="minimum-price">Starting price: $<?php echo $model->min_price ?></div>
		<div class="bid-price" id="bid-balance-<?php echo $model->id; ?>"></div>
		<a href="<?= Url::to(['/auction/individual/', 'id' => $model->id]) ?>" class="bid-now hvr-grow-shadow">zeed Now</a>
	</div>
</li>
<?php 
date_default_timezone_set('Asia/Beirut');
	$serverTime = date('Y-m-d H:i:s');
	$duration = strtotime($model->start_date) - strtotime($serverTime);
?>
<script type="text/javascript">
	$( document).ready(function() {
		var duration= "<?php echo $duration; ?>";
		$('#time-<?php echo $model->id; ?>').backward_timer({
			seconds: duration,
			format : 'd%d h%:m%:s%'
		});
		$('#time-<?php echo $model->id; ?>').backward_timer('start');
	});
</script>

