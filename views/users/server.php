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
              <div class="panel-heading">Panel heading without title</div>
              <div class="panel-body">
                <form>
                    <div class="form-group">
                        <img class="media-object img-circle" src="..." alt="...">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" id="exampleInputFile">

                        <p class="help-block">Example block-level help text here.</p>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label>
                          <input type="checkbox"> Check me out
                      </label>
                  </div>
                  <button type="submit" class="btn btn-success">Submit</button>
              </form>
          </div>
      </div>
      <div class="panel panel-default">
          <div class="panel-heading">Panel heading without title</div>
          <div class="panel-body">

            <form>
                <div class="form-group">
                    <img class="media-object img-circle" src="..." alt="...">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">

                    <p class="help-block">Example block-level help text here.</p>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="checkbox">
                    <label>
                      <input type="checkbox"> Check me out
                  </label>
              </div>
              <button type="submit" class="btn btn-success">Submit</button>
          </form>
      </div>
  </div>
</div>
