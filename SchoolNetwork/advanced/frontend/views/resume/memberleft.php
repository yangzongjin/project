    <?php 
use yii\helpers\Url;

     ?>
    <div class="leftmenu"> 
      <div class="dl_greyline_bg"> 
       <span class="dl_menutit">账户设置</span> 
      </div> 
      <ul class="dl_menulist clearfix"> 
       <li> <a href="<?=Url::to(['resume/index'])?>" class="apply">我的申请</a> </li> 
       <li> <a href="<?=Url::to(['resume/member_resume'])?>" class="profile">我的简历</a> </li> 
       <li> <a href="<?=Url::to(['resume/member_collect'])?>" class="shoucang">已收藏职位</a> </li> 
       <!--<li 
         >
        
       <a href="/Portal/Account/EditPwd" class="changepwd">修改密码</a>
        
    </li--> 
       <li class="selected settingchoose"> <span class="dl_menuchose">账户设置</span><a href="<?=Url::to(['resume/member_info'])?>" class="shoucang">账户设置</a> </li> 
      </ul> 
     </div> 