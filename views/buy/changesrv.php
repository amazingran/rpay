<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Change Server';
$this->params['breadcrumbs'][] = $this->title;
$this->context->layout='buymain';
?>
<div class="site-about">
	<h1><?= Html::encode($this->title) ?></h1>

	<form class="form-horizontal">
		<div class="form-group">
			<label for="service" class="col-sm-2 control-label">Current Service</label>
			<div class="col-sm-10">
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="..." alt="...">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="balabce" class="col-sm-2 control-label">Balance</label>
			<div class="col-sm-10">
				<label for="balabce" class="control-label">100.00RMB</label>
			</div>
		</div>

		<div class="form-group">
			<label for="currence" class="col-sm-2 control-label">Currence</label>
			<div class="col-sm-10">
				<label for="currence" class="control-label">RMB</label>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Select Service</label>
			<div class="col-sm-10">
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="..." alt="...">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="..." alt="...">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="..." alt="...">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="..." alt="...">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="..." alt="...">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="..." alt="...">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="..." alt="...">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="..." alt="...">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Quantity</label>
			<div class="col-sm-10">
				<ul class="nav nav-pills">
					<li><a href="###" class="btn btn-info">1</a></li>
					<li><a href="###" class="btn btn-warning">2</a></li>
					<li><a href="###" class="btn btn-info">3</a></li>
					<li><a href="###" class="btn btn-info">4</a></li>
					<li><a href="###" class="btn btn-info">5</a></li>
				</ul>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<p>Quantity:<span class="text-warning">20&yen;</span></p>				
			</div>
		</div>

		<div class="form-group">
			<label for="amount" class="col-sm-2 control-label">Amount</label>
			<div class="col-sm-10">
				<label for="amount" class="control-label text-info">60RMB</label>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-warning">Pay</button>
			</div>
		</div>
	</form>

</div>
