<?=$this->render('memberheader');?>
   <div class="dl_content dl_gray_bg"> 
    <!----> 
    <!--申请职位 s--> 
    <!--申请职位 e--> 
    <!--我的简历 s--> 
    <!--简历内容 s--> 
 
    <div class="dl_bigwrap dl_heightagain clearfix dl_grey_bc"> 
      <?=$this->render('memberleft')?>
     <div class="rightcontent dl_height1 dl_new_error_wrap"> 
      <h3 class="dl_bigtit"><span class="dl_postit">我的简历</span></h3> 
      <div class="dl_importprofile"> 
       <a class="import dl_import" href="javascript:void(0)">导入简历</a> 
       <a id="previewBtn" class="look" target="preview" href="/Portal/Resume/PreviewResume?applyform=e725c9e8-01eb-42ca-8321-eee7569f5301" style="">预览简历</a> 
       <span id="previewBtnDisable" class="look" style="color:#666;display:none;">预览简历</span> 
      </div> 
      <style type="text/css">
    *html .dl_myleftform .form_container {
        width: 490px;
        overflow: hidden;
    }

        *html .dl_myleftform .form_container .form_part .columntwo ul {
            width: 360px;
            overflow: hidden;
        }

        *html .dl_myleftform .form_container ul li {
            width: 360px;
            overflow: hidden;
        }
            /* .dl_myleftform .form_container li label{width: 100px}*/
            *html .dl_myleftform .form_container ul li span.preview_text {
                width: 220px;
                overflow: hidden;
            }

    .form_container li textarea {
        border: 1px solid #c1d5df;
        float: left;
        height: 100px;
        margin-right: 5px;
        padding: 3px;
        width: 300px;
    }
</style> 
      <div class="dl_basicinfo"> 
       <div class="dl_greyline_bg">
        <span class="dl_menutit ">个人信息</span>
       </div> 
       <div class="dl_basicborder mainContainer "> 
        <form method="post" id="cd7c7714-b39a-43a0-9c7e-f7382f04f5cd" name="cd7c7714-b39a-43a0-9c7e-f7382f04f5cd" enctype="multipart/form-data" action="/Portal/Resume/ResumeItem"> 
         <div class="clearfix"> 
          <div id="resumeitems" name="singleedit" class="dl_myleftform" style="display:none;;"> 
           <input type="hidden" name="oId" id="Hidden1" value="a4fc2e74-0cd1-4163-a4a1-57112d95fcfc" /> 
           <input type="hidden" name="jId" id="Hidden4" value="-1" /> 
           <input type="hidden" name="mId" id="Hidden5" value="0" /> 
           <input name="_objectDataID" type="hidden" value="NDc0NjFhMzktMTg2My00YzM3LTlmOTgtY2ZkN2UyOTFlNmQ0JGE0ZmMyZTc0LTBjZDEtNDE2My1hNGExLTU3MTEyZDk1ZmNmYw==" />
           <input name="_metaObjID" type="hidden" value="NDc0NjFhMzktMTg2My00YzM3LTlmOTgtY2ZkN2UyOTFlNmQ0" />
           <input name="_viewName" type="hidden" value="UGVyc29uUHJvZmlsZVZpZXc=" />
           <input name="_version" type="hidden" value="MjAxMzA3MDQwNDQ4NDUzNzIx" />
           <input name="_formIndex" type="hidden" value="1" />
           <div class="form_container" id="RecruitmentPortal.PersonProfile"> 
            <h2 class="form_title"> <strong>个人信息</strong> <span class="tab"></span> </h2> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
      
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columntwo"> 
 
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
 
             </div> 
             <div class="clear"></div> 
            </div> 
           </div> 
          </div> 
          <div name="singleview" class="dl_myleftform" style=""> 
           <div class="form_container" id="RecruitmentPortal.PersonProfile"> 
            <h2 class="form_title"> <strong>个人信息</strong> <span class="tab"></span> </h2> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>姓名：</label> <span class="preview_text"><?=$user_info['user_name']?></span> </li> 
               <li><label>邮箱：</label> <span class="preview_text"><?=$user_info['email']?></span> </li> 
               <li><label>手机号：</label> <span class="preview_text"><?=$user_info['tel']?></span> </li> 
               <li><label>出生日期：</label> <span class="preview_text"><?=$user_info['birth']?></span> </li> 
               <li><label>性别：</label> <span name="RecruitmentPortalPersonProfile_gender_span" class="preview_text"><?=$user_info['sex']?></span> </li> 
               <li><label>现居住地：</label> <span class="preview_text"></span> </li> 
               <li><label>户口所在地：</label> <span class="preview_text"></span> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columntwo"> 
              <ul> 
               <li><label>最高学历：</label><?=$record['major_li']?></li> 
               <li><label>学习形式：</label> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>民族：</label>汉 </li> 
               <li><label>个人头像</label><img src="<?=$user_info['images']?>" width="100"></li> 
               <li><label>自我评价：</label> <span class="preview_text"></span><?=$record['appraise']?> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
           </div> 
          </div> 
          <div class="dl_myrightfile"> 
           <div style="width: 118px; margin-left: 12px"> 
            <a name="btnSingleSave" href="#this" class="dl_btn_grey3" style="display:none;"> <span>保存</span> </a> 
            <a name="btnSingleCancel" href="#this" class="dl_btn_grey3" style="display:none;float: right;"> <span>取消</span> </a> 
            <a name="btnSingleEdit" href="javascript:void(0)" class="dl_mglft10" style="float: right; padding-bottom: 10px;">编辑</a> 
           </div> 
           <img id="idPhoto" style="width: 120px; height: 140px; padding-top: 10px; display: none;" src="images/upfile.jpg" /> 
           <br /> 
           <a class="blue" id="idPhotoUploadBtn" href="javascript:void(0)" style="display:none;">上传照片</a> 
           <ul id="idPhotoerrinfo" class="warninfo" style="color: #f17f7f; font-size: 12px;"> 
           </ul> 
           <ul id="idPhotowarninfo" class="warninfo" style="display:none;"> 
           </ul> 
          </div> 
         </div> 
        </form> 
        <input type="hidden" class="viewName" value="201307040448453721" /> 
       </div> 
      </div> 
      <style type="text/css">
    *html .dl_myleftform .form_container {
        width: 490px;
        overflow: hidden;
    }

        *html .dl_myleftform .form_container .form_part .columntwo ul {
            width: 360px;
            overflow: hidden;
        }

        *html .dl_myleftform .form_container ul li {
            width: 360px;
            overflow: hidden;
        }
            /* .dl_myleftform .form_container li label{width: 100px}*/
            *html .dl_myleftform .form_container ul li span.preview_text {
                width: 220px;
                overflow: hidden;
            }

    .form_container li textarea {
        border: 1px solid #c1d5df;
        float: left;
        height: 100px;
        margin-right: 5px;
        padding: 3px;
        width: 300px;
    }
