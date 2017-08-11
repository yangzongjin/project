<?php 
	namespace frontend\models;
	use Yii;
	use yii\db\ActiveRecord;
	class User extends ActiveRecord{
		public $qr;
 		public $userpwd;
 		public $verifyCode;
		public function rules(){
			    return [
					  [['username','userpwd'],'required'],
					  ['qr','compare','compareAttribute'=>'userpwd'],
					  ['username','unique','message'=> '必须唯一'],
					  ['verifyCode', 'captcha'],
					  ['verifyCode', 'required','message' => '验证码不能为空'],
				 ];	
		}
	}

 ?>