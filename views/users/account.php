<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
  <div class="col-lg-3">
  <?php echo $this->render('_usersidebar');?>
  </div>
  <div class="col-lg-9">
    <div class="site-contact">
      <div class="panel panel-default">
        <div class="panel-heading">Change Password</div>
        <div class="panel-body">
          <form>
            <div class="form-group">
              <label for="opasswd">Old Password</label>
              <input type="password" class="form-control" id="opasswd" placeholder="Old Password">
            </div>
            <div class="form-group">
              <label for="npasswd">New Password</label>
              <input type="password" class="form-control" id="npasswd" placeholder="New Password">
            </div>
            <div class="form-group">
              <label for="cnpasswd">Confirm new password</label>
              <input type="password" class="form-control" id="cnpasswd" placeholder="Confirm new password">
            </div>
            <button type="submit" class="btn btn-success">Update Password</button>
            <a href="###">I forgot my password</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
