<?php 
  use yii\helpers\Url;
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <title>账户设置</title> 
 
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
 
 </head> 
 <body> 
  <div class="bs_deliver"> 
   <div class="dl_header_border"> 
    <div class="dl_header clearfix"> 
     <div class="dl_logo"> 
      <img id="logoImg" class="header-logo-img" src="jobs/images/104003_medias_20141215_20141215logo.jpg?v=635542641034400000" style="width: 300px;height:80px; " /> 
     </div> 
     <div class="dl_rightit"> 
      <div class="isApplyDetail" > 
       <div class="isLogin" > 
        <span id="topUserEmail" class="pad3" title=""><span class="userShortName"></span>，欢迎您！</span> 
        <span class="pad3"><a href="<?=Url::to(['site/index'])?>">招聘首页</a></span> 
        <em class="dl_header_line dl_padtb05">|</em> 
        <span class="isUserCenter" > <span class="pad3"><a href="member_apply.html">个人中心</a></span> <em class="dl_header_line dl_padtb05">|</em> </span> 
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
       .area-title {
          height:20px;
          border-bottom:solid 1px #D3DAE2
        }
        .area-title .label {
          display:inline-block;
          border-bottom:solid 1px #3887BC;
          padding:0 3px 0 3px
        }
        .account-settings .area {
          padding:10px 10px 10px 10px
        }
        .base-info,.we-chat-bind {
          margin:10px 20px 10px 30px;
          padding:10px;
          position:relative
        }
        .release-relation-weChat {
          display:inline-block;
          float:right
        }
        .text {
          padding:10px 0 5px 10px
        }
        .relation-user {
          color:#879900;
          display:inline-block;
          margin-left:10px
        }
        .td1 {
          width:15%;
          text-align:right;
          padding-right:20px
        }
        .td2 {
          width:59%
        }
        .td3 {
          width:25%;
          text-align:right
        }
        .btn {
          color:#06C;
          margin-left:15px;
          cursor:pointer;
            z-index:99;
        }
        .base-info .btn {
            float:right;
        }
        .user-name-label {
            margin-right:20px
        }
        input.user-name {
          width:260px;
            height:20px;
            line-height:20px;
        }
        table.user-info-table td {
          padding-top:5px;
          padding-bottom:5px
        }
        input.confirm-password,input.new-password,input.original-password {
           width:200px;
            height:20px;
            line-height:20px;
        }
        .err-msg {
          color:#F17F7F;
          margin-left:10px;
          position:absolute;
        }
        .err-msg.err-message-name {
          white-space:nowrap;
          position:absolute
        }
        .password-pattern-note {
          color:#AAA;
        }
        .is-not-null {
          color:#F17F7F;
          width:10px;
          display:inline-flex;
        }
        .we-chart-img {
          height:200px
        }
        .dl_dialog1 {
            -moz-border-radius: none;
            -webkit-border-radius: none;
            -o-border-radius: none;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            -o-box-shadow: none;
        }
    </style> 
    <style type="text/css">
        .pop-container{box-shadow:4px 3px 10px rgba(0,0,0,.3),-4px -3px 10px rgba(0,0,0,.3);-moz-box-shadow:4px 3px 10px rgba(0,0,0,.3),-4px -3px 10px rgba(0,0,0,.3);-webkit-box-shadow:4px 3px 10px rgba(0,0,0,.3),-4px -3px 10px rgba(0,0,0,.3);-o-box-shadow:4px 3px 10px rgba(0,0,0,.3),-4px -3px 10px rgba(0,0,0,.3);background-color:#fff;-webkit-border-radius:8px}.pop-header{background-color:#4290C1;color:#fff;border-top-left-radius:8px;border-top-right-radius:8px;padding:7px}.pop-content{height:70px;border-bottom:solid 1px #ccc;text-align:center;vertical-align:middle}.pop-text{margin-top:33px}.pop-bottom{text-align:right;padding:7px 10px 7px 10px}.pop-cancel,.pop-submit{padding:5px 13px 5px 13px;background-color:#CCC;margin-left:10px;margin-right:12px;cursor:pointer}.simplemodal-overlay{background-color:#000}
    </style> 
  
    <div class="dl_bigwrap dl_gray_bg clearfix"> 
    <div class="leftmenu"> 
      <div class="dl_greyline_bg"> 
       <span class="dl_menutit">账户设置</span> 
      </div> 
      <ul class="dl_menulist clearfix"> 
       <li> <a href="<?=Url::to(['add/company_add'])?>" class="apply">发布职位</a> </li> 
       <li> <a href="<?=Url::to(['resume/member_resume'])?>" class="profile">企业个人信息</a> </li> 
      </ul> 
     </div> 
     <div class="rightcontent"> 
      <h3 class="dl_bigtit"> <span class="dl_postit">企业信息</span> </h3> 
      <div class="account-settings"> 
       <div class="area"> 
        <div class="area-title"> 
         <div class="label">
         </div> 
        </div> 
        <div class="base-info">
              <table border="5">
                    <tr>
                      <td>公司名称</td>
                      <td>联系人</td>
                      <td>联系电话</td>
                      <td>用户名</td>
                      <td>Email</td>
                    </tr>
                    <?php foreach($map as $v){ ?>
                      <tr>
                        <td><?=$v['company_name']?></td>
                        <td><?=$v['touch_name']?></td>
                        <td><?=$v['user_tel']?></td>
                        <td><?=$v['user_name']?></td>
                        <td><?=$v['user_email']?></td>
                      </tr>
                    <?php } ?>
              </table>

        </div> 
       </div> 
       <div class="area wechart"> 
        <div class="area-title"> 
         <div class="label">
          微信绑定
         </div> 
        </div> 
        <div class="we-chat-bind"></div> 
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