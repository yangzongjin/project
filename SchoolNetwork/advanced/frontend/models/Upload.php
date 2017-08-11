<?php 
	namespace frontend\models;
	use yii\web\UploadedFile;
	use yii\base\Model;
	class Upload extends Model{
		 public $filename;
		 public function rules(){
 			return [
					  ['filename', 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],

		 	 		];
		 }
		 public function upload(){
		 	 if($this->validate()){
		 	 	  $suiji = time().rand(10000,9999);
		 	 	  $this->filename->saveAs('upload/'.$suiji.'.'.$this->filename->extension);
		 	 	  $str = 'upload/'.$suiji.'.'.$this->filename->extension;
		 	 	  return $str;
		 	 }else{
		 	 	  return false;
		 	 }
		 }
	}
 ?>