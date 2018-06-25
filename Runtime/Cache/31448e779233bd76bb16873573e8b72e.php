<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <!--
       《洛阳机场航班运行数据分析管理系统 v1.0》

              中国民用航空飞行学院洛阳分院　
                       机务工程部　
                        李光耀　
                 email: gyLinuxer@163.com
                    QQ: 447649795
                  微信: 447649795
-->

    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>洛阳机场航班数据管理系统v1.0</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="author">
    <!-- 网页描述 -->
    <meta name="description" content="hello">
    <!-- 关键字使用","分隔 -->
    <meta name="keywords" content="a,b,c">
    <!-- 禁止浏览器从本地机的缓存中调阅页面内容 -->
    <meta http-equiv="Pragma" content="no-cache">
    <!-- 用来防止别人在框架里调用你的页面 -->
    <meta http-equiv="Window-target" content="_top">
    <!-- content的参数有all，none，index，noindex，follow，nofollow，默认是all -->
    <meta name="robots" content="none">
    <!-- 收藏图标 -->
    <link rel="Shortcut Icon" href="favicon.ico" rel="external nofollow" >
    <!-- 网页不会被缓存 -->
    <meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
    <!-- 解决部分兼容性问题，如果安装了GCF，则使用GCF来渲染页面，如果未安装GCF，则使用最高版本的IE内核进行渲染。 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- 页面按原比例显示 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--[if lt IE 9]>

    <![endif]-->
    <!-- The styles -->
    <link id="bs-css" href="__PUBLIC__/css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href="__PUBLIC__/css/charisma-app.css" rel="stylesheet">
    <link href='__PUBLIC__/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='__PUBLIC__/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='__PUBLIC__/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='__PUBLIC__/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='__PUBLIC__/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='__PUBLIC__/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='__PUBLIC__/css/jquery.noty.css' rel='stylesheet'>
    <link href='__PUBLIC__/css/noty_theme_default.css' rel='stylesheet'>
    <link href='__PUBLIC__/css/elfinder.min.css' rel='stylesheet'>
    <link href='__PUBLIC__/css/elfinder.theme.css' rel='stylesheet'>
    <link href='__PUBLIC__/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='__PUBLIC__/css/uploadify.css' rel='stylesheet'>
    <link href='__PUBLIC__/css/animate.min.css' rel='stylesheet'>
    <link href='__PUBLIC__/css/doc.min.css' rel='stylesheet'>
    <link href='__PUBLIC__/css/MyCss.css' rel='stylesheet'>
    <link href='__PUBLIC__/css/jquery-ui.min.css' rel='stylesheet'>

    <link href="__PUBLIC__/css/bootstrap-table.css" rel="stylesheet">
    <link href="__PUBLIC__/css/zTreeStyle/zTreeStyle.css" rel="stylesheet">
    <link href="__PUBLIC__/css/bootstrap-editable.css" rel="stylesheet">
    <link href="__PUBLIC__/css/ui-dialog.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="__PUBLIC__/bower_components/jquery/jquery.min.js"></script>


    <script src="__PUBLIC__/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- library for cookie management -->
    <script src="__PUBLIC__/js/jquery.cookie.js"></script>
    <!-- calender plugin -->

    <!-- data table plugin -->
    <script src='__PUBLIC__/js/jquery.dataTables.min.js'></script>

    <!-- select or dropdown enhancer -->
    <script src="__PUBLIC__/bower_components/chosen/chosen.jquery.min.js"></script>
    <!-- plugin for gallery image view -->
    <script src="__PUBLIC__/bower_components/colorbox/jquery.colorbox-min.js"></script>
    <!-- notification plugin -->
    <script src="__PUBLIC__/js/jquery.noty.js"></script>
    <!-- library for making tables responsive -->
    <script src="__PUBLIC__/bower_components/responsive-tables/responsive-tables.js"></script>
    <!-- tour plugin -->
    <script src="__PUBLIC__/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
    <!-- star rating plugin -->
    <script src="__PUBLIC__/js/jquery.raty.min.js"></script>
    <!-- for iOS style toggle switch -->
    <script src="__PUBLIC__/js/jquery.iphone.toggle.js"></script>
    <!-- autogrowing textarea plugin -->
    <script src="__PUBLIC__/js/jquery.autogrow-textarea.js"></script>
    <!-- multiple file upload plugin -->
    <script src="__PUBLIC__/js/jquery.uploadify-3.1.min.js"></script>

    <link rel="shortcut icon" href="__PUBLIC__/img/favicon.ico">
    <script type="text/javascript" src="__PUBLIC__/ckeditor/ckeditor.js"></script>
    <script src="__PUBLIC__/js/gyComm.js"></script>
     <script src="__PUBLIC__/js/jquery-ui.min.js"></script>
    <script src="__PUBLIC__/js/gyComm.js"></script>
    <script src="__PUBLIC__/js//bootstrap-slider.min.js"></script>

    <script src="__PUBLIC__/js/dialog-plus-min.js"></script>
    <script src="__PUBLIC__/js/dialog-plus-min.js"></script>
    <link href="__PUBLIC__/css/select2.min.css" rel="stylesheet" />
    <script src="__PUBLIC__/js/select2.min.js"></script>
    <link href="__PUBLIC__/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script src="__PUBLIC__/js/bootstrap-datetimepicker.js"></script>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.js"></script>
