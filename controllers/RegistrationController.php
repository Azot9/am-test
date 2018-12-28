<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SignupForm;

class RegistrationController extends Controller
{
	public function actionRegistration() {
		if (!Yii::$app->user->isGuest) {
        	return $this->goHome();
   		}
    	$model = new SignupForm();
		return $this->render('signup', compact('model'));
	}
}