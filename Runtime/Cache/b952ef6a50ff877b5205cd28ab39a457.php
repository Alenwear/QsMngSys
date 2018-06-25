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
    <title>手工添加航班</title>
    <style>
      #Adult #Children #Baby #GoStation  {
            float: left;
            clear: left;
            width: 200px;
            margin: 15px;
        }
      html { overflow-x:hidden; }
        .myInput{
            width: 55px;
            text-align: center;
            margin-left: 12px;
        }

    </style>

</head>
<body class="container-fluid　ui-widget-content">
<form id="mForm" class="form-horizontal" role="form" enctype="application/x-www-form-urlencoded" method="post" action="<?php echo U('FlightAddAndInput/index');?>">
    <div class="alert alert-info" role="alert" style="margin-top: 10px;">
        <div class=""><strong>提示：</strong>航班添加与数据输入，请将所有数据填写完整后再保存。</div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-0 col-sm-12">
            <?php if(($Warning) != ""): ?><div class="alert alert-warning" role="alert"><strong>提示：</strong><?php echo ($Warning); ?></div><?php endif; ?>
        </div>
    </div>
    <div class="col-sm-10 col-sm-offset-1">
    <div style="margin-top: 10px">
        <div class="form-group">
            <label for="FlightTypeBtn"  class="col-sm-2 control-label">航班类型:</label>
            <div class="col-sm-4">
                <div class="btn-group" class="">
                    <input  name= "FlightType" id ="FlightTypeInput" type="hidden" value="<?php echo ($FlightType); ?>"/>
                    <button id="FlightTypeBtn" type="button" name="FlightTypeBtn" issel="0" MName="飞来" val="0" class="btn btn-default ">飞来</button>
                    <button type="button" name="FlightTypeBtn" issel="0"  val="1"  MName="始发" class="btn btn-default ">始发</button>
                    <button type="button" name="FlightTypeBtn" issel="0"  val="2"  MName="过站" class="btn btn-default ">过站</button>
                    <button type="button" name="FlightTypeBtn" issel="0"  val="3"  MName="备降" class="btn btn-default ">备降</button>
                    <button type="button" name="FlightTypeBtn" issel="0"  val="4"  MName="公务" class="btn btn-default ">公务</button>
                    <button type="button" name="FlightTypeBtn" issel="0"  val="5"  MName="包机" class="btn btn-default ">包机</button>
                </div>
            </div>
            <div class="col-sm-1" style="width: 100px;">
                <label for="FlightDate" class="control-label">运行日期:</label>
            </div>
            <div class="col-sm-4">
                <input id = "FlightDate" class="form-control"  name= "FlightDate" type="date" placeholder="格式:1989-11-15" value="<?php echo ($FlightDate); ?>">
            </div>
        </div>
        <div class="form-group ">
            <label for="FlightCategoryBtn"  class="col-sm-2 control-label">航班类别:</label>
            <div class="col-sm-4">
                <div class="btn-group" class="">
                    <input  name= "FlightCategory" id ="FlightCategoryInput" type="hidden" value="<?php echo ($FlightCategory); ?>"/>
                    <button id="FlightCategoryBtn" type="button" name="FlightCategoryBtn" issel="0" MName="国内" val="0" class="btn btn-default ">国内</button>
                    <button type="button" name="FlightCategoryBtn" issel="0"  val="1"  MName="国际" class="btn btn-default ">国际</button>
                    <button type="button" name="FlightCategoryBtn" issel="0"  val="2"  MName="地区" class="btn btn-default ">地区</button>
                </div>
            </div>
            <div id="GJ_DQ__DIV" style="display: none">
                <div class="col-sm-1" style="width: 100px;" >
                    <label for="GJDQHDBtn" class="control-label">航段:</label>
                </div>
                <div class="col-sm-4">
                    <input id="GJDQ_INPUT" name = "GJDQ_INPUT" value="0" style="display: none"/>
                    <div class="btn-group">
                        <button id = "GJDQHDBtn" type="button" name="GJDQHDBtn" issel="0" MName="到达" val="2" class="btn btn-default">到达</button>
                        <button type="button" name="GJDQHDBtn" issel="0"  val="1"  MName="出发" class="btn btn-default">出发</button>
                    </div>
                </div>
            </div>

        </div>

        <div class="form-group">
            <label for="Airline" class="col-sm-2 control-label">航空公司:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="Airline"  name="Airline" placeholder="请使用自动补全功能" value="<?php echo ($Airline); ?>">
            </div>
            <div class="col-sm-1" style="width: 100px;">
                <label for="FlightNo" class="control-label">航班号:</label>
            </div>
            <div class="col-sm-4">
                <input type="text" id = "FlightNo" type="number"  class="form-control"  name="FlightNo" placeholder="请输入航班号" value="<?php echo ($FlightNo); ?>">
            </div>


        </div>

        <div class="form-group">
            <label for="Origin" class="col-sm-2 control-label">始发到达:</label>
            <div class="col-sm-2">
                <input class="form-control" type="text" id="Origin" name="Origin"  placeholder="始发地"  value="<?php echo ($Origin); ?>"/>
            </div>
            <div class="col-sm-2">
                <input class="form-control" type="text" id="Destination" name="Destination" placeholder="目的地" value="<?php echo ($Destination); ?>"/>
            </div>
            <div class="col-sm-1" style="width: 100px;">
                <label for="AirplaneModel" class="control-label">机型:</label>
            </div>
            <div class="col-sm-4">
                <input type="text" id = "AirplaneModel" type="text"  class="form-control"  name="AirplaneModel" placeholder="请输入机型" value="<?php echo ($AirplaneModel); ?>"/>
            </div>

        </div>

        <div class="form-group">
            <label for="AirplaneNo" class="col-sm-2 control-label">机号:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="AirplaneNo"  name="AirplaneNo" placeholder="B-XXXX" value="<?php echo ($AirplaneNo); ?>" >
            </div>
            <div class="col-sm-1" style="width: 100px;">
                <label for="SeatsCount" class=" control-label">可用座位:</label>
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="SeatsCount"  name="SeatsCount" placeholder="该飞机座位数量" value="<?php echo ($SeatsCount); ?>" >
            </div>
        </div>
    </div>
    </div>
        <div class="col-sm-9 col-sm-offset-1">
        <table class="table  bootstrap-datatable datatable responsive">
            <thead>
            <tr>
                <th >方向</th>
                <th >成人</th>
                <th>儿童</th>
                <th >婴儿</th>
                <th >过站成人</th>
                <th >过站儿童</th>
                <th >过站婴儿</th>
                <th >合计</th>
                <th >货物</th>
                <th >邮件</th>
                <th >行李</th>
            </tr>
            </thead>
            <tbody>
                <tr id="ArrTr">
                    <td style="color: blue;font-weight: bold;">到达</td>
                    <td ><input name="ArrAdult"  class="form-control input-sm myInput" value="<?php echo ($ArrAdult); ?>"/></td>
                    <td ><input name="ArrChildren" class="form-control input-sm myInput"  value="<?php echo ($ArrChildren); ?>"/></td>
                    <td >
                        <input name="ArrBaby"  class="form-control input-sm myInput"  value="<?php echo ($ArrBaby); ?>"/>
                    </td>
                    <td><input  class="form-control input-sm myInput"   value="-----" disabled/></td>
                    <td><input  class="form-control input-sm myInput"   value="-----" disabled/></td>
                    <td><input  class="form-control input-sm myInput"   value="-----" disabled/></td>

                    <td style="font-weight: bolder;"> <?php echo ($ArrPeopleCnt); ?></td>
                    <td ><input name= "ArrCargo" class="form-control input-sm myInput" value="<?php echo ($ArrCargo); ?>"/></td>
                    <td><input name= "ArrMail" class="form-control input-sm myInput" value="<?php echo ($ArrMail); ?>"/></td>
                    <td><input name= "ArrLuggage"  class="form-control input-sm myInput" value="<?php echo ($ArrLuggage); ?>" /></td>
                </tr>
                <tr class="spec" id="GoTr">
                    <td style="color: red;font-weight: bold;">出发</td>
                    <td ><input name="Adult" class="form-control input-sm myInput" value="<?php echo ($Adult); ?>"/></td>
                    <td ><input name="Children" class="form-control input-sm myInput"  value="<?php echo ($Children); ?>"/></td>
                    <td ><input name="Baby" class="form-control input-sm myInput"  value="<?php echo ($Baby); ?>"/></td>
                    <td><input GoStation name="GoStationAdult" class="form-control input-sm myInput"   value="<?php echo ($GoStationAdult); ?>" <?php if(($FakeFlightType) != "GoStation"): ?>disabled<?php endif; ?>/></td>
                    <td><input GoStation name="GoStationChildren" class="form-control input-sm myInput"   value="<?php echo ($GoStationChildren); ?>" <?php if(($FakeFlightType) != "GoStation"): ?>disabled<?php endif; ?>/></td>
                    <td><input GoStation name="GoStationBaby" class="form-control input-sm myInput"   value="<?php echo ($GoStationBaby); ?>" <?php if(($FakeFlightType) != "GoStation"): ?>disabled<?php endif; ?>/></td>
                    <td style="font-weight: bolder;" ><?php echo ($PeopleCnt); ?></td>
                    <td ><input name="Cargo"  class="form-control input-sm myInput" value="<?php echo ($Cargo); ?>"/></td>
                    <td><input name="Mail" class="form-control input-sm myInput" value="<?php echo ($Mail); ?>"/></td>
                    <td><input name="Luggage" class="form-control input-sm myInput" value="<?php echo ($Luggage); ?>"/></td>
                </tr>
            </tbody>
        </table>
        </div>
        <div class="form-group ">
            <div class="col-sm-10 col-sm-offset-2">
                <button id="SaveBtn" class="btn btn-primary"  style="margin-left:25%;">保存</button>
                <button id="ClearBtn" class="btn btn-danger" style="margin-left: 20%;">重填</button>
            </div>
        </div>

    </form>

