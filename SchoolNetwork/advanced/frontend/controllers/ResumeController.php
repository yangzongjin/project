<?php 
	namespace frontend\controllers;
	use Yii;
	use yii\web\Controller;


	class ResumeController extends Controller{
		 public $layout=false;
		 public $obj; 
		 public function init(){

		 }

		 public function actionIndex(){
		 	 return $this->render('index');
		 }
		 //我的简历
		 public function actionMember_resume(){
		 	 $user_id =Yii::$app->user->id;
			 $id = Yii::$app->request->get('id','1');
		 	 $dao = Yii::$app->db;
		 	 $user_info = $dao->createCommand("select * from user_info where user_id = $user_id")->queryOne();
		 	 // var_dump($user_info);die;
		 	 $resume = $dao->createCommand("select * from resume where user_id=1")->queryOne();
		 	 // var_dump($resume);die;
		 	 $record = $dao->createCommand("select * from record where id=$id")->queryOne();
		 	 return $this->render('member_resume',['user_info'=>$user_info,'resume'=>$resume,'record'=>$record]);
		 }
		 //职位收藏
		 public function actionMember_collect(){
		 	 return $this->render('member_collect');
		 }
		 public function actionShow(){
		 	 $dao = Yii::$app->db;
		 	 $data = $dao->createCommand("select * from record")->queryAll();	
		 	 // var_dump($data);die;	 	 
		 	 return $this->render('show',['data'=>$data]);
		 }
		 //账户设置
		 public function actionMember_info(){
		 	 return $this->render('member_info');
		 }

	}

 ?>