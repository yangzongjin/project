<?php 
	namespace frontend\controllers;
	use Yii;
	use yii\web\Controller;
    use frontend\models\Company_login;;
    use frontend\models\Company;
	class CompanyController extends Controller{
		 public $layout = 'jobheader';
		 public $obj;
		 public $company;
		 public function init(){
		 	 $this->obj = new Company_login();
		 	 $this->company = new Company();
		 }
		 public function actionIndex(){
		 	$result = Yii::$app->request;
		 	if($result->isPost){
		 	 	 $post = $result->post();
				  if($this->obj->load($post) && $this->obj->validate()){
			 	 	 $this->obj->save();
			 	 	$session = Yii::$app->session;
			 	 	$arr['q_id']=Yii::$app->db->getLastInsertID();
			 	 	$arr['user_name']=$post['Company_login']['user_name'];
			 	 	$arr['company_name']=$post['Company_login']['company_name'];
			 	 	$session->set('company_user',$arr);
			 	 	$this->redirect('index.php?r=company/show');
		 	 	 }
			}else{
		 	 	return $this->render('index',['model'=>$this->obj]);
			}
		 }
		 public function actionLogin(){
		 	 $result = Yii::$app->request;
		 	 if($result->isPost){
		 	 	$post =$result->post();
		 	 	$user_name = $post['Company_login']['user_name'];
		 	 	 $dao = Yii::$app->db;
		 	 	 $info = $dao->createCommand("select * from Company_login where user_name='$user_name'")->queryOne();
		 	 	 if(!$info)  $this->redirect('index.php?r=company/login');
		 	 	 	if($post['Company_login']['user_pwd']!=$info['user_pwd']){
		 	 	 		 $this->redirect('index.php?r=company/login');
		 	 	 	}else{
		 	 	 		 $this->redirect('index.php?r=company/show');
		 	 	 	}
			 }else{
		 	 	return $this->render('c_login',['model'=>$this->obj]);
		 	 }
		 	 
		 }
		 public function actionCompany_show(){
		 	$dao = Yii::$app->db;
		 	$map=$dao->createCommand("select * from Company_login")->queryAll();
		 	return $this->render('company_show',['map'=>$map]);
		 }
		 public function actionCompany_add(){
		 	$session = Yii::$app->session;
		 	$arr = $session->get('company_user');
		 	// var_dump($arr);
		 	$result = Yii::$app->request;
		 	$post = $result->post();
		 	if($result->isPost){
		 		 $dao = Yii::$app->db;
		 		 $dao->createCommand()->insert('company',[
		 		 	  			'c_id'=>$arr['q_id'],
		 		 				'company_name'=>$arr['company_name'],
		 		 				'position_price'=>$post['Company']['position_price'],
		 		 				'update_time'=>$post['Company']['update_time'],
		 		 				'work_experience'=>$post['Company']['work_experience'],
		 		 				'engage_num'=>$post['Company']['engage_num'],
		 		 				'work_place'=>$post['Company']['work_place'],
		 		 				'work_nature'=>$post['Company']['work_nature'],
		 		 				'min_education'=>$post['Company']['min_education'],
		 		 				'position_cate'=>$post['Company']['position_cate'],

		 		 ])->execute();
		 		 $dao->createCommand()->insert('company_description',[
		 		 		 		'c_id'=>$arr['q_id'],
		 		 				'position_statement'=>$post['Company']['position_statement'],
		 		 				'qualification'=>$post['Company']['qualification'],
		 		 				'work_exact_place'=>$post['Company']['work_exact_place'],
		 		 				
		 		 ])->execute();
		 		 $dao->createCommand()->insert('company_referral',[
		 		 				'c_id'=>$arr['q_id'],
		 		 				'content'=>$post['Company']['content'],

		 		 ])->execute();
		 	}
 		 }

	}
	

 ?>