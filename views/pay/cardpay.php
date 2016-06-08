<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Card Pay';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
	<div class="col-lg-3">
		<?php echo $this->render('_paysidebar');?>
	</div>
	<div class="col-lg-9">

		<div class="site-about">
			<h1><?= Html::encode($this->title) ?></h1>
			<form class="form-horizontal">
				<div class="form-group">
					<label for="account" class="col-sm-2 control-label">Account</label>
					<div class="col-sm-10">
						<input type="text" name="account" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label for="account" class="col-sm-2 control-label">Confirm Account</label>
					<div class="col-sm-10">
						<input type="text" name="account" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="col-sm-2 control-label">Card ID</label>
					<div class="col-sm-10">
						<input type="text" name="password" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="col-sm-2 control-label">Card Password</label>
					<div class="col-sm-10">
						<input type="text" name="password" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="col-sm-2 control-label">Verification Code</label>
					<div class="col-sm-3">
						<input type="text" name="password" class="form-control">
					</div>
					<div class="col-sm-1">
						<img src="">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-warning">Pay</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>