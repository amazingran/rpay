<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class PayController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * 财付通支付
     * @return [type] [description]
     */
    public function actionTenpay()
    {
        return $this->render('tenpay');
    }
    /**
     * 支付宝支付
     * @return [type] [description]
     */
    public function actionAlipay()
    {
        return $this->render('alipay');
    }
    /**
     * 微信支付
     * @return [type] [description]
     */
    public function actionWeixinpay()
    {
        return $this->render('weixinpay');
    }
    /**
     * 网银支付
     * @return [type] [description]
     */
    public function actionBankpay()
    {
        return $this->render('bankpay');
    }
    /**
     * 充值卡支付
     * @return [type] [description]
     */
    public function actionCardpay()
    {
        return $this->render('cardpay');
    }
    /**
     * 手机支付
     * @return [type] [description]
     */
    public function actionPhonepay(){
        return $this->render('phonepay');
    }


}
