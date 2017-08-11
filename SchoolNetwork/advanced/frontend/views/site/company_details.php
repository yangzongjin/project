<?php 
use yii\helpers\Url;

 ?>

<!--module:menu end--> 
  </div> 
  <div class="pictureturn"> 
   <!--module:imageslider begin--> 
   <div class="bs-module"> 
    <div class="imageslider-default "> 
     <div class="flexslider"> 
      <ul class="slides"> 
       <li> <img src="jobs/images/104003_medias_2015923_201592317513947.jpg" /> </li> 
      </ul> 
     </div> 
       <script type="text/javascript" src="jobs/js/jquery-1.8.3.js?v=0.0.0.9"></script> 
        
 
    </div> 
   </div> 
   <!--module:imageslider end--> 
  </div> 
  <div class="contain clearfix"> 
   <div class="clearfix eheight"> 
    <!--module:positionsearch begin--> 
    <div class="bs-module"> 
     <div class="positionsearch-smallfresh "> 
      <a name="jlt"></a> 
      <div class="zhiweisousuo bodertop"> 
       <div class="parttitleline"></div> 
       <div class="parttitle"> 
        <span class="serchico"></span> 
        <div class="wordtitle">
         职位搜索
        </div> 
       </div> 
       <div class="serchcontain"> 
          <table border="1">
                <tr>
                  <td>职位月薪：<?=$info['position_price']?></td>
                  <td>工作地点：<?=$info['work_place']?></td>
                </tr>
                <tr>
                  <td>发布日期：<?=$info['update_time']?></td>
                  <td>工作性质：<?=$info['work_nature']?></td>
                </tr>
                <tr>
                  <td>工作经验:<?=$info['work_experience']?></td>
                  <td>最低学历：<?=$info['min_education']?></td>
                </tr>
                <tr>
                  <td>招聘人数:<?=$info['engage_num']?></td>
                  <td>职位类别：<?=$info['position_cate']?></td>
                </tr>

          </table>
       </div> 
      </div> 
      <script type="text/javascript">
    function GetParam(key) {
        return (document.location.search.match(new RegExp("(?:^\\?|&)" + key + "=(.*?)(?=&|$)")) || ['', null])[1];
    }

    function myHTMLEnCode(str) {
        var s = "";
        if (str.length == 0) return "";
        s = str.replace(/&/g, "&");
        s = s.replace(/</g, "<");
        s = s.replace(/>/g, ">");
        s = s.replace(/ /g, "&nbsp;");
        s = s.replace(/\'/g, "&#39;");
        
        s = s.replace(/\n/g, "<br>");
        return s;
    }

    function myHTMLDeCode(str) {
        var s = "";
        if (str.length == 0) return "";
        s = str.replace(/&/g, "&");
        s = s.replace(/</g, "<");
        s = s.replace(/>/g, ">");
        s = s.replace(/&nbsp;/g, " ");
        s = s.replace(/&#39;/g, "\'");
        s = s.replace(/"/g, "\"");
        s = s.replace(/<br>/g, "\n");
        return s;
    }

    var defaultText = "请输入关键字";

    $(document).ready(function () {
        $("input[name='keyword']").click(function () {
            $(this).val("");
        });

        var keyWord = GetParam("k");

        if (keyWord != null) {
            keyWord = decodeURIComponent(keyWord);
            keyWord = myHTMLDeCode(keyWord);

            $("input[name='k']").val(keyWord);
        }

        $("#searchlink").click(function () {
            var r = GetParam("r");
            r = (r == null ? -1 : r);
            var p = GetParam("p");
            p = (p == null ? "" : p);
            var c = GetParam("c");
            c = (c == null ? "" : c);
            var d = GetParam("d");
            d = (d == null ? "" : d);
            var k = $("input[name='k']").val();

            if (k == defaultText)
                k = "";

            k = myHTMLEnCode(k);
            k = encodeURIComponent($.trim(k));
            location.href = "/search" + "?r=" + r + "&p=" + p + "&c=" + c + "&d=" + d + "&k=" + k + '#jlt';
        });

        var keyStr = $("#k").val();
        if (!keyStr || keyStr == "") {
            $("#k").css("color", "#d2cece");
            $("#k").val(defaultText);
        }

        $("#k").focus(function () {
            var v = $(this).val();
            if (v == defaultText) {
                $(this).val("");
                $(this).css("color", "");
            }
        });

        $("#k").blur(function () {
            var v = $(this).val();
            if (!v || v == "") {
                $(this).val(defaultText);
                $(this).css("color", "#d2cece");
            }
        });

    });
</script> 
     </div> 
    </div> 
    <!--module:positionsearch end--> 
    <div class="zhaopindongtai bodertop"> 
     <!--module:newslist begin--> 
     <div class="bs-module"> 
      <div class="newslist-newsimple "> 
       <div class="parttitleline"></div> 
       <div class="parttitle">
        <span class="dongtaiico"></span>
        <div class="wordtitle">
         招聘动态
        </div>
       </div> 
       <a href="news.html" class="morelinks">更多&gt;&gt;</a> 
       <div class="dongtailinks"> 
        <ul> 
         <li><a href="news_detail.html?110000085" title="51Talk最嗨实习岗来啦~快来一起嗨" target="_blank">51Talk最嗨实习岗来...</a></li> 
        </ul> 
       </div> 
      </div> 
     </div> 
     <!--module:newslist end--> 
    </div> 
   </div> 
   <!--module:jobstab begin--> 
   <div class="bs-module"> 
    <div class="jobstab-default "> 
     <div class="zhiweiliebiao"> 
      <div class="listnav"> 
       <ul> 
        <li><a href="javascript:void(0)" class="listchooseon" id="hotjob">职位描述</a></li> 
        <li><a href="javascript:void(0)" id="longjob">公司介绍</a></li> 
       </ul> 
       <a href="javascript:void(0)" class="listmorelinks">更多&gt;&gt;</a> 
      </div> 
      <div class="listlinks"> 
       

                <div class="tab-cont-box">
                    <div class="tab-inner-cont">
                        <?=$descript['position_statement']?><br />
                        <?=$descript['qualification']?>


                        <h2>
                          <?=$descript['work_exact_place']?>
                        <!-- 
                            北京市东城区珠市口大街13号远兴能源大厦三层A323 -->
                            
                        </h2>
                        
                        
                        <p>
                            <button id="applyVacButton1" class="button-small" title="申请职位" onclick="zlzp.searchjob.ajaxApplyBrig3('1');dyweTrackEvent('bjobsdetail14gb','directapply_middle');"></button>
                        </p>
                        
                    </div>
                      <a href="" class='btn btn-primary' style="color: yellow;">申请职位</a>
                </div>

        <div class="tab-cont-box2" style="display: none;">
                    <div class="tab-inner-cont">
                        <?=$referral['content']?> 
 

                     <p>
                            <button id="applyVacButton1" class="button-small" title="申请职位" onclick="zlzp.searchjob.ajaxApplyBrig3('1');dyweTrackEvent('bjobsdetail14gb','directapply_middle');"></button>
                        </p>
                        
                    </div>
                      <a href="" class='btn btn-primary' style="color: yellow;">申请职位</a>
                </div>
  <script>
        $(function(){
             $('#hotjob').click(function(){
                 $('.tab-cont-box2').hide();
                $('.tab-cont-box').show();   
            }); 
            $('#longjob').click(function(){
                $('.tab-cont-box').hide();
                $('.tab-cont-box2').show();
            });
        });

  </script>


<!--        <ul id="ulhotjob"> 
        <li><a href="detail.html?620025388" id="620025388" title="业务培训总监/区域培训总监 /销售运 营总监">业务培训总监/区域培训总监 /销售运 营...</a></li> 
        <li><a href="detail.html?620025249" id="620025249" title="学术总监">学术总监</a></li> 
        <li><a href="detail.html?620025245" id="620025245" title="PTD 助教总监">PTD 助教总监</a></li> 
        <li><a href="detail.html?620025239" id="620025239" title="CRD 客服总监">CRD 客服总监</a></li> 
        <li><a href="detail.html?620023569" id="620023569" title="高级销售培训师">高级销售培训师</a></li> 
        <li><a href="detail.html?620021683" id="620021683" title="销售培训师">销售培训师</a></li> 
        <li><a href="detail.html?620021671" id="620021671" title="PHP开发工程师">PHP开发工程师</a></li> 
        <li><a href="detail.html?620021666" id="620021666" title="销售经理">销售经理</a></li> 
        <li><a href="detail.html?620021663" id="620021663" title="web前端开发工程师">web前端开发工程师</a></li> 
        <li><a href="detail.html?620021668" id="620021668" title="销售培训经理">销售培训经理</a></li> 
       </ul> 
       <ul id="ullongjob"> 
        <li><a href="detail.html?620025388" id="620025388" title="业务培训总监/区域培训总监 /销售运 营总监">业务培训总监/区域培训总监 /销售运 营...</a></li> 
        <li><a href="detail.html?620025249" id="620025249" title="学术总监">学术总监</a></li> 
        <li><a href="detail.html?620025245" id="620025245" title="PTD 助教总监">PTD 助教总监</a></li> 
        <li><a href="detail.html?620025239" id="620025239" title="CRD 客服总监">CRD 客服总监</a></li> 
        <li><a href="detail.html?620021683" id="620021683" title="销售培训师">销售培训师</a></li> 
        <li><a href="detail.html?620021671" id="620021671" title="PHP开发工程师">PHP开发工程师</a></li> 
        <li><a href="detail.html?620021666" id="620021666" title="销售经理">销售经理</a></li> 
        <li><a href="detail.html?620021663" id="620021663" title="web前端开发工程师">web前端开发工程师</a></li> 
        <li><a href="detail.html?620021668" id="620021668" title="销售培训经理">销售培训经理</a></li> 
        <li><a href="detail.html?620021669" id="620021669" title="市场运营">市场运营</a></li> 
       </ul> 
       <ul id="ulfirst"> 
        <li><a href="detail.html?620025388" id="620025388" title="业务培训总监/区域培训总监 /销售运 营总监">业务培训总监/区域培训总监 /销售运 营...</a></li> 
        <li><a href="detail.html?620025249" id="620025249" title="学术总监">学术总监</a></li> 
        <li><a href="detail.html?620025245" id="620025245" title="PTD 助教总监">PTD 助教总监</a></li> 
        <li><a href="detail.html?620025239" id="620025239" title="CRD 客服总监">CRD 客服总监</a></li> 
        <li><a href="detail.html?620023617" id="620023617" title="高级招聘专员">高级招聘专员</a></li> 
        <li><a href="detail.html?620023569" id="620023569" title="高级销售培训师">高级销售培训师</a></li> 
        <li><a href="detail.html?620023310" id="620023310" title="体验店-课程顾问">体验店-课程顾问</a></li> 
        <li><a href="detail.html?620023282" id="620023282" title="TMK电话邀约客服">TMK电话邀约客服</a></li> 
        <li><a href="detail.html?620023232" id="620023232" title="代理商培训师">代理商培训师</a></li> 
        <li><a href="detail.html?620021683" id="620021683" title="销售培训师">销售培训师</a></li> 
       </ul>  -->
      </div> 
     </div> 
     <script type="text/javascript">
    $(function() {
        loadData();

        function loadData() {
            $(".listlinks ul").each(function() {
                $(this).hide();
            })
            if ($(".listchooseon").attr("id") == "hotjob") {
                $("#ulhotjob").show();
            } else if ($(".listchooseon").attr("id") == "longjob") {
                $("#ullongjob").show();
            } else {

                var chooseId = $(".listchooseon").attr("id");
                chooseId = "#ul" + chooseId;
                $(chooseId).show();

            }
        }

        $(".listnav ul li a").hover(function() {
            $(this).parents("ul").find("a").removeClass("listchooseon");
            $(this).addClass("listchooseon");
            $(".listlinks ul").each(function() {
                $(this).hide();
            })
            if ($(this).attr("id") == "hotjob") {
                $("#ulhotjob").show();
            } else if ($(this).attr("id") == "longjob") {
                $("#ullongjob").show();
            } else {

                var chooseId = $(".listchooseon").attr("id");
                chooseId = "#ul" + chooseId;
                $(chooseId).show();
            }

        });

        $(".listmorelinks").click(function() {
            if ($(".listchooseon").attr("id") == "hotjob") {
                window.location.href = "allJob?o=" + 2;
            } else if ($(".listchooseon").attr("id") == "longjob") {
                window.location.href = "allJob?o=" + 1;
            } else {

                var chooseId = $(".listchooseon").attr("id");
                if (chooseId.indexOf("first") != -1) {
                    chooseId = chooseId.substr(5, chooseId.length - 5);
                    window.location.href = "allJob?p=" + "1^" + chooseId;
                } else if (chooseId.indexOf("Third") != -1) {
                    chooseId = chooseId.substr(5, chooseId.length - 5);
                    window.location.href = "allJob?p=" + "3^" + chooseId;
                }

            }
        });
    });
</script> 
    </div> 
   </div> 
   <!--module:jobstab end--> 
   <!--module:customerimage begin--> 
   <div class="bs-module"> 
    <div class="customerimage-default "> 
     <div class="imgplace zx_imgplace"> 
      <a href="http://weibo.com/5284689161/profile?topnav=1&amp;wvr=6" target="_blank" class="cusimglink"><img src="jobs/images/104003_medias_2015630_2015630141029143.jpg" class="cusimg" /></a> 
     </div> 
    </div> 
   </div> 
   <!--module:customerimage end--> 
  </div> 
