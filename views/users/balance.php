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
    <div class="panel-heading">My Balance</div>
    <div class="panel-body">
        <div class="form-group">
          <label class="col-md-1">Balance</label>
          <label class="text-danger col-md-11">200</label>
        </div>
        <div class="form-group">
          <label class="col-md-1">Currency</label>
          <label class="text-danger col-md-11">RMB</label>
        </div>
        <div class="form-group">
          <label class="col-md-1">Bit</label>
          <label class="text-danger col-md-11">1000</label>
        </div>
    </div>
  </div>
</div>