</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation" style="height:75px;">

        <div class="container-fluid" >
            <div class="navbar-header col-sm-4">
                <a class="navbar-brand" href="#">
                    <img style="width: 350px;height:50px;" src="__PUBLIC__/img/logo.png" />
                </a>
            </div>
            <div class="col-sm-8">
                <ul class="nav navbar-nav" style="margin-top:15px">
                    <li class="dropdown"><a href="<?php echo U('CurFlight/index');?>">当前航班</a></li>
                    <li class="dropdown"><a href="<?php echo U('Welcome/index');?>">数据查询</a></li>
                    <li class="dropdown"><a href="<?php echo U('FlightAddAndInput/index');?>">添加航班</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            系统元数据管理 <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown"><a href="<?php echo U('Airlines/index');?>">航空公司</a></li>
                            <li class="divider"></li>
                            <li class="dropdown"><a href="<?php echo U('Airplane/index');?>">飞机管理</a></li>
                            <li class="divider"></li>
                            <li class="dropdown"><a href="<?php echo U('Flight/index');?>">航班管理</a></li>
                            <li class="divider"></li>
                            <li class="dropdown"><a href="<?php echo U('UserMng/index');?>" href="#">人员管理</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="<?php echo U('Login/LogOut');?>">退出登陆</a></li>
                </ul>
            </div>

        </div>
    </div>




            <div id="content_main" class="col-lg-12 col-sm-12">
                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .table>tbody>tr:hover {

        }
    </style>
</head>
<body>

