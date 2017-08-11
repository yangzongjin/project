<?php 
namespace frontend\models;
	use yii\db\ActiveRecord; 

 class User_info extends ActiveRecord{
 	public $username;
 	public $sex;
 	public $birth;
  public $email;
	public $tel;
	public $workyears;
 	public $filename;
 	public $now_occupation;
 	public $now_joblocation;
 	public $now_salary;
 	public $expect_occupation;
 	public $expect_salary;
 	public $arrival_time;
 	public $expect_joblocation;
	
 	public function rules() {  
          return array(  
              // array("username","required","message"=>"用户名不能为空"),  
                
              // //验证密码和确认密码  
              //  //验证邮箱  
              // array("email","email","allowEmpty"=>false,"message"=>"邮箱格式不正确"),  
                
              // //验证年级  
              // array("grade","in","range"=>array(1,2,3),"message"=>"请选择年级"),  
                
              // //验证爱好，使用自定义规则  
              // array("hobby","checkHobby"),  
          );  
      }
     // //验证爱好  
     // function checkHobby(){  
     //      $this->hobby;  
     //      $len= strlen($this->hobby);  
     //      if($len<3){  
     //          $this->addError("hobby","爱好至少为2个以上");  
     //      }  
     //  }  
 }

 ?>



 