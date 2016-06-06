<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Tenpay';
$this->params['breadcrumbs'][] = $this->title;
$this->context->layout='paymain';
?>
<div class="site-about">
	<h1><?= Html::encode($this->title) ?></h1>

	<form class="form-horizontal">
		<div class="form-group">
			<label for="balabce" class="col-sm-2 control-label">Balance</label>
			<div class="col-sm-10">
				<label for="balabce" class="control-label">100.00</label>
			</div>
		</div>
		<div class="form-group">
			<label for="balabce" class="col-sm-2 control-label">Currence</label>
			<div class="col-sm-10">
				<label for="balabce" class="control-label">RMB</label>
			</div>
		</div>
		<div class="form-group">
			<label for="account" class="col-sm-2 control-label">Account</label>
			<div class="col-sm-10">
				<input type="text" name="account" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
				<input type="text" name="password" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Quantity</label>
			<div class="col-sm-10">
				<ul class="nav nav-pills">
					<li><a href="###" class="btn btn-info">10</a></li>
					<li><a href="###" class="btn btn-info">20</a></li>
					<li><a href="###" class="btn btn-info">40</a></li>
					<li><a href="###" class="btn btn-info">60</a></li>
					<li><a href="###" class="btn btn-info">80</a></li>
					<li><input type="text" name="quantity" class="form-control"></li>
					<li><label>&yen;</label></li>
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