<!---

 var table = $('<table class = "MyTable"  border="0" cellpadding="0" cellspacing="0">');
                            var tr = $("<tr></tr>");
                            tr.appendTo(table);
                            var td = $('<td style="color:red;font-weight:bold;">属性</td><td  style="color:red;font-weight:bold;">取值</td>');
                            td.appendTo(tr);
                            for (var i = 0; i < sx.length; i++) {
                                var tr = $("<tr></tr>");
                                tr.appendTo(table);
                                var td = $('<td style="color:blue;">' + sx[i].name + '</td><td>' + sx[i].value + '</td>');
                                td.appendTo(tr);


--->
<form id ="mForm" method="post" action="<?php echo U('CurFlight/index');?>">
    <input type="hidden" name="CKIDs" id="CKIDInput" value=""/>
    <?php if(($Warning) != ""): ?><div class="form-group">
            <div class="col-sm-12">
                <div class="alert alert-danger" role="alert"><strong>提示：</strong><?php echo ($Warning); ?></div>
            </div>
        </div><?php endif; ?>
    <div class="form-inline" style="text-align: center">
        <div class="form-group">
            <label for="FlightDate">运行日期：</label>
            <input type="text" name="FlightDate" class="form-control" datetimepicker id="FlightDate" style="width: 40%" value="<?php echo ($selDate); ?>">
        </div>
        <div class="form-group">
            <label for="StatusSel">状态：</label>
            <select id="StatusSel" name ="StatusSel" class="form-control">
                <option value="-1" <?php if($StatusSel===-1) echo "selected";?> >全部</option>
                <option value="-2" <?php if($StatusSel===-2) echo "selected";?>>未完成</option>
                <option value="0" <?php if($StatusSel===0) echo "selected";?>>待提交</option>
                <option value="1" <?php if($StatusSel===1) echo "selected";?>>已提交</option>
                <option value="3" <?php if($StatusSel===3) echo "selected";?>>被驳回</option>
                <option value="4" <?php if($StatusSel===4) echo "selected";?>>被取消</option>
                <option value="2" <?php if($StatusSel===2) echo "selected";?>>已完成</option>
            </select>
        </div>
        <button type="submit" class="btn btn-default">筛选</button>
        <a OneKeyOptBtn OpType = "0" class="btn btn-warning">一键提交</a>
        <?php if(($userType) != "0"): ?><a OneKeyOptBtn OpType = "1" class="btn btn-success">一键确认</a><?php endif; ?>

    </div>
    <div class="form-inline" style="text-align: center;margin-top: 10px;">
        <label class="label label-default">待提交:<?php echo ($ST_Status0); ?></label>
        <label class="label label-warning">已提交:<?php echo ($ST_Status1); ?></label>
        <label class="label label-primary">被取消:<?php echo ($ST_Status4); ?></label>
        <label class="label label-danger">已驳回:<?php echo ($ST_Status3); ?></label>
        <label class="label label-success">已完成:<?php echo ($ST_Status2); ?></label>
    </div>
    <hr/>
<div class="row">

    <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
        <div class="modal-dialog modal-lg" style="width: 1000px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h5 class="modal-title" id="myModalLabel">航班数据填写</h5>
                </div>
                <div class="modal-body">
                    <iframe id = "frm1" src="" width="98%" border="0" frameborder="0px" height="530px;"  scrolling="vertical"></iframe>
                </div>
            </div>
        </div>
    </div>
    <table class="table  table-bordered bootstrap-datatable datatable responsive">
        <thead>
        <tr>

            <th>序号</th>
            <th>航班号</th><!-- 生成类型 航空公司　起点　终点　航班类型--->
            <th>运行日期</th>
            <th>机号</th><!-- 航空公司　机号　机型　座位总数-->
            <th>方向</th>
            <th >成人</th>
            <th >儿童</th>
            <th >婴儿</th>
            <th>过站人数</th>
            <th >合计</th>
            <th>客座率</th>
            <th >货物</th>
            <th >邮件</th>
            <th >行李</th>
            <th >状态</th>
            <th>客座率</th>
            <th>填写</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($TodayFlightData)): $i = 0; $__LIST__ = $TodayFlightData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr  <?php if($i %2==0) { echo "style=\"background-color:#f9f9f9;\""; } ?>
            >
            <td rowspan="2" >
                <div class="checkbox">
                    <label>
                        <input ckid="<?php echo ($vo["id"]); ?>" IDChK type="checkbox"><?php echo ($vo["id"]); ?>
                    </label>
                </div>

            </td>
            <td rowspan="2" >
                <?php require APP_PATH."/MyConf/FlightTypes.php"; $FlightTypeStr = $FlightType_Arr[intval(($vo["FlightType"]))]; require APP_PATH."/MyConf/FlightCategorys.php"; $FlightCategoryStr = $FlightCategory_Arr[intval(($vo["Category"]))]; $content = '<table class = "MyTable"  border="0" cellpadding="0" cellspacing="0"><tr><td style="color:red;font-weight:bold;">属性</td><td  style="color:red;font-weight:bold;">取值</td></tr><tr><td style="color:blue;">生成类型</td><td>'.$vo["Type"].'</td></tr><tr><td style="color:blue;">航空公司</td><td>'.$vo["FlightAirline"].'</td></tr><tr><td style="color:blue;">航班类型</td><td>'.$FlightTypeStr.'</td></tr><tr><td style="color:blue;">航班类别</td><td>'.$FlightCategoryStr.'</td></tr><tr><td style="color:blue;">起点</td><td>'.$vo["Origin"].'</td></tr><tr><td style="color:blue;">终点</td></td><td>'.$vo["Destination"].'</td></tr>'; ?>

                <a  class="popover-show"
                    data-container="body"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-content='<?php echo $content; ?>'>
                    <?php echo ($vo["FlightNo"]); ?>
                </a>
            </td>
            <td rowspan="2" >
                <?php $year = date("Y"); $date = strtotime($vo["FlightDate"]); $str = date("n月j日",$date); if($year != date("Y",$date)){ $str = date("Y",$date)."年".$str; } if(date('Y-m-d') != date('Y-m-d',$date)){ echo '<span style="color: #1A7E1E;font-weight: bolder;">'.$str.'</span>'; }else{ echo $str; } ?>
            </td>
            <td rowspan="2" >
                <?php $content = '<table class = "MyTable"  border="0" cellpadding="0" cellspacing="0"><tr><td style="color:red;font-weight:bold;">属性</td><td  style="color:red;font-weight:bold;">取值</td></tr><tr><td style="color:blue;">机型</td><td>'.$vo["AirplaneModel"].'</td></tr><tr><td style="color:blue;">座位数</td><td>'.$vo["Seats"].'</td></tr><tr><td style="color:blue;">航空公司</td><td>'.$vo["AirplaneAirline"].'</td></tr>'; ?>

                <a  class="popover-show"
                    data-container="body"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-content='<?php echo $content; ?>'>
                    <?php echo ($vo["AirplaneNo"]); ?>
                </a>
            </td>
            <td style="color: blue;font-weight: bold;">
                <?php if(($vo['FlightType'] == '0') OR ($vo['FlightType'] == '2') OR ($vo['FlightType'] == '3') OR ($vo['FlightType'] == '4') OR ($vo['FlightType'] == '5')): ?>到达
                    <?php else: ?>
                    --<?php endif; ?>
            </td>
            <td>
                <?php if(($vo["ArrAdult"]) == "0"): ?>--<?php endif; ?>
                <?php if(($vo["ArrAdult"]) != "0"): echo ($vo["ArrAdult"]); endif; ?>
            </td>
            <td>
                <?php if(($vo["ArrChildren"]) == "0"): ?>--<?php endif; ?>
                <?php if(($vo["ArrChildren"]) != "0"): echo ($vo["ArrChildren"]); endif; ?>
            </td>
            <td>
                <?php if(($vo["ArrBaby"]) == "0"): ?>--<?php endif; ?>
                <?php if(($vo["ArrBaby"]) != "0"): echo ($vo["ArrBaby"]); endif; ?>
            </td>
            <td>
                --
            </td>
            <td style="color: blue;">
                <?php if(($vo["ArrPeopleCnt"]) == "0"): ?>--<?php endif; ?>
                <?php if(($vo["ArrPeopleCnt"]) != "0"): echo ($vo["ArrPeopleCnt"]); endif; ?>
            </td>
            <td style="color: blue;">
                <?php if(($vo["ArrRate"]) == "0"): ?>--<?php endif; ?>
                <?php if(($vo["ArrRate"]) != "0"): echo round($vo["ArrRate"]*100,1)."%"; endif; ?>
            </td>
            <td style="font-weight: bold;">
                <?php if(($vo["ArrCargo"]) == "0"): ?>--<?php endif; ?>
                <?php if(($vo["ArrCargo"]) != "0"): echo ($vo["ArrCargo"]); endif; ?>
            </td>
            <td style="font-weight: bold;">
                <?php if(($vo["ArrMail"]) == "0"): ?>--<?php endif; ?>
                <?php if(($vo["ArrMail"]) != "0"): echo ($vo["ArrMail"]); endif; ?>
            </td>
            <td style="font-weight: bold;">
                <?php if(($vo["ArrLuggage"]) == "0"): ?>--<?php endif; ?>
                <?php if(($vo["ArrLuggage"]) != "0"): echo ($vo["ArrLuggage"]); endif; ?>
            </td>



            <td rowspan="2" >
                <?php $lb = ""; $color = ""; if($vo["State"]==0){ $lb = "待提交"; $color = "label-default"; }else if($vo["State"]==1){ $lb = "已提交"; $color = "label-warning"; }else if($vo["State"]==2){ $lb = "已完成"; $color = "label-success"; }else if($vo["State"]==3){ $lb = "被驳回"; $color = "label-danger"; }else if($vo["State"]==4 ){ $lb = "被取消"; $color = "label-primary"; } echo "<label class=\"label ".$color."\">".$lb."</span>"; ?>
            </td>
            <td rowspan="2">
                <?php echo "<span style=\"color:".$color.";font-weight: bold\">".round($vo["AvgRate"]*100,1)."%</span>"; ?>
            </td>
            <td rowspan="2">
                <?php $btn_s = ""; if($vo["State"]==1){ if($userType==0){ $btn_s = "disabled"; } }else if($vo["State"]==2){ if($userType!=2){ $btn_s = "disabled"; } } echo "<a class=\"btn btn-success btn-sm\" href=\"#myModal\" name=\"FillBtn\" data-toggle=\"modal\" data-target=\"#myModal\" rowid=\"".$vo["id"]."\"".$btn_s.">填写</a>"; ?>
            </td>
            <td rowspan="2">
                <a class="btn btn-primary btn-sm" href="#" BtnID = "<?php echo ($vo["id"]); ?>" OptBtn >操作</a>
            </td>
            </tr>
            <tr <?php if($i %2==0){ echo "style=\"background-color:#f9f9f9;\""; } ?>>

            <td style="color: red;font-weight: bold;">
                <?php if(($vo['FlightType'] == '1') OR ($vo['FlightType'] == '2') OR ($vo['FlightType'] == '3') OR ($vo['FlightType'] == '4') OR ($vo['FlightType'] == '5')): ?>出发
                    <?php else: ?>
                    --<?php endif; ?>
            </td>
            <td style="font-weight: bold;">
                <?php if(($vo["Adult"]) == "0"): ?>--<?php endif; ?>
                <?php if(($vo["Adult"]) != "0"): echo ($vo["Adult"]); endif; ?>
            </td>
            <td style="font-weight: bold;">
                <?php if(($vo["Children"]) == "0"): ?>--<?php endif; ?>
                <?php if(($vo["Children"]) != "0"): echo ($vo["Children"]); endif; ?>
            </td>
            <td style="font-weight: bold;">
                <?php if(($vo["Baby"]) == "0"): ?>--<?php endif; ?>
                <?php if(($vo["Baby"]) != "0"): echo ($vo["Baby"]); endif; ?>
            </td>
            <td style="font-weight: bold;">
                <?php echo ($vo["GoStationPeople"]); ?>
            </td >
            <td style="color: blue;">
                <?php if(($vo["PeopleCnt"]) == "0"): ?>--<?php endif; ?>
                <?php if(($vo["PeopleCnt"]) != "0"): echo ($vo["PeopleCnt"]); endif; ?>
            </td>
            <td style="color: blue;">
                <?php if(($vo["ToRate"]) == "0"): ?>--<?php endif; ?>
                <?php if(($vo["ToRate"]) != "0"): echo round($vo["ToRate"]*100,1)."%"; endif; ?>
            </td>
            <td>
                <?php if(($vo["Cargo"]) == "0"): ?>--<?php endif; ?>
                <?php if(($vo["Cargo"]) != "0"): echo ($vo["Cargo"]); endif; ?>
            </td>
            <td>
                <?php if(($vo["Mail"]) == "0"): ?>--<?php endif; ?>
                <?php if(($vo["Mail"]) != "0"): echo ($vo["Mail"]); endif; ?>
            </td>
            <td>
                <?php if(($vo["Luggage"]) == "0"): ?>--<?php endif; ?>
                <?php if(($vo["Luggage"]) != "0"): echo ($vo["Luggage"]); endif; ?>
            </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div>

