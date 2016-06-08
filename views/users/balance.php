<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'ZOE';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
  <div class="col-lg-3">
    <?php echo $this->render('_usersidebar');?>
  </div>
  <div class="col-lg-9">

    <div class="site-contact">
      <div class="panel panel-default">
        <div class="panel-heading">My Balance</div>
        <div class="panel-body">
          <table class="table">
            <tr>
              <td>Balance</td>
              <td>111</td>
            </tr>
            <tr>
              <td>Currency</td>
              <td>RMB</td>
            </tr>
            <tr>
              <td>Bit</td>
              <td>232</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