</style> 
      <div class="dl_basicinfo"> 
       <div class="dl_greyline_bg">
        <span class="dl_menutit ">求职意向</span>
       </div> 
       <div class="dl_basicborder mainContainer "> 
        <form method="post" id="fdfa1ef1-0a89-4bf9-8500-674c5e233e3f" name="fdfa1ef1-0a89-4bf9-8500-674c5e233e3f" enctype="multipart/form-data" action="/Portal/Resume/ResumeItem"> 
         <div class="clearfix"> 
          <div id="resumeitems" name="singleedit" class="dl_myleftform" style="display:none;;"> 
           <input type="hidden" name="oId" id="Hidden1" value="f09d29a6-3c52-4237-bcd5-ecaddf83c9de" /> 
           <input type="hidden" name="jId" id="Hidden4" value="-1" /> 
           <input type="hidden" name="mId" id="Hidden5" value="1" /> 
           <input name="_objectDataID" type="hidden" value="OGJjNjNiM2UtZDYzZC00MTZiLThjMWYtOTkwNzIyODJlZTNmJGYwOWQyOWE2LTNjNTItNDIzNy1iY2Q1LWVjYWRkZjgzYzlkZQ==" />
           <input name="_metaObjID" type="hidden" value="OGJjNjNiM2UtZDYzZC00MTZiLThjMWYtOTkwNzIyODJlZTNm" />
           <input name="_viewName" type="hidden" value="T2JqZWN0aXZlVmlldw==" />
           <input name="_version" type="hidden" value="MjAxMzA3MDQwNDQ4NDU2MDkx" />
           <input name="_formIndex" type="hidden" value="11" />
           <div class="form_container" id="RecruitmentPortal.Objective"> 
            <h2 class="form_title"> <strong>求职意向</strong> <span class="tab"></span> </h2> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              
             </div> 
             <div class="clear"></div> 
            </div> 
           </div> 
          </div> 
          <div name="singleview" class="dl_myleftform" style=""> 
           <div class="form_container" id="RecruitmentPortal.Objective"> 
            <h2 class="form_title"> <strong>求职意向</strong> <span class="tab"></span> </h2> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>现从事职业：</label> <span class="preview_text"><?=$resume['now_occupation']?></span> </li> 
               <li><label>求职状态：</label> </li> 
               <li><label>期望从事职业：</label> <span class="preview_text"><?=$resume['expect_occupation']?></span> </li> 
               <li><label>现月薪(税前)：</label><?=$resume['now_salary']?> </li> 
               <li><label>期望月薪(税前)：</label> <?=$resume['expect_salary']?></li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
           </div> 
          </div> 
          <div class="dl_myrightfile"> 
           <div style="width: 118px; margin-left: 12px"> 
            <a name="btnSingleSave" href="#this" class="dl_btn_grey3" style="display:none;"> <span>保存</span> </a> 
            <a name="btnSingleCancel" href="#this" class="dl_btn_grey3" style="display:none;float: right;"> <span>取消</span> </a> 
            <a name="btnSingleEdit" href="javascript:void(0)" class="dl_mglft10" style="float: right; padding-bottom: 10px;">编辑</a> 
           </div> 
          </div> 
         </div> 
        </form> 
        <input type="hidden" class="viewName" value="201307040448456091" /> 
       </div> 
      </div> 
      <div class="dl_educationwrap mainContainer" style="padding: 0px 20px;"> 
       <div class="dl_greyline_bg"> 
        <span class="dl_menutit">教育背景</span> 
       </div> 
       <div class="dl_basicborder" style="display: none;"> 
        <form method="post" id="emptyFrom_7" name="emptyFrom_7" enctype="multipart/form-data" action="/Portal/Resume/ResumeItem" style="display: none;"> 
         <div class="eduhistory_drmmbnew pos_realitive"> 
          <div class="dl_delupd blue deletelink_edrmmb pos_absolute dl_right0" style="width: 660px;">
           <a name="delItem" href="javascript:void(0)">删除</a> 
           <a name="editItem" href="javascript:void(0)" class="dl_mglft10">编辑</a>
          </div> 
          <div id="resumeitems" class="eduinfo rightcontent_edrmmb"> 
           <input type="hidden" name="oId" id="oId" value="" /> 
           <input type="hidden" name="jId" id="jId" value="-1" /> 
           <input type="hidden" name="mId" id="mId" value="7" /> 
           <div class="form_container" id="RecruitmentPortal.Education"> 
            <h2 class="form_title"> <strong>教育背景</strong> <span class="tab"></span> </h2> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>学校名称：</label> <span class="preview_text"></span> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li> <label> 时间：</label> <span class="preview_text start_date"> </span> <span class="preview_text end_date"> </span> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>学历：</label> </li> 
               <li><label>学位：</label> </li> 
               <li><label>专业名称：</label> <span class="preview_text"></span> </li> 
               <li><label>专业描述：</label> <span class="preview_text"></span> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
           </div> 
          </div> 
         </div> 
         <div class="dl_borderdashed"></div> 
        </form> 
       </div> 
       <div class="dl_basicborder"> 
        <form method="post" id="10655b54-ca89-4bd0-a9a9-b65600e0174a" name="10655b54-ca89-4bd0-a9a9-b65600e0174a" enctype="multipart/form-data" action="/Portal/Resume/ResumeItem"> 
         <div class="eduhistory_drmmbnew pos_realitive"> 
          <div class="dl_delupd blue deletelink_edrmmb pos_absolute dl_right0" style="width: 150px;"> 
           <a name="delItem" href="javascript:void(0)">删除</a> 
           <a name="editItem" href="javascript:void(0)" class="dl_mglft10">编辑</a> 
          </div> 
          <div id="resumeitems" class="eduinfo rightcontent_edrmmb"> 
           <input type="hidden" name="oId" id="Hidden7" value="39cc3186-545a-4cc9-8b9e-74c80a398ad8" /> 
           <input type="hidden" name="jId" id="Hidden8" value="-1" /> 
           <input type="hidden" name="mId" id="Hidden9" value="7" /> 
           <div class="form_container" id="RecruitmentPortal.Education"> 
            <h2 class="form_title"> <strong>教育背景</strong> <span class="tab"></span> </h2> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
    
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
      
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
  
             </div> 
             <div class="clear"></div> 
            </div> 
           </div> 
          </div> 
         </div> 
         <div class="dl_borderdashed"></div> 
        </form> 
       </div> 
       <div class="dl_basicborder"> 
        <form method="post" id="fa8a475a-1e60-4402-bc67-15bd75bcde7f" name="fa8a475a-1e60-4402-bc67-15bd75bcde7f" enctype="multipart/form-data" action="/Portal/Resume/ResumeItem"> 
         <div class="eduhistory_drmmbnew pos_realitive"> 
          <div class="dl_delupd blue deletelink_edrmmb pos_absolute dl_right0" style="width: 150px;"> 
           <a name="delItem" href="javascript:void(0)">删除</a> 
           <a name="editItem" href="javascript:void(0)" class="dl_mglft10">编辑</a> 
          </div> 
          <div id="resumeitems" class="eduinfo rightcontent_edrmmb"> 
           <input type="hidden" name="oId" id="Hidden7" value="fa3b9143-da17-4a66-9c22-69b6702cc1d0" /> 
           <input type="hidden" name="jId" id="Hidden8" value="-1" /> 
           <input type="hidden" name="mId" id="Hidden9" value="7" /> 
           <div class="form_container" id="RecruitmentPortal.Education"> 
            <h2 class="form_title"> <strong>教育背景</strong> <span class="tab"></span> </h2> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>学校名称：</label> <span class="preview_text"><?=$record['school_name']?></span> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li> <label> 时间：</label> <span class="preview_text start_date"><?=$record['job_time']?></span> <span class="preview_text end_date"> 今 </span> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>学历：</label> <span class="preview_text">硕士研究生</span> </li> 
               <li><label>学位：</label> <span class="preview_text">学士</span> </li> 
               <li><label>专业名称：</label> <span class="preview_text">qqq</span> </li> 
               <li><label>专业描述：</label> <span class="preview_text"></span> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
           </div> 
          </div> 
         </div> 
         <div class="dl_borderdashed"></div> 
        </form> 
       </div> 
       <input type="hidden" class="viewName" value="201307040448456411" /> 
       <div class="dl_mgtop10"> 
        <a name="addItem" href="#this" class="dl_add_ico blue">继续添加</a> 
       </div> 
      </div> 
      <div class="dl_educationwrap mainContainer" style="padding: 0px 20px;"> 
       <div class="dl_greyline_bg"> 
        <span class="dl_menutit">工作经验</span> 
       </div> 
       <div class="dl_basicborder" style="display: none;"> 
        <form method="post" id="emptyFrom_6" name="emptyFrom_6" enctype="multipart/form-data" action="/Portal/Resume/ResumeItem" style="display: none;"> 
         <div class="eduhistory_drmmbnew pos_realitive"> 
          <div class="dl_delupd blue deletelink_edrmmb pos_absolute dl_right0" style="width: 660px;">
           <a name="delItem" href="javascript:void(0)">删除</a> 
           <a name="editItem" href="javascript:void(0)" class="dl_mglft10">编辑</a>
          </div> 
          <div id="resumeitems" class="eduinfo rightcontent_edrmmb"> 
           <input type="hidden" name="oId" id="oId" value="" /> 
           <input type="hidden" name="jId" id="jId" value="-1" /> 
           <input type="hidden" name="mId" id="mId" value="6" /> 
           <div class="form_container" id="RecruitmentPortal.Experience"> 
            <h2 class="form_title"> <strong>工作经验</strong> <span class="tab"></span> </h2> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>单位名称：</label> <span class="preview_text"></span> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li> <label> 工作时间：</label> <span class="preview_text start_date"> </span> <span class="preview_text end_date"> </span> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>职位名称：</label> <span class="preview_text"></span> </li> 
               <li><label>工作地点：</label> <span class="preview_text"></span> </li> 
               <li><label>工作职责：</label> <span class="preview_text"></span> </li> 
               <li><label>部门：</label> <span class="preview_text"></span> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
           </div> 
          </div> 
         </div> 
         <div class="dl_borderdashed"></div> 
        </form> 
       </div> 
       <div class="dl_basicborder"> 
        <form method="post" id="1015a315-3343-4c51-9d11-3c90e10bc8b8" name="1015a315-3343-4c51-9d11-3c90e10bc8b8" enctype="multipart/form-data" action="/Portal/Resume/ResumeItem"> 
         <div class="eduhistory_drmmbnew pos_realitive"> 
          <div class="dl_delupd blue deletelink_edrmmb pos_absolute dl_right0" style="width: 150px;"> 
           <a name="delItem" href="javascript:void(0)">删除</a> 
           <a name="editItem" href="javascript:void(0)" class="dl_mglft10">编辑</a> 
          </div> 
          <div id="resumeitems" class="eduinfo rightcontent_edrmmb"> 
           <input type="hidden" name="oId" id="Hidden7" value="30d193ad-9915-4786-8d84-8191f9bc6c89" /> 
           <input type="hidden" name="jId" id="Hidden8" value="-1" /> 
           <input type="hidden" name="mId" id="Hidden9" value="6" /> 
           <div class="form_container" id="RecruitmentPortal.Experience"> 
            <h2 class="form_title"> <strong>工作经验</strong> <span class="tab"></span> </h2> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>单位名称：</label> <span class="preview_text">qqq</span> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li> <label> 工作时间：</label> <span class="preview_text start_date"> 1972年03月至</span> <span class="preview_text end_date"> 今 </span> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>职位名称：</label> <span class="preview_text">wqwq</span> </li> 
               <li><label>工作地点：</label> <span class="preview_text"></span> </li> 
               <li><label>工作职责：</label> <span class="preview_text">wqqqqqq</span> </li> 
               <li><label>部门：</label> <span class="preview_text"></span> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
           </div> 
          </div> 
         </div> 
         <div class="dl_borderdashed"></div> 
        </form> 
       </div> 
       <input type="hidden" class="viewName" value="201307040448456801" /> 
       <div class="dl_mgtop10"> 
        <a name="addItem" href="#this" class="dl_add_ico blue">继续添加</a> 
       </div> 
      </div> 
      <div class="dl_educationwrap mainContainer" style="padding: 0px 20px;"> 
       <div class="dl_greyline_bg"> 
        <span class="dl_menutit">语言能力</span> 
       </div> 
       <div class="dl_basicborder" style="display: none;"> 
        <form method="post" id="emptyFrom_4" name="emptyFrom_4" enctype="multipart/form-data" action="/Portal/Resume/ResumeItem" style="display: none;"> 
         <div class="eduhistory_drmmbnew pos_realitive"> 
          <div class="dl_delupd blue deletelink_edrmmb pos_absolute dl_right0" style="width: 660px;">
           <a name="delItem" href="javascript:void(0)">删除</a> 
           <a name="editItem" href="javascript:void(0)" class="dl_mglft10">编辑</a>
          </div> 
          <div id="resumeitems" class="eduinfo rightcontent_edrmmb"> 
           <input type="hidden" name="oId" id="oId" value="" /> 
           <input type="hidden" name="jId" id="jId" value="-1" /> 
           <input type="hidden" name="mId" id="mId" value="4" /> 
           <input name="_metaObjID" type="hidden" value="NTkwNGU4NWQtNTllNi00ZmY0LWI3MmMtNzYyMjZlYzc3ZjBm" />
           <input name="_viewName" type="hidden" value="TGFuZ1ZpZXc=" />
           <input name="_version" type="hidden" value="MjAxMzA3MDQwNDQ4NDU3MTIx" />
           <input name="_formIndex" type="hidden" value="41011" />
           <div class="form_container" id="RecruitmentPortal.Lang"> 
            <h2 class="form_title"> <strong>语言能力</strong> <span class="tab"></span> </h2> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>语言类型：</label> <select name="RecruitmentPortalLang_LanguageType" id="RecruitmentPortalLang_LanguageType" class="dropdownlist mul_select"> <option value="">请选择</option> <option value="0" title="英语">英语</option> <option value="1" title="日语">日语</option> <option value="2" title="韩语">韩语</option> <option value="3" title="法语">法语</option> <option value="4" title="德语">德语</option> <option value="5" title="西班牙语">西班牙语</option> <option value="6" title="意大利语">意大利语</option> <option value="7" title="阿拉伯语">阿拉伯语</option> <option value="8" title="俄语">俄语</option> <option value="9" title="其他">其他</option> </select> </li> 
               <li><label>掌握程度：</label> <select name="RecruitmentPortalLang_LanguageLevel" id="RecruitmentPortalLang_LanguageLevel" class="dropdownlist mul_select"> <option value="">请选择</option> <option value="1" title="入门">入门</option> <option value="2" title="熟练">熟练</option> <option value="3" title="精通">精通</option> <option value="4" title="母语">母语</option> </select> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
           </div> 
          </div> 
         </div> 
         <div class="dl_borderdashed"></div> 
        </form> 
       </div> 
       <input type="hidden" class="viewName" value="201307040448457121" /> 
       <div class="dl_mgtop10"> 
        <a name="addItem" href="#this" class="dl_add_ico blue">继续添加</a> 
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