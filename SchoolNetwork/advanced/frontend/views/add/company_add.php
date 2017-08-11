<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;   

 ?>


<?php
$form = ActiveForm::begin(['action' => ['company/company_add'],'method'=>'post',]); ?>
<?=$form->field($model, 'position_price')->dropDownList(['1000以下'=>'1000以下','1000～2000'=>'1000～2000','2001～4000'=>'2001～4000','4001～6000'=>'4001～6000','6001～8000'=>'6001～8000','10001～15000'=>'10001～15000','15001～25000'=>'15001～25000','25000以上'=>'25000以上','面议'=>'面议'], ['prompt'=>'请选择','style'=>'width:120px'])->label('职位月薪') 
          ?>
<?=$form->field($model, 'update_time')->dropDownList([
        '一周内'=>'一周内','一个月'=>'一个月',
        '三个月'=>'三个月','最近'=>'最近' ], ['prompt'=>'请选择','style'=>'width:120px'])->label('发布日期') 
        ?>
 <?=$form->field($model, 'work_experience')->dropDownList([
    '在读学生'=>'在读学生','应届毕业生'=>'应届毕业生',
    '1年'=>'1年','2年'=>'2年','3年'=>'3年',
    '4年'=>'4年',
    '5年'=>'5年','6年'=>'6年',
    '7年'=>'7年','8年'=>'8年','10年及以上'=>'10年及以上'], ['prompt'=>'请选择','style'=>'width:120px'])->label('工作经验')?>
 
  <?=$form->field($model, 'engage_num')->dropDownList([
    '1'=>'1','2'=>'2',
    '3'=>'3','4'=>'4','5'=>'5'], ['prompt'=>'请选择','style'=>'width:120px'])->label('招聘人数')?>

<?php echo $form->field($model, 'work_place')->textInput(['maxlength' => 20])->label('工作地点') ?>
  <?=$form->field($model, 'work_nature')->dropDownList([
    '工程师'=>'工程师','全栈'=>'全栈',
    '前端'=>'前端','大数据'=>'大数据'], ['prompt'=>'请选择','style'=>'width:120px'])->label('工作性质')?>
  <?=$form->field($model, 'min_education')->label('最低学历')->input('text',['style'=>'width:260px'])?>   

 <?=$form->field($model, 'position_cate')->label('职位类别')->input('text',['style'=>'width:260px'])?>
 <?=$form->field($model, 'position_statement')->textarea(['rows'=>3])->label('岗位职责') ?>
 <?=$form->field($model, 'qualification')->textarea(['rows'=>3])->label('任职资格') ?>
<?=$form->field($model, 'work_exact_place')->label('工作地址')->input('text',['style'=>'width:260px'])?>
<?=$form->field($model, 'content')->textarea(['rows'=>3])->label('公司简介') ?>

<?php echo Html::submitButton('提交', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>
   
 
<?php ActiveForm::end(); ?>