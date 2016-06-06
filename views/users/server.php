<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'ZOE';
$this->params['breadcrumbs'][] = $this->title;
$this->context->layout='zoemain';

?>
<div class="site-contact">
  <div class="panel panel-default">
    <div class="panel-heading">My Service</div>
    <div class="panel-body">
        <div class="form-group">
          <label class="col-md-2">Service Name</label>
          <label class="text-danger col-md-1">200</label>
          <label class="text-danger col-md-9">&nbsp;&nbsp;</label>
        </div>
        <div class="form-group">
          <label class="col-md-2">Up Limit</label>
          <label class="text-danger col-md-1">100</label>
          <label class="text-danger col-md-9">MB/s</label>
        </div>
        <div class="form-group">
          <label class="col-md-2">Down Limit</label>
          <label class="text-danger col-md-1">1000</label>
          <label class="text-danger col-md-9">MB/s</label>
        </div>
        <div class="form-group">
          <label class="col-md-2">Com Limit</label>
          <label class="text-danger col-md-1">1100</label>
          <label class="text-danger col-md-9">MB/s</label>
        </div>
        <div class="form-group">
          <label class="col-md-2">Uptime Limit</label>
          <label class="text-danger col-md-1">1100</label>
          <label class="text-danger col-md-9">MB/s</label>
        </div>
    </div>
  </div>
</div>