</body>
<script>
    var MyStationName = "<?php echo ($MyStationName); ?>";//本航站名称
    var FlightType = "";
    $(function () {

        var availableTags = <?php echo (($Airlines )?($Airlines ):[]); ?>;
        $("#Airline").autocomplete({
            source: availableTags
        });

        $("button[name='FlightTypeBtn']").click(function () {
            var btns = $("button[name='FlightTypeBtn']");
            btns.removeClass("btn-success");
            btns.each(function () {
                $(this).text($(this).attr("MName"));
                $(this).attr("issel","0");
            });
            $("input[name='FlightType']").val($(this).attr("val"));
            FlightType = $(this).attr("MName");
            $(this).text("√ " +   $(this).attr("MName"));
            $(this).addClass("btn-success");
            if(FlightType=="始发"){
                $("#ArrTr").hide();
                $("#GoTr").show();
                $("input[GoStation]").attr("disabled","");
            }else if(FlightType=="飞来"){
                $("#GoTr").hide();
                $("#ArrTr").show();
                $("input[GoStation]").attr("disabled","");
            }else{
                $("#GoTr").show();
                $("#ArrTr").show();
                $("input[GoStation]").removeAttr("disabled");
            }
        });

        $("button[name='FlightCategoryBtn']").click(function () {
            var btns = $("button[name='FlightCategoryBtn']");

            btns.removeClass("btn-success");
            $(this).attr("issel","0");
            $("input[name='FlightCategory']").val($(this).attr("val"));
            for(i=0;i<btns.length;i++){
                $(btns[i]).text($(btns[i]).attr("MName"));
            }
            $(this).text("√ " +   $(this).attr("MName"));
            $(this).addClass("btn-success");
            $("#GJDQ_INPUT").val("0");
            if($(this).attr("val")!="0")//非国内航班
            {
                $("#GJ_DQ__DIV").show();
            }else {
                $("#GJ_DQ__DIV").hide();
            }
        });


        $("button[name='GJDQHDBtn']").click(function () {
            var Btnval =  Number($(this).attr("val"));
            var Curval =  Number($("#GJDQ_INPUT").val()),val;
            if($(this).hasClass("btn-success")){
                val = Curval-Btnval >0?Curval-Btnval:0;
            }else{
                val = Curval+Btnval <=3?Curval+Btnval:0;
            }
            $("#GJDQ_INPUT").val(val+"");
            $(this).toggleClass("btn-success");
        });

        var fType = $("input[name='FlightType']").val();
        if(fType!=""){
            $("button[val='"+fType+"'][name='FlightTypeBtn']").trigger("click");
        }

        var fCty = $("input[name='FlightCategory']").val();
        if(fType!=""){
            $("button[val='"+fCty+"'][name='FlightCategoryBtn']").trigger("click");
        }

        $("#ClearBtn").click(function () {
            $("#mForm").attr("Action","<?php echo U('FlightAddAndInput/index');?>"+"&Export=true");
            $("#mForm").submit();
        });
        $("#SaveBtn").click(function () {
            $("#mForm").attr("Action","<?php echo U('FlightAddAndInput/save');?>");
            $("#mForm").submit();
        });

    });




</script>
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