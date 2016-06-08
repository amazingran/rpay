<div id="phonesidebar">
	<button class="btn btn-default" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
		Pay Type&nbsp;<span class="caret"></span>
	</button>
	<div class="collapse" id="collapseExample">
		<div class="well">
			<ul class="nav nav-pills nav-stacked">
				<li role="presentation" class="active">
					<a href="<?php echo Yii::$app->urlManager->createUrl('buy/buysrv');?>" class="list-group-item">Buy Service</a>
				</li>
				<li role="presentation active">
					<a href="<?php echo Yii::$app->urlManager->createUrl('buy/changesrv');?>" class="list-group-item">Change Service</a>
				</li>
			</ul>	
		</div>
	</div>
</div>
<div class="panel panel-default " id="pcsidebar">
	<div class="panel-heading">Pay Type</div>
	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked">
			<li role="presentation" class="active">
				<a href="<?php echo Yii::$app->urlManager->createUrl('buy/buysrv');?>" class="list-group-item">Buy Service</a>
			</li>
			<li role="presentation active">
				<a href="<?php echo Yii::$app->urlManager->createUrl('buy/changesrv');?>" class="list-group-item">Change Service</a>
			</li>
		</ul>	
	</div>
</div>

