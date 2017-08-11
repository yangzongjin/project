<?php 
	namespace frontend\controllers;
	use Yii;
	use yii\web\Controller;
	use frontend\models\User;
	// use frontend\models\SignupForm;

	class LoginController extends Controller{
 		 public $layout = 'commonlogin';
		 public $obj;
		 public function init(){
			$this->obj = new User();
		 }
		 public function actionLogin(){
		 	 return $this->render('login',['model'=>$this->obj]);
		 }
		 //注册
		 public function actionResign(){
 			// var_dump($this->obj);die;
			 return $this->render('resign',array('model'=>$this->obj));
		 }
	}

 ?>