<div id="phonesidebar">
	<button class="btn btn-default" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
		Pay Type&nbsp;<span class="caret"></span>
	</button>
	<div class="collapse" id="collapseExample">
		<div class="well">
			<ul class="nav nav-pills nav-stacked">
				<li role="presentation">
					<a href="<?php echo Yii::$app->urlManager->createUrl('pay/alipay');?>" class="list-group-item">Alipay</a>
				</li>
				<li role="presentation active">
					<a href="<?php echo Yii::$app->urlManager->createUrl('pay/bankpay');?>" class="list-group-item active">Bankpay</a>
				</li>
				<li role="presentation">
					<a href="<?php echo Yii::$app->urlManager->createUrl('pay/cardpay');?>" class="list-group-item">Cardpay</a>
				</li>
				<li role="presentation">
					<a href="<?php echo Yii::$app->urlManager->createUrl('pay/phonepay');?>" class="list-group-item">Phonepay</a>
				</li>
				<li role="presentation">
					<a href="<?php echo Yii::$app->urlManager->createUrl('pay/tenpay');?>" class="list-group-item">Tenpay</a>
				</li>
				<li role="presentation">
					<a href="<?php echo Yii::$app->urlManager->createUrl('pay/weixinpay');?>" class="list-group-item">Weixinpay</a>
				</li>
			</ul>	
		</div>
	</div>
</div>
<div class="panel panel-default " id="pcsidebar">
	<div class="panel-heading">Pay Type</div>
	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked">
			<li role="presentation">
				<a href="<?php echo Yii::$app->urlManager->createUrl('pay/alipay');?>" class="list-group-item">Alipay</a>
			</li>
			<li role="presentation active">
				<a href="<?php echo Yii::$app->urlManager->createUrl('pay/bankpay');?>" class="list-group-item active">Bankpay</a>
			</li>
			<li role="presentation">
				<a href="<?php echo Yii::$app->urlManager->createUrl('pay/cardpay');?>" class="list-group-item">Cardpay</a>
			</li>
			<li role="presentation">
				<a href="<?php echo Yii::$app->urlManager->createUrl('pay/phonepay');?>" class="list-group-item">Phonepay</a>
			</li>
			<li role="presentation">
				<a href="<?php echo Yii::$app->urlManager->createUrl('pay/tenpay');?>" class="list-group-item">Tenpay</a>
			</li>
			<li role="presentation">
				<a href="<?php echo Yii::$app->urlManager->createUrl('pay/weixinpay');?>" class="list-group-item">Weixinpay</a>
			</li>
		</ul>	
	</div>
</div>

