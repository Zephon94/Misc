<?php

namespace app\controllers;

use yii\web\Controller;

class MyController extends Controller
{
	public function actionIndex() {
		return $this->render('index');
	}
	public function actionAbout() {
		return $this->render('about');
	}
	public function actionService() {
		return $this->render('service');
	}
	public function actionContact() {
		return $this->render('contact');
	}
}