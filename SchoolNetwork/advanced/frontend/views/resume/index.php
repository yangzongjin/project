<?=$this->render('memberheader');?>
   <div class="dl_content dl_gray_bg"> 
    <!----> 
    <!--申请职位 s--> 
    <!--申请职位 e--> 
    <!--我的简历 s--> 
    <!--简历内容 s--> 
 
    <div class="dl_bigwrap dl_gray_bg clearfix"> 
        <?=$this->render('memberleft');?>
     <div class="rightcontent"> 
      <h3 class="dl_bigtit"><span class="dl_postit">我的申请</span> <span class="dl_mglft10">你还可以申请<span>2</span>个社招职位</span></h3> 
      <li class="result"> </li> 
      <div class="dl_mgtop20"> 
       <div class="dl_greyline_bg"> 
        <span class="dl_menutit">已完成申请</span> 
       </div> 
      </div> 
      <div class="dl_listposition dl_mgtop10"> 
       <h4> <span class="position blue"><a href="detail.html?620025245">PTD 助教总监</a> </span> <span class="address">北京市</span> </h4> 
       <ul class="detail clearfix"> 
        <li>职位编号：A620025245</li> 
        <li>截止日期：- - -</li> 
        <li>职位状态：正常</li> 
        <li class="testResult result" id="110783809" jobid="620016222" personid="622717076"> <a href="/Portal/Apply/ApplyDetail?jId=620025245&amp;applyId=110621433" target="_blank" class="dl_mglft10">查看申请</a> <a href="/Portal/Apply/ApplyDetail?jId=620025245&amp;applyId=110621433&amp;printing=true" target="_blank" class="dl_mglft10">打印&gt;&gt;</a> </li> 
       </ul> 
       <ul class="detail clearfix"> 
        <li>申请日期：2015-12-15</li> 
        <li>申请状态：处理中</li> 
       </ul> 
      </div> 
      <!-- 修改校招志愿 --> 
      <div class="tableNew" name="editform" style="display: none;"> 
       <div style="margin-bottom: 15px;">
        <span class="dl_postit">修改校招志愿</span>
       </div> 
       <div class="wish_ct"> 
        <table class="wish_container"> 
        </table> 
       </div> 
       <div class="wish_container">
        <span name="wishError" class="new_pop_error wish_err" style="display: none;"></span>
       </div> 
       <div class="wish_container">
        <span class="position dl_ft12_grey">注：请按照从第一志愿开始的顺序修改志愿，例：若只有两个志愿，那只能选择一个为第一志愿，一个为第二志愿</span>
       </div> 
      </div> 
      <div class="dl_bd_btm dl_padt15"></div> 
      <div class="dl_more blue dl_ft14">
       <b><a href="index.html">查看更多职位&gt;&gt;</a></b>
      </div> 
      <input id="proId" type="hidden" /> 
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