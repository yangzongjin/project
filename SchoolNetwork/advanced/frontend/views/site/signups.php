<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;

?>

 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <title>登录</title> 


  <!--引用静态文件:requirejs--> 
  <!--引用静态文件:skin_default--> 
  <link href="jobs/css/common.css" rel="stylesheet" type="text/css" />
  <link href="jobs/css/templateform.css" rel="stylesheet" type="text/css" />
  <link href="jobs/css/controls.css" rel="stylesheet" type="text/css" />
  <link href="jobs/css/default.css" rel="stylesheet" type="text/css" />
  <link href="jobs/css/school-select-v2.css" rel="stylesheet" type="text/css" /> 
  <!--引用静态文件:skin_new_css--> 
  <link href="jobs/css/main.css" rel="stylesheet" type="text/css" /> 
  <!--引用静态文件:new_dialog_js--> 
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
 
 </head> 
 <body> 
 
   <div class="dl_content dl_gray_bg"> 
    <!----> 
    <!--申请职位 s--> 
    <!--申请职位 e--> 
    <!--我的简历 s--> 
    <!--简历内容 s--> 
    
    <style type="text/css"> .bs_pop_alert { margin-left: 12px } </style> 
    <div class="dl_content"> 
     <div class="map"> 
      <div class="dl_lit-wrap clearfix"> 
       <div class="dl_loginleft1"> 
       <h3 class="dl_tit_green">注册</h3> 
              
        <div class="col-lg-5">
        <?php $form = ActiveForm::begin([
            'action'=>'?r=site/signup',
            ]);
        ?>
         <?= $form->field($model, 'username')->label("用户名称")->input('text',['style'=>'width:150px']) ?>
          <?= $form->field($model, 'password')->label("用户密码")->passwordInput()->input('text',['style'=>'width:150px']); ?>

          <?= $form->field($model,'qr')->label("确认密码")->passwordInput()->input('text',['style'=>'width:150px']); ?>

       <?= $form->field($model,'email')->label("邮箱")->input('text',['style'=>'width:150px']); ?>

          <?= $form->field($model, 'verifyCode')->textInput(['class'=>'dl_textinp'])->label('验证码')->input('text',['style'=>'width:66px;']) ?>
                  <?=Captcha::widget(['name'=>'captchaimg','captchaAction'=>'site/captcha',
          'imageOptions'=>['id'=>'captchaimg', 'title'=>'换一个', 'alt'=>'换一个', 'style'=>'cursor:pointer;margin-left:25px;'],'template'=>'{image}']);?>
                <div class="dl_padl40">
              <?= Html::submitButton('注册', ['class' => 'btn btn-primary']) ?>
                </div> 
       <?php ActiveForm::end(); ?>
      </div>

       </div> 
       <div class="dl_loginright1"> 
        <div class="dl_register">
         <span class="noaccount">已有账号？</span>
         <a href="?r=site/login">点击登录</a>
        </div> 
        <h3 class="dl_otherchoice">使用其他账号登录：</h3> 
        <div class="dl_logos"> 
         <a class="dl_sinalogo dl_grey1 sina" href="javascript:void(0)" url="/User/OAuth/OAuthIndex?snstype=sina_connect_v2&amp;returnurl=http%3a%2f%2f51talk.zhiye.com%2fPortal%2fAccount%2fLogin&amp;host=51talk.zhiye.com&amp;portalid=104003">微博</a> 
         <a class="dl_qqlogo dl_grey1 qq" href="javascript:void(0)" url="/User/OAuth/OAuthIndex?snstype=qzone_login&amp;returnurl=http%3a%2f%2f51talk.zhiye.com%2fPortal%2fAccount%2fLogin&amp;host=51talk.zhiye.com&amp;portalid=104003">QQ</a> 
        </div> 
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
 
 </body>
</html>