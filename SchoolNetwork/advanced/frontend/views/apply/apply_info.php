<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

use yii\jui\DatePicker;
use frontend\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <title>职位申请 - 基本信息</title> 
 
  <!--引用静态文件:skin_default--> 
  <link href="jobs/css/common.css" rel="stylesheet" type="text/css" />
  <link href="jobs/css/templateform.css" rel="stylesheet" type="text/css" />
  <link href="jobs/css/controls.css" rel="stylesheet" type="text/css" />
  <link href="jobs/css/default.css" rel="stylesheet" type="text/css" />
  <link href="jobs/css/school-select-v2.css" rel="stylesheet" type="text/css" /> 
  <!--引用静态文件:skin_new_css--> 
  <link href="jobs/css/main.css" rel="stylesheet" type="text/css" /> 
 
  <!--产品头部CSS和脚本--> 
 
  <!--引用静态文件:front_css--> 
  <link href="jobs/css/front.css" rel="stylesheet" type="text/css" />  
  <style type="text/css">
          .checkbox_list {float: left;width: 450px;}
          .form_container ul li span.start_date {width: 80px;}
          .form_container ul li span.end_date {width: 70px;}
          .dl_logo img {
              width: auto!important;
              height: 40px!important;
              margin: 16px 0 0 30px!important;
            }
    </style> 
  <?php $this->head() ?>
 </head> 
 <body> 
  <?php $this->beginBody() ?>

  <div class="bs_deliver"> 
   <div class="dl_header_border"> 
    <div class="dl_header clearfix"> 
     <div class="dl_logo"> 
      <img id="logoImg" class="header-logo-img" src="images/104003_medias_20141215_20141215logo.jpg?v=635542641034400000" style="width: 300px;height:80px;display: none;" /> 
     </div> 
     <div class="dl_rightit"> 
      <div class="isApplyDetail" style="display:none"> 
       <div class="isLogin" style="display:none"> 
        <span id="topUserEmail" class="pad3" title=""><span class="userShortName"></span>，欢迎您！</span> 
        <span class="pad3"><a href="index.html">招聘首页</a></span> 
        <em class="dl_header_line dl_padtb05">|</em> 
        <span class="isUserCenter" style="display:none"> <span class="pad3"><a href="member_apply.html">个人中心</a></span> <em class="dl_header_line dl_padtb05">|</em> </span> 
        <span class="pad3"><a href="/Portal/Account/Logout">退出</a></span> 
       </div> 
       <div class="unLogin" style="display:none"> 
        <span class="pad3"><a href="index.html">招聘首页</a></span> 
        <em class="dl_header_line dl_padtb05">|</em> 
        <span class="pad3"><a href="/Portal/Account/Login">登录</a></span> 
        <em class="dl_header_line dl_padtb05">|</em> 
        <span class="pad3"><a href="/Portal/Account/Register">注册</a></span> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
   <div class="dl_content dl_gray_bg"> 
    <!----> 
    <!--申请职位 s--> 
    <!--申请职位 e--> 
    <!--我的简历 s--> 
    <!--简历内容 s--> 
    <style type="text/css">
        .code
        {
            clear: both;
            padding-left: 80px;
        }

            .code .code_add
            {
                text-decoration: none;
                margin-left: 0;
            }

            .code a.code_add:hover
            {
                text-decoration: underline;
            }

        .form_container .form_part ul.code_list
        {
            padding-left: 0;
        }

        .form_container li a.code_del
        {
            text-decoration: none;
            padding-left: 40px;
        }

            .form_container li a.code_del:hover
            {
                text-decoration: underline;
            }

        .code_type
        {
            width: 180px;
        }

        .code_dialog
        {
            padding: 30px 40px;
        }

        div.code_dialog_btn
        {
            margin-top: 0;
            height: 32px;
        }

        span.code_error_pop
        {
            margin-top: 5px;
            width: auto;
            height: 20px;
            visibility: hidden;
        }

        .code_dialog #btnClse
        {
            margin-left: 50px;
        }

        .code_dialog .dl_dialog_btn
        {
            padding-top: 20px;
            margin-top: 10px;
        }

        .code_type_outer
        {
            text-align: center;
        }

        .code_dialog a.dl_btn_grey1 span
        {
            padding: 0 16px 0 0;
        }

        .code_dialog a.dl_btn_grey1
        {
            padding-left: 16px;
        }

        .code_title
        {
            margin-bottom: 10px;
            color: #333;
        }
    </style> 
    <div class="dl_liucheng dl_top_table"> 
     <h3 class="applypos"> <span>申请职位：</span><span class="dl_positionname"><strong style="font-weight: bold;">PTD 助教总监</strong> </span> </h3> 
     <table align="center" class="dl_top_ico"> 
      <tbody>
       <tr> 
        <td align="center"> 
         <ul class="dl_picliu"> 
          <li class="basic" onclick="BSGlobal.navigate(0);" style="cursor: pointer;"><a href="javascript:void(0);" onclick="BSGlobal.navigate(0);"><span class="dl_grey3">1基本信息</span></a></li> 
          <li class="greyarrow"></li> 
          <li class="greyprofile" onclick="BSGlobal.navigate(1);" style="cursor: pointer;"><a href="javascript:void(0);" onclick="BSGlobal.navigate(1);"><span class="dl_grey2">2个人履历</span></a></li> 
          <li class="greyarrow"></li> 
          <li class="greysubmit" onclick="BSGlobal.navigate(4);" style="cursor: pointer;"><a href="javascript:void(0);" onclick="BSGlobal.navigate(4);"><span class="dl_grey2">3预览/提交</span></a></li> 
         </ul> </td> 
       </tr> 
      </tbody>
     </table> 
    </div> 
    <div> 
     <style type="text/css">
  *html .dl_myleftform .form_container{ width: 490px;overflow: hidden}
  *html .dl_myleftform .form_container .form_part .columntwo ul{ width: 360px;overflow: hidden;}
  *html .dl_myleftform .form_container ul li{ width: 360px;overflow: hidden}
  /* .dl_myleftform .form_container li label{width: 100px}*/
