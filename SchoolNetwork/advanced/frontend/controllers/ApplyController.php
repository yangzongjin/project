<?php 
	namespace frontend\controllers;
	use Yii;
	use yii\web\Controller;
	use frontend\models\User_info;
	use frontend\models\Upload;
	use frontend\models\Record;
	use yii\web\UploadedFile;
	use yii\db\command;

// use dosamigos\datepicker\DatePicker;
// kartik\datetime\DateTimePicker

	class ApplyController extends Controller{
		 public $layout = false;
 		 public $obj;
 		 public $record;
		 public function init(){
		 	$this->obj = new User_info();
		 	$this->record = new Record();
		 }
		  //简历添加信息
		 public function actionApply_info(){
		 	 $result = Yii::$app->request;
		 	 $uploads = new Upload();
		 	 if($result->isPost){
		 	 	$id = Yii::$app->user->id;
 		 	 	$uploads->filename = UploadedFile::getInstance($uploads, 'filename');
				$post = $result->post();
		 	 	$user_img =$uploads->upload();
 		 	    $dao = Yii::$app->db;
				$dao->createCommand()->insert('user_info',[
		 	    	    'user_id'=>$id,
		 	    		'user_name'=>$post['User_info']['username'],
		 	    		'sex'=>$post['User_info']['sex'],
		 	    		'birth'=>$post['User_info']['birth'],
		 	    		'email'=>$post['User_info']['email'],
		 	    		'tel'=>$post['User_info']['tel'],
		 	    		'workyears'=>$post['User_info']['workyears'],
		 	    		'images'=>$user_img
		 	    ])->execute();
				$dao->createCommand()->insert('resume',[
					    'user_id'=>$id,
		 	    		'now_occupation'=>$post['User_info']['now_occupation'],
		 	    		'now_joblocation'=>$post['User_info']['now_joblocation'],
		 	    		'now_salary'=>$post['User_info']['now_salary'],
		 	    		'expect_occupation'=>$post['User_info']['expect_occupation'],
		 	    		'expect_joblocation'=>$post['User_info']['expect_joblocation'],
		 	    		'expect_salary'=>$post['User_info']['expect_salary'],
		 	    		'arrival_time'=>$post['User_info']['arrival_time']
 		 	    ])->execute();		 	    
				$this->redirect("index.php?r=apply/apply_resume");
		 	 }else{


		 	 	 $dao = Yii::$app->db;
		 	 	 $map = $dao->createCommand('select * from region where parent_id=0')->queryAll();
		 	 	 // $count = $dao->createCommand("select count(*) as num from test")->queryAll();
		 	 	 // var_dump($map);die;
 				return $this->render('apply_info',['model'=>$this->obj,'uploads'=>$uploads,'map'=>$map]);
		 	 }
		}
		public function actionApply_resume(){
			  $result = Yii::$app->request;
			  if($result->isPost){
			  	$post = $result->post();
			  	$id = Yii::$app->user->id;
			  	$dao = Yii::$app->db;
				$dao->createCommand()->insert('record',[
					    'user_id'=>$id,
		 	    		'school_name'=>$post['Record']['school_name'],
		 	    		'major_name'=>$post['Record']['major_name'],
		 	    		'major_li'=>$post['Record']['major_li'],
		 	    		'monad_name'=>$post['Record']['monad_name'],
		 	    		'position_name'=>$post['Record']['position_name'],
		 	    		'job_time'=>$post['Record']['job_time'],
		 	    		'job_duty'=>$post['Record']['job_duty'],
		 	    		'appraise'=>$post['Record']['appraise']
 		 	    ])->execute();	
			   $this->redirect('index.php?r=apply/apply_review');
			  }else{
				 return $this->render('apply_resume',['model'=>$this->record]); 				  	
			  }
 
		}
		public function actionApply_review(){
			 return $this->render('apply_review');
		}



































		public function actionLiandong(){
			$id = Yii::$app->request->get('id');
			$dao  = Yii::$app->db;
			$map = $dao->createCommand("select * from region where parent_id=$id")->queryAll();
			if($map){
			    echo json_encode($map);
			}
			// $data['map']=$map;
		}
	}

 ?>