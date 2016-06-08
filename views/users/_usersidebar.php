<div id="phonesidebar">
	<button class="btn btn-default" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
		Pay Type&nbsp;<span class="caret"></span>
	</button>
	<div class="collapse" id="collapseExample">
		<div class="well">
			<ul class="nav nav-pills nav-stacked">
				<li role="presentation" class="active">
					<a href="<?php echo Yii::$app->urlManager->createUrl('users/profile');?>" class="list-group-item">Profile</a>
				</li>
				<li role="presentation active">
					<a href="<?php echo Yii::$app->urlManager->createUrl('users/account');?>" class="list-group-item">Account</a>
				</li>
				<li role="presentation">
					<a href="<?php echo Yii::$app->urlManager->createUrl('users/balance');?>" class="list-group-item">Balance</a>
				</li>
				<li role="presentation">
					<a href="<?php echo Yii::$app->urlManager->createUrl('users/server');?>" class="list-group-item">Server</a>
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
				<a href="<?php echo Yii::$app->urlManager->createUrl('users/profile');?>" class="list-group-item">Profile</a>
			</li>
			<li role="presentation active">
				<a href="<?php echo Yii::$app->urlManager->createUrl('users/account');?>" class="list-group-item">Account</a>
			</li>
			<li role="presentation">
				<a href="<?php echo Yii::$app->urlManager->createUrl('users/balance');?>" class="list-group-item">Balance</a>
			</li>
			<li role="presentation">
				<a href="<?php echo Yii::$app->urlManager->createUrl('users/server');?>" class="list-group-item">Server</a>
			</li>
		</ul>	
	</div>
</div>
