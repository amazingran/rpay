<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body>
	<?php $this->beginBody() ?>

	<div class="wrap">
		<?php
		NavBar::begin([
			'brandLabel' => 'Ran Pay',
			'brandUrl' => Yii::$app->homeUrl,
			'options' => [
			'class' => 'navbar-inverse navbar-fixed-top',
			],
			]);
		echo Nav::widget([
			'options' => ['class' => 'navbar-nav navbar-right'],
			'items' => [
			['label' => 'Home', 'url' => ['/site/index']],
			['label' => 'Topup', 'url' => ['/pay/bankpay']],
			['label' => 'Server', 'url' => ['/buy/buysrv']],
			['label' => 'ZOE', 'url' => ['/users/profile']],
			Yii::$app->user->isGuest ? (
				['label' => 'Login', 'url' => ['/site/login']]
				) : (
				'<li>'
				. Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
				. Html::submitButton(
					'Logout (' . Yii::$app->user->identity->username . ')',
					['class' => 'btn btn-link']
					)
				. Html::endForm()
				. '</li>'
				),
				Yii::$app->user->isGuest ? (
					['label'=>'Sign up','url'=>['/site/signup']]

					):('<li class="text-info">Welcome</li>')
				],
				]);
		NavBar::end();
		?>

		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="panel panel-default">
						<div class="panel-heading">Pay Type</div>
						<div class="panel-body">              
							<a href="<?php echo Yii::$app->urlManager->createUrl('pay/alipay');?>" class="list-group-item">Alipay</a>
							<a href="<?php echo Yii::$app->urlManager->createUrl('pay/bankpay');?>" class="list-group-item">Bankpay</a>
							<a href="<?php echo Yii::$app->urlManager->createUrl('pay/cardpay');?>" class="list-group-item">Cardpay</a>
							<a href="<?php echo Yii::$app->urlManager->createUrl('pay/phonepay');?>" class="list-group-item">Phonepay</a>
							<a href="<?php echo Yii::$app->urlManager->createUrl('pay/tenpay');?>" class="list-group-item">Tenpay</a>
							<a href="<?php echo Yii::$app->urlManager->createUrl('pay/weixinpay');?>" class="list-group-item">Weixinpay</a>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<?= Breadcrumbs::widget([
						'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
						]) ?>
						<?= $content ?>
					</div>
				</div>
			</div>
		</div>

		<footer class="footer">
			<div class="container">
				<p class="pull-left">&copy; My Company <?= date('Y') ?></p>

				<p class="pull-right"><?= Yii::powered() ?></p>
			</div>
		</footer>

		<?php $this->endBody() ?>
	</body>
	</html>
	<?php $this->endPage() ?>