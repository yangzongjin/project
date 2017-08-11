<?php 
	namespace frontend\controllers;
	use Yii;
	use yii\web\Controller;
    use frontend\models\Company;
	class AddController extends Controller{
 
 		 public $company;
		 public function init(){
 		 	 $this->company = new Company();
		 }
		 public function actionCompany_add(){
 
		 	return $this->render('company_add',['model'=>$this->company]);
		 }

	}
	

 ?>