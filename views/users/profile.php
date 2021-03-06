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
        <div class="panel-heading">Public profile</div>
        <div class="panel-body">
          <form>
            <div class="form-group">
              <img class="media-object img-circle" src="..." alt="...">
              <label for="exampleInputFile">File input</label>
              <input type="file" id="exampleInputFile">

              <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="name">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <button type="submit" class="btn btn-success">Update Profile</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</
