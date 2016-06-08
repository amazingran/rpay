<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Alipay';
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
					<label for="inputPassword3" class="col-sm-2 control-label">Gold</label>
					<div class="col-sm-8">
						<ul class="nav nav-pills">
							<li><a href="###" class="btn btn-info btn-sm">10</a></li>
							<li><a href="###" class="btn btn-info btn-sm">20</a></li>
							<li><a href="###" class="btn btn-info btn-sm">40</a></li>
							<li><a href="###" class="btn btn-info btn-sm">60</a></li>
							<li><a href="###" class="btn btn-info btn-sm">80</a></li>
							<li><input type="text" name="gold" class="form-control center-block"></li>
							<li><label>&nbsp;&nbsp;&yen;</label></li>
						</ul>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<p>Gold:<span class="text-warning">20</span></p>				
					</div>
				</div>

				<div class="form-group">
					<label for="amount" class="col-sm-2 control-label">Amount</label>
					<div class="col-sm-10">
						<label class="text-warning" id="amount">20<span id="currence">&nbsp;&nbsp;RMB</span></label>
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



