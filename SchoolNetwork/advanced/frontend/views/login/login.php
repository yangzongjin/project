  <div class="bs_deliver"> 
   <div class="dl_header_border"> 
    <div class="dl_header clearfix"> 
     <div class="dl_logo"> 
      <img id="logoImg" class="header-logo-img" src="jobs/images/104003_medias_20141215_20141215logo.jpg?v=635542641034400000" style="width: 300px;height:80px;display: none;" /> 
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
    <?php 
  use yii\helpers\Url;
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
  use yii\captcha\Captcha;
?>
    <div class="dl_content"> 
     <div class="map"> 
      <div class="dl_lit-wrap dl_padr30 width553 clearfix"> 
        <?php $form = ActiveForm::begin([
        'action'=>'?r=resign/login_do',
            'fieldConfig'=>[
          'template'=> "{label}\n<div class=\"col-sm-3\">{input}</div>\n{error}",
            ]
       ]);
    ?>
      <div class="dl_loginleft dl_padr0"> 
         <h3 class="dl_tit_green">登录</h3> 
         <ul class="dl_error_wrap15"> 
          <?= $form->field($model, 'username')->label("用户名称") ?>  

           <?= $form->field($model, 'userpwd')->label("用户密码")->passwordInput(); ?>  

           <?= $form->field($model, 'verifyCode')->textInput(['class'=>'dl_textinp'])->label('验证码')->input(['style'=>'width:66px']) ?><?=Captcha::widget(['name'=>'captchaimg','captchaAction'=>'site/captcha',
          'imageOptions'=>['id'=>'captchaimg', 'title'=>'换一个', 'alt'=>'换一个', 'style'=>'cursor:pointer;margin-left:25px;'],'template'=>'{image}']);?>

            
         </ul> 
         <div class="next"> 
           <div class="form-group">
          <?= Html::submitButton('登录', ['class' => 'btn btn-primary']) ?>
      </div>
    <?php ActiveForm::end(); ?> 
         </div> 
        </div> 
      
       <div class="dl_loginright width170"> 
        <div class="dl_register">
         <span class="noaccount">已有账号？</span>
         <a href="/Portal/Account/Login">点击登录</a>
        </div> 
        <h3 class="dl_otherchoice">使用其他账号登录：</h3> 
        <div class="dl_logos"> 
         <a class="dl_sinalogo dl_grey1 sina" href="javascript:void(0)" url="/User/OAuth/OAuthIndex?snstype=sina_connect_v2&amp;returnurl=http%3a%2f%2f51talk.zhiye.com%2fPortal%2fAccount%2fRegister&amp;host=51talk.zhiye.com&amp;portalid=104003">微博</a> 
         <a class="dl_qqlogo dl_grey1 qq" href="javascript:void(0)" url="/User/OAuth/OAuthIndex?snstype=qzone_login&amp;returnurl=http%3a%2f%2f51talk.zhiye.com%2fPortal%2fAccount%2fRegister&amp;host=51talk.zhiye.com&amp;portalid=104003">QQ</a> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 