</form>
<script>
    var CkIDs = [];
    var settings = {
        trigger:'click',
        title:'WebUI Popover ',
        content:'<p>This is webui popover demo.</p><p>just enjoy it and have fun !</p>',
        width:200,
        multi:true,
        closeable:false,
        style:'',
        delay:300,
        padding:true
    };

    function zkSubmit($rowId) {
        window.location.href = ("<?php echo U('CurFlight/userSubmit');?>"+ "&rowId="+$rowId);
    }
    
    $(function (){

       // $("td").css("vertical-align","middle");
        //$("td").css("text-align","center");

        $('#myModal').on('hidden.bs.modal', function (e) {
            $("#mForm").submit();
        });

        $("input[datetimepicker]").datetimepicker({format: 'yyyy-mm-dd',autoclose: true,
            todayBtn: true,
            startView: 'month',
            minView:'month',
            maxView:'decade',
            language:'cn'});

        $("input[name='CKbtn']").bind('click',function () {
            if($(this).is(":checked")){
                $("a[BtnID="+$(this).attr("CKid")+"]").removeAttr("disabled");
            }else{
                $("a[BtnID="+$(this).attr("CKid")+"]").attr("disabled","disabled");
            }
        });

        $("[data-toggle='popover']").popover({html : true });

        $("a[name='FillBtn']").bind('click',function () {
            $("#frm1").attr("src","<?php echo U('FlightInput/index');?>"+ "&rowId="+$(this).attr("rowId"));
        });

        $("a[OptBtn]").click(function () {
            var d = dialog({
                title: '航班状态管理',
                url: "<?php echo U('FlightStatusMng/index');?>"+"&rowId="+$(this).attr("BtnID"),
                width:400,
                onclose: function () {
                    window.location.reload();
                },

            });
            d.showModal();

        });

        $("a[OneKeyOptBtn]").click(function () {
            var Type = $(this).attr("OpType");

            var d = dialog({
                title: Type=="1"?'一键确认':'一键提交',
                content: '您确定所选行数据准确无误并继续？',
                okValue: Type=="1"?"确认数据OK":"确认提交",
                ok: function () {
                    $("#mForm").attr("action","<?php echo U('CurFlight/OneKeyOpt');?>"+"&OpType="+Type);
                    $("#mForm").submit();
                    return true;
                },
                cancelValue: '我再检查检查',
                cancel: function () {}
            });
            d.showModal();

        });

        $("input[IDChK]").click(function () {
            var i = 0 ;
            var isToAdd = $(this).is(":checked");
            var id = $(this).attr("ckid"),Added =false;
            for(i=0;i<CkIDs.length;i++){
                if(CkIDs[i]==id){
                    if(isToAdd==false){
                        CkIDs.splice(i,1);
                    }else{
                        Added = true;
                    }
                }
            }

            if(isToAdd == true && Added==false){
                CkIDs.push(id);
            }




            $("#CKIDInput").val(CkIDs.toString());
           // alert($("#CKIDInput").val());

        });
    });
</script>
</body>
</html>
            </div>


<script>
    $(function(){
            $("#MainFrm").attr("height", $(window).height()-90);
            $("#vdiv").css("height",$(window).height());
            $('#datepicker').datepicker({
                inline: true
            });
    });



</script>

</body>
</html>