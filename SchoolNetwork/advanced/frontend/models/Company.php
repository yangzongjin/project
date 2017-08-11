<?php 
  namespace frontend\models;
  use yii\db\ActiveRecord;
  class Company extends ActiveRecord{
  	   public $company_name;
  	   public $position_price;
  	   public $update_time;
  	   public $work_experience;
  	   public $engage_num;
  	   public $work_place;
  	   public $work_nature;
  	   public $min_education;
  	   public $position_cate;
  	   public $position_statement;
  	   public $qualification;
  	   public $work_exact_place;
  	   public $content;
  }


 ?>