*html .dl_myleftform .form_container ul li span.preview_text{ width: 220px;overflow: hidden;}
*html .dl_myleftform .form_container ul li textarea.textarea{ width: 200px;}
*html .form_container li span.desc
{
    
  margin-right:-3px;
  position:relative;
}
   .redBorder,.form_container li textarea.redBorder,
    .form_part li input.redBorder{border: red 1px solid;}

</style> 
     <div class="dl_bacwrap dl_new_error_wrap"> 
      <div class="mainwrap"> 
       <br /> 
       <h3 class="dl_bigtit"> <span class="dl_postit">基本信息</span> <span class="dl_padl20"></span> </h3> 
       <br /> 
       <a name="个人信息"></a> 
       <div class="dl_greyline_bg"> 
        <span class="dl_menutit">个人信息</span> 
       </div> 
     
        <?php $form = ActiveForm::begin(['action' => ['apply/apply_info'],'method'=>'post',]); ?>
        <div class="clearfix"> 
         <div class="dl_myleftform"> 
          <div class="form_container" id="RecruitmentPortal.PersonProfile"> 
           <h2 class="form_title"> <strong>个人信息</strong> <span class="tab"></span> </h2> 
           <div class="form_part"> 
            <div class="form_part_container columnone"> 
  <?=$form->field($model, 'username')->label('姓名')->input('text',['style'=>'width:260px'])?>
  <?=$form->field($model, 'sex')->radioList(['男'=>'男','女'=>'女'])->label('性别') ?>

   
  <?= $form->field($model, 'birth')->widget(DatePicker::className(), ['dateFormat' => 'yyyy-MM-dd',])->label('出生日期');?>

            <?=$form->field($model, 'email')->textInput(['maxlength' => 20])->label('邮箱')->input('text',['style'=>'width:260px']) ?>
            <?=$form->field($model, 'tel')->textInput(['maxlength' => 20])->label('联系方式')->input('text',['style'=>'width:260px']) ?>


            </div> 
            <div class="clear"></div> 
           </div> 
           <div class="form_part"> 
            <div class="form_part_container columnone"> 
 
 <?=$form->field($model, 'workyears')->dropDownList([
    '在读学生'=>'在读学生','应届毕业生'=>'应届毕业生',
    '1年'=>'1年','2年'=>'2年','3年'=>'3年',
    '4年'=>'4年',
    '5年'=>'5年','6年'=>'6年',
    '7年'=>'7年','8年'=>'8年','10年及以上'=>'10年及以上'], ['prompt'=>'请选择','style'=>'width:120px'])->label('工作年限') 
  ?>
<?=$form->field($uploads, 'filename')->fileInput()->label('个人头像')->input('text',['style'=>'width:260px']) ?>


            </div> 
            <div class="clear"></div> 
           </div> 
          </div> 
         </div> 
         <div id="imgContainer" class="dl_myrightfile" style="display: none;"> 
          <img id="idPhoto" style="width:120px;height:140px;" src="images/upfile.jpg" /> 
          <br /> 
          <a class="blue" id="idPhotoUploadBtn" href="###">上传照片</a> 
          <span id="idPhotoerrinfo" class="new_pop_error" style="display:none;"></span> 
          <ul id="idPhotowarninfo" class="warninfo"> 
          </ul> 
         </div> 
        </div> 
 
       <a name="求职意向"></a> 
       <div class="dl_greyline_bg"> 
        <span class="dl_menutit">求职意向</span> 
       </div> 
 
        <div class="clearfix"> 
         <div class="dl_myleftform"> 
          <input type="hidden" name="oId" id="Hidden1" value="" /> 
          <input type="hidden" name="jId" id="Hidden4" value="620025245" /> 
          <input type="hidden" name="mId" id="Hidden5" value="1" /> 
          <input type="hidden" name="stepId" id="Hidden2" value="1" /> 
          <input name="_viewName" type="hidden" value="T2JqZWN0aXZlVmlldw==" />
          <input name="_version" type="hidden" value="MA==" />
          <input name="_formIndex" type="hidden" value="12" />
          <div class="form_container" id="RecruitmentPortal.Objective"> 
           <h2 class="form_title"> <strong>求职意向</strong> <span class="tab"></span> </h2> 
           <div class="form_part"> 
            <div class="form_part_container columnone"> 
          <?=$form->field($model, 'now_occupation')->textInput(['maxlength' => 20])->label('现从事职业')->input('text',['style'=>'width:260px']) ?>
          <?=$form->field($model, 'now_joblocation')->textInput(['maxlength' => 20])->label('现工作城市：')->input('text',['style'=>'width:260px']) ?>
          <?=$form->field($model, 'now_salary')->dropDownList(['1000以下'=>'1000以下','1000～2000'=>'1000～2000','2001～4000'=>'2001～4000','4001～6000'=>'4001～6000','6001～8000'=>'6001～8000','10001～15000'=>'10001～15000','15001～25000'=>'15001～25000','25000以上'=>'25000以上','面议'=>'面议'], ['prompt'=>'请选择','style'=>'width:120px'])->label('现月薪') 
          ?>
          <?=$form->field($model, 'expect_occupation')->textInput(['maxlength' => 20])->label('期望从事职业')->input('text',['style'=>'width:260px']) ?>
          <?=$form->field($model, 'expect_joblocation')->textInput(['maxlength' => 20])->label('期望工作城市')->input('text',['style'=>'width:260px']) ?>

            <?=$form->field($model, 'expect_salary')->dropDownList([
        '1000以下'=>'1000以下','1000～2000'=>'1000～2000',
        '2001～4000'=>'2001～4000','4001～6000'=>'4001～6000','6001～8000'=>'6001～8000',
        '10001～15000'=>'10001～15000',
        '15001～25000'=>'15001～25000','25000以上'=>'25000以上',
        '面议'=>'面议'], ['prompt'=>'请选择','style'=>'width:120px'])->label('期望月薪(税前)') 
        ?>
       <?=$form->field($model, 'arrival_time')->dropDownList([
        '一周内'=>'一周内','一个月'=>'一个月',
        '三个月'=>'三个月','面议'=>'面议' ], ['prompt'=>'请选择','style'=>'width:120px'])->label('入职时间') 
        ?>
  


        <div class="form-group field-user_info-expect_salary">
            <label class="control-label" for="user_info-expect_salary">四级联动</label>
              <select id="liandong"  name="User_info[expect_salary]" style="width:120px">
              <?php foreach($map as $v){ ?>
                  <option value="<?=$v['region_id']?>"><?=$v['region_name']?></option>
              <?php } ?>
              </select>
 
            <p class="help-block help-block-error"></p>
          </div>
          </div> 
            <div class="clear"></div> 
           </div> 
          </div> 
         </div> 
        </div> 
 
       <div class="dl_bd_btm"></div> 
       <div class="dl_subbtn dl_htline32"> 
   <?php echo Html::resetButton('重置', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>
      <?php echo Html::submitButton('提交', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>
   <?php ActiveForm::end(); ?>
       </div> 
       <div class="error_show" style="text-align:center;padding-top:10px;display:none">
        <span class="new_pop_error" style="width:auto;font-weight:bold">部分内容未填写完整，请完善。</span>
       </div> 
      </div> 
     </div> 
     
    </div> 
    <!--简历内容 e--> 
   </div> 
   <div class="dl_footer"> 
    <p>&copy;2015&nbsp;北京大生知行科技有限公司51talk&nbsp;&nbsp;京ICP备05051632号 京公网安备110108002767号 &nbsp;&nbsp;帮助热线：4006506886</p> 
   </div> 
  </div>  
 <?php $this->endBody() ?>

 </body>
 <script>
   $(function(){
       $(document).on('change','#liandong',function(){

          var id = $(this).val();
          _this =$(this);
          _this.nextAll().remove();
          $.get('index.php?r=apply/liandong',{id:id},function(res){

            var str='';
              if(res){
                str='<select id="liandong" name="User_info[expect_salary]" style="width:120px">';
                  $.each(res,function(k,v){
                     str+='<option value="'+v.region_id+'">'+v.region_name+'</option>';

                  });
                str+='</select>';
                 _this.after(str);
              }
          },'json');
       })
   })
</script>
</html>
<?php $this->endPage() ?>
