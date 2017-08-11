<?=$this->render('memberheader');?>
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
    <?php echo $this->render('memberleft'); ?> 
     <div class="rightcontent"> 
      <h3 class="dl_bigtit"> <span class="dl_postit">个人简历展示</span> </h3> 
      <div class="account-settings"> 
       <div class="area"> 
        <table border="5">
        <tr>
          <td>学校名称</td>
          <td>专业名称</td>
          <td>学历</td>
          <td>单位名称</td>
          <td>职位名称</td>
          <td>工作时间</td>
          <td>曾经职责</td>
          <td>自我评价</td>
          <td></td>
        </tr>
        <?php foreach($data as $v){ ?>
            <tr>
              <td><?=$v['school_name']?></td>
              <td><?=$v['major_name']?></td>
              <td><?=$v['major_li']?></td>
              <td><?=$v['monad_name']?></td>
              <td><?=$v['position_name']?></td>
              <td><?=$v['job_time']?></td>
              <td><?=$v['job_duty']?></td>
              <td><?=$v['appraise']?></td>
              <td><a href="<?=Url::to(['resume/resume','id'=>$v['id']])?>">查看</a></td>
            </tr>
      <?php } ?>
        </table>
       
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