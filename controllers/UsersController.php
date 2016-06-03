<?php 
namespace app\controllers;
use yii\web\Controller;
/**
* user class
*/
class UsersController extends Controller
{
	public function actionIndex($id)
	{
		echo $id;

		// $this->rederPartial('index');
	}

	public function actionAdd(){
		$request=\Yii::$app->request;
		echo $request->get('id',100);
		// echo $request->post('name',900);
	}

	public function actionProfile(){
		return $this->render('profile');
	}
	public function actionAccount(){
		return $this->render('account');
	}
	public function actionBalance(){
		return $this->render('balance');
	}
	public function actionServer(){
		return $this->render('server');
	}
}