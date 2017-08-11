
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
  <title>职位申请 - 2个人履历</title> 
  <!--引用静态文件:skin_default--> 
  <link href="jobs/css/common.css" rel="stylesheet" type="text/css" />
  <link href="jobs/css/templateform.css" rel="stylesheet" type="text/css" />
  <link href="jobs/css/controls.css" rel="stylesheet" type="text/css" />
  <link href="jobs/css/default.css" rel="stylesheet" type="text/css" />
  <link href="jobs/css/school-select-v2.css" rel="stylesheet" type="text/css" /> 
  <!--引用静态文件:skin_new_css--> 
  <link href="jobs/css/main.css" rel="stylesheet" type="text/css" /> 
  <!--引用静态文件:new_dialog_js--> 
 
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
      <img id="logoImg" class="header-logo-img" src="images/104003_medias_20141215_20141215logo.jpg?v=635542641034400000" style="width: 300px;height:80px; " /> 
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
          <li class="bluebasic" onclick="BSGlobal.navigate(0);" style="cursor: pointer;"><a href="javascript:void(0);" onclick="BSGlobal.navigate(0);"><span class="dl_grey2">1基本信息</span></a></li> 
          <li class="bluearrow"></li> 
          <li class="profile" onclick="BSGlobal.navigate(1);" style="cursor: pointer;"><a href="javascript:void(0);" onclick="BSGlobal.navigate(1);"><span class="dl_grey3">2个人履历</span></a></li> 
          <li class="greyarrow"></li> 
          <li class="greysubmit" onclick="BSGlobal.navigate(4);" style="cursor: pointer;"><a href="javascript:void(0);" onclick="BSGlobal.navigate(4);"><span class="dl_grey2">3预览/提交</span></a></li> 
         </ul> </td> 
       </tr> 
      </tbody>
     </table> 
    </div> 
    <div> 
     <style type="text/css">
    .redBorder,.form_container li textarea.redBorder,
    .form_part li input.redBorder{border: red 1px solid;}
    .eduinfo .form_container span.preview_text {
        width:450px;
    }
    .eduinfo .form_container span.start_date {
        width:80px;
    }
    .eduinfo .form_container span.end_date {
        width:70px;
    }
</style> 
     <div class="dl_bacwrap dl_new_error_wrap"> 
      <div class="mainwrap"> 
       <h3 class="dl_bigtit"> <span class="dl_postit">个人履历</span> <span class="dl_padl20">请在执行下一步前将必填项填写完毕并保存</span> </h3> 
       <br /> 
       <div class="dl_educationwrap mainContainer"> 
        <a name="教育背景"></a> 
        <div class="dl_greyline_bg"> 
         <span class="dl_menutit "><span style="color:red;">*</span>教育背景</span> 
         <span class="dl_padl20 errmsg new_pop_error" id="errorMsg_7" ></span> 
        </div> 
        <div class="dl_basicborder" > 
           <div class="eduhistory_drmmbnew pos_realitive"> 
           <div class="dl_delupd blue deletelink_edrmmb pos_absolute dl_right0" style="width: 150px;">
            <span class="floatright"><a name="delItem" href="javascript:void(0)">删除</a> <a name="editItem" href="javascript:void(0)" class="dl_mglft10">编辑</a></span>
           </div> 
           <div id="resumeitems" class="eduinfo rightcontent_edrmmb"> 
 
            <div class="form_container" id="RecruitmentPortal.Education"> 
             <h2 class="form_title"> <strong>教育背景</strong> <span class="tab"></span> </h2> 
             <div class="form_part"> 
              <div class="form_part_container columnone"> 
              </div> 
              <div class="clear"></div> 
             </div> 
             <div class="form_part"> 
              <div class="form_part_container columnone"> 

 <?php $form = ActiveForm::begin(['action' => ['apply/apply_resume'],'method'=>'post']); ?>
  <?=$form->field($model, 'school_name')->label('学校名称')->input('text',['style'=>'width:260px'])?>

  <?=$form->field($model, 'major_name')->label('专业名称')->input('text',['style'=>'width:260px'])?>

  <?=$form->field($model, 'major_li')->dropDownList([
    '高中及以下'=>'高中及以下','中技（中专/技校/职高）'=>'中技（中专/技校/职高）',
    '大专'=>'大专','本科'=>'本科','硕士研究生'=>'硕士研究生',
    'MBA'=>'MBA',
    '博士研究生'=>'博士研究生'], ['prompt'=>'请选择','style'=>'width:120px'])->label('学历') 
  ?>
              </div> 
              <div class="clear"></div> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div class="dl_borderdashed"></div> 
 
        </div> 
        <input type="hidden" class="viewName" value="0" /> 
        <div class="dl_mgtop10"> 
         <a name="addItem" href="#this" class="dl_add_ico blue">继续添加</a> 
        </div> 
       </div> 
       <div class="dl_educationwrap mainContainer"> 
        <a name="工作经验"></a> 
        <div class="dl_greyline_bg"> 
         <span class="dl_menutit "><span style="color:red;">*</span>工作经验</span> 
         <span class="dl_padl20 errmsg new_pop_error" id="errorMsg_6" ></span> 
        </div> 
        <div class="dl_basicborder" > 
           <div class="eduhistory_drmmbnew pos_realitive"> 
           <div class="dl_delupd blue deletelink_edrmmb pos_absolute dl_right0" style="width: 150px;">
            <span class="floatright"><a name="delItem" href="javascript:void(0)">删除</a> <a name="editItem" href="javascript:void(0)" class="dl_mglft10">编辑</a></span>
           </div> 
           <div id="resumeitems" class="eduinfo rightcontent_edrmmb"> 
            <div class="form_container" id="RecruitmentPortal.Experience"> 
             <h2 class="form_title"> <strong>工作经验</strong> <span class="tab"></span> </h2> 
             <div class="form_part"> 
              <div class="form_part_container columnone"> 
               <?=$form->field($model, 'monad_name')->label('单位名称')->input('text',['style'=>'width:260px'])?>
              <?=$form->field($model, 'position_name')->label('职位名称')->input('text',['style'=>'width:260px'])?>
              <?=$form->field($model, 'job_time')->label('工作时间')->input('text',['style'=>'width:260px'])?>
        </div> 
              <div class="clear"></div> 
             </div> 
             <div class="form_part"> 
              <div class="form_part_container columnone"> 
               
            <?=$form->field($model, 'job_duty')->label('职责')->input('text',['style'=>'width:260px'])?>
            <?=$form->field($model, 'appraise')->textarea(['rows'=>3])->label('自我评价') ?>
  <?php echo Html::resetButton('重置', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>

              </div> 
              <div class="clear"></div> 
             </div> 
   
       <div class="dl_bd_btm"></div> 
       <div class="dl_cen_txt dl_htline32 dl_padt15"> 
        <span class="dl_btn_lev dl_ft14_grey dl_padr10"><a name="btnPre" href="#this"><b>上一步</b></a></span> 

    <?php echo Html::submitButton('保存并下一步', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>
   <?php ActiveForm::end(); ?>
       </div> 
       <div class="error_show" style="text-align: center; padding-top: 10px; display: none">
        <span class="new_pop_error" style="width: auto; font-weight: bold">部分内容未填写完整，请完善。</span>
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
</html>
<?php $this->endPage() ?>