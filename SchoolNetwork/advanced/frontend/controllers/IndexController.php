<?php 
	namespace frontend\controllers;
	use Yii;
	use yii\web\Controller;

 class IndexController extends Controller{
 	 public function actionIndex(){
 	 	 $this->render("index");
 	 }
 }
?>