<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <!--
       《洛阳机场航班数据管理系统 v1.0》

              中国民用航空飞行学院洛阳分院　
                       机务工程部　
                        李光耀　
                    gyLinuxer@163.com
                    QQ:447649795
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

                    <li class="dropdown"><a href="<?php echo U('Login/index');?>">退出登陆</a></li>
                </ul>
            </div>

        </div>
    </div>




            <div id="content_main" class="col-lg-12 col-sm-12">
                <!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>飞机管理</title>
    <style>

    </style>
</head>
<body class="container-fluid">
<ul id="myTab" class="nav nav-tabs" >
    <li id="FlightAdd" class="active">
        <a href="#home" data-toggle="tab">
            航班添加修改
        </a>
    </li>
    <li id="FlightArrange">
        <a href="#Arrange" data-toggle="tab">
            航班运行周期
        </a>
    </li>
</ul>
<div id="myTabContent" class="tab-content">
    <div class="tab-pane" id="home">
        <div class="container-fluid">
            <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="<?php echo U('Flight/FlightAdd');?>">
                <div class="alert alert-info" role="alert" style="margin-top: 10px;"><div class="col-sm-offset-0"><strong>提示：</strong>添加和修改航空公司到本航站的飞机。</div></div>
                <input type="hidden" name="selInput" id="selInput"/>
                <div style="margin-top: 10px">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <?php if(($Warning) != ""): ?><div class="alert alert-danger" role="alert"><strong>提示：</strong><?php echo ($Warning); ?></div><?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Airline" class="col-sm-2 control-label">航空公司：</label>
                        <div class="col-sm-10">
                            <select id="Airline" placeholder="" name="Airline" class="form-control"　>
                                <?php if(is_array($Airlineslist)): $i = 0; $__LIST__ = $Airlineslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($curType=vo): ?><option selected> <?php echo ($vo["Name"]); ?></option>
                                        <?php else: ?>  <option> <?php echo ($vo["Name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div >
                    </div>
                    <div class="form-group ">
                        <label for="FlightNo" class="col-sm-2 control-label">航班号码:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="FlightNo"  name="FlightNo" placeholder="" value="">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="Origin" class="col-sm-2 control-label">起飞地:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Origin"  name="Origin" placeholder="" value="">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="Destination" class="col-sm-2 control-label">目的地:</label>
                        <div class="col-sm-10">
                                <input type="text" class="form-control" id="Destination"  name="Destination" placeholder="" value="">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="FlightTypeBtn" class="col-sm-2 control-label">类型:</label>
                        <div class="col-sm-10">
                            <input name="FlightType" value="" style="display: none"/>
                            <div class="btn-group">
                                <button id = "FlightTypeBtn" type="button" name="FlightTypeBtn" issel="0" MName="直飞航班" val="0" class="btn btn-default">直飞航班</button>
                                <button type="button" name="FlightTypeBtn" issel="0"  val="1"  MName="过站航班" class="btn btn-default">过站航班</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="FlightCategoryBtn" class="col-sm-2 control-label">类别:</label>
                        <div class="col-sm-10">
                            <input name="FlightCategory" value="" style="display: none"/>
                            <div class="btn-group">
                                <button id = "FlightCategoryBtn" type="button" name="FlightCategoryBtn" issel="0" MName="国内航班" val="0" class="btn btn-default">国内航班</button>
                                <button type="button" name="FlightCategoryBtn" issel="0"  val="1"  MName="国际航班" class="btn btn-default">国际航班</button>
                                <button type="button" name="FlightCategoryBtn" issel="0"  val="2"  MName="地区航班" class="btn btn-default">地区航班</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group " id="GJ_DQ__DIV" style="display: none">
                        <label for="GJDQHDBtn" class="col-sm-2 control-label">航段:</label>
                        <div class="col-sm-10">
                            <input id="GJDQ_INPUT" name = "GJDQ_INPUT" value="0" style="display: none"/>
                            <div class="btn-group">
                                <button id = "GJDQHDBtn" type="button" name="GJDQHDBtn" issel="0" MName="到达" val="2" class="btn btn-default">到达</button>
                                <button type="button" name="GJDQHDBtn" issel="0"  val="1"  MName="出发" class="btn btn-default">出发</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="Add" class="col-sm-2 control-label">操作：</label>
                        <div class="col-sm-10">
                           <button id= "Add" class="btn btn-primary">添加航班</button>
                        </div>
                    </div>
                    <h4 style="text-align: center">航班列表</h4>
                    <hr/>
                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                        <thead>
                        <tr>
                            <th>序号</th>
                            <th>航空公司</th>
                            <th>航班号</th>
                            <th>起点</th>
                            <th>终点</th>
                            <th>航班类型</th>
                            <th>航班类别</th>
                            <th>航段</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($Flightlist)): $i = 0; $__LIST__ = $Flightlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td>
                                    <?php echo ($vo["id"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["Airline"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["FlightNo"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["Origin"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["Destination"]); ?>
                                </td>
                                <td>
                                    <?php if(($vo["Type"]) == "0"): ?>飞来<?php endif; ?>
                                    <?php if(($vo["Type"]) == "1"): ?>始发<?php endif; ?>
                                    <?php if(($vo["Type"]) == "2"): ?>过站<?php endif; ?>
                                    <?php if(($vo["Type"]) == "3"): ?>备降<?php endif; ?>
                                </td>
                                <td>
                                    <?php if(($vo["Category"]) == "0"): ?>国内<?php endif; ?>
                                    <?php if(($vo["Category"]) == "1"): ?>国际<?php endif; ?>
                                    <?php if(($vo["Category"]) == "2"): ?>地区<?php endif; ?>
                                </td>
                                <td>
                                    <?php $str = ""; if($vo["GJ_FROM"]=="1" || $vo["DQ_FROM"]=="1"){ $str = "到达 / "; } if($vo["GJ_TO"]=="1" || $vo["DQ_TO"]=="1"){ $str .= "出发"; } echo $str; ?>
                                </td>
                                <td>
                                    <input type="checkbox" name="CKbtn" CKid = "<?php echo ($vo["id"]); ?>" style="margin-right: 10px;"/><a class="btn btn-danger btn-sm" DelFlight href="#" BtnID = "<?php echo ($vo["id"]); ?>"  disabled>删除</a>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
    <div class="tab-pane" id="Arrange">
        <div class="container-fluid">
            <div style="margin-top: 10px">
                <form method="post" enctype="application/x-www-form-urlencoded" action="<?php echo U('Flight/FlightArrangeAdd');?>">
                <div class="form-group ">
                    <div class="alert alert-info" role="alert"><div class="col-sm-offset-0"><strong>提示：</strong>这里来添加和删除航班的运行周期。</div></div>
                </div>
                    <div class="form-group">

                            <?php if(($WarningRight) != ""): ?><div class="alert alert-danger" role="alert"><strong>提示：</strong><?php echo ($WarningRight); ?></div><?php endif; ?>
                    </div>

                <div class="container form-inline">

                    <div class="form-group">
                        <label for="FlightSel" style="" class="control-label">航班：</label>
                            <select id="FlightSel" style="margin-left: 10px;" placeholder="" name="FlightSel" class="form-control"　>
                                <option></option>
                                <?php if(is_array($Flightlist)): $i = 0; $__LIST__ = $Flightlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(trim($curFlight) == trim($vo['FlightNo'])){ echo '<option selected>'.$vo['FlightNo'].'</option>'; }else{ echo '<option>'.$vo['FlightNo'].'</option>'; } endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        <span id="AirlineSpan" style="margin-left: 40px;color:grey;font-weight: bolder;font-size:small;"><?php echo ($AirlineSpan); ?></span>
                    </div>
                    <div class="form-group">

                        <span id="FromSpan" style="font-weight: bolder;font-size: large;color: blue ;margin-left: 60px;"><?php echo ($FromSpan); ?></span>
                        <?php if(($curFlight) != ""): ?><img src="__PUBLIC__/img/right1.png" style="width: 40px;height: 25px"><?php endif; ?>
                        <span  id="ToSpan" style="font-weight: bolder;font-size: large;color: blue"><?php echo ($ToSpan); ?></span>
                        <span id="FlightTypeSpan"><?php echo ($FlightTypeSpan); ?></span>

                    </div>

                </div>
                <div class="container form-inline" style="margin-top:10px">
                    <div class="form-group">
                        <label for="sMonth" style="" class="control-label">起始：</label>
                        <div class="input-group">
                            <input type="number" id="sMonth"  name = "sMonth" class="form-control" style="margin-left: 10px; width: 100px"/>
                            <div class="input-group-addon">月</div>
                        </div>
                        <div class="input-group">
                            <input type="number" class="form-control" name="sDay" style=" width: 100px"/>
                            <div class="input-group-addon">日</div>
                        </div>
                        ===>
                        <div class="input-group">
                            <input type="number"  name = "eMonth" class="form-control" style="width: 100px"/>
                            <div class="input-group-addon">月</div>
                        </div>
                        <div class="input-group">
                            <input  name = "eDay" type="number" class="form-control" style=" width: 100px"/>
                            <div class="input-group-addon">日</div>
                        </div>
                    </div>
                </div>
                <div class="container form-inline" style="margin-top:10px">
                    <div class="form-group">
                        <label for="WeekDayBtn"  class="control-label">星期：</label>
                        <div class="btn-group" class="col-sm-10">
                            <input  name= "WeekDays" id ="WeekDays" type="hidden" value=""/>
                            <button id="WeekDayBtn" style="margin-left: 10px;" type="button" name="WeekDayBtn" issel="0" MName="一" val="1" class="btn btn-default">一</button>
                            <button type="button" name="WeekDayBtn" issel="0"  val="2"  MName="二" class="btn btn-default">二</button>
                            <button type="button" name="WeekDayBtn" issel="0"  val="3"  MName="三" class="btn btn-default">三</button>
                            <button type="button" name="WeekDayBtn" issel="0"  val="4"  MName="四" class="btn btn-default">四</button>
                            <button type="button" name="WeekDayBtn" issel="0"  val="5"  MName="五" class="btn btn-default">五</button>
                            <button type="button" name="WeekDayBtn" issel="0"  val="6"  MName="六" class="btn btn-default">六</button>
                            <button type="button" name="WeekDayBtn" issel="0"  val="0"  MName="日" class="btn btn-default">日</button>
                        </div>
                    </div>
                </div>
                <div class="container form-inline" style="margin-top:10px">
                    <div class="form-group" >
                        <label for="WeekDayBtn" style="" class="control-label">操作：</label>
                        <div class="btn-group" >
                            <button  style=" margin-left: 10px;" class="btn btn-default btn-primary">添加</button>
                        </div>
                    </div>
                </div>
                </form>
             </div>
            <h4 style="text-align: center">航班运行周期表</h4>
            <hr/>
            <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                <thead>
                <tr>
                    <th>序号</th>
                    <th>航空公司</th>
                    <th>航班号</th>
                    <th>类型</th>
                    <th>类别</th>
                    <th>起点</th>
                    <th>终点</th>
                    <th>开始</th>
                    <th>结束</th>
                    <th>星期</th>
                    <th>航段</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($FlightArrangelist)): $i = 0; $__LIST__ = $FlightArrangelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td>
                            <?php echo ($vo["id"]); ?>
                        </td>
                        <td>
                            <?php echo ($vo["Airline"]); ?>
                        </td>
                        <td>
                            <?php echo ($vo["FlightNo"]); ?>
                        </td>
                        <td>
                            <?php if(($vo["Type"]) == "0"): ?>飞来<?php endif; ?>
                            <?php if(($vo["Type"]) == "1"): ?>始发<?php endif; ?>
                            <?php if(($vo["Type"]) == "2"): ?>过站<?php endif; ?>
                            <?php if(($vo["Type"]) == "3"): ?>备降<?php endif; ?>
                        </td>
                        <td>
                            <?php if(($vo["Category"]) == "0"): ?>国内<?php endif; ?>
                            <?php if(($vo["Category"]) == "1"): ?>国际<?php endif; ?>
                            <?php if(($vo["Category"]) == "2"): ?>地区<?php endif; ?>
                        </td>
                        <td>
                            <?php echo ($vo["Origin"]); ?>
                        </td>
                        <td>
                            <?php echo ($vo["Destination"]); ?>
                        </td>
                        <td>
                           <?php echo date("n月j日",strtotime($vo["BeginDate"])); ?>
                        </td>
                        <td>
                            <?php if(date("Y",strtotime($vo["EndDate"]))=="1990"){ echo '<span style="font-weight: bolder;">来年&nbsp;</span>'; } echo date("n月j日",strtotime($vo["EndDate"])); ?>
                        </td>
                        <td>
                            <?php $WeekDayName = array("日","一","二","三","四","五","六"); $arr = json_decode($vo["WeekDays"]); $str = ""; foreach($arr as $v){ $str .= empty($str)?$WeekDayName[$v]:"/".$WeekDayName[$v]; } echo $str; ?>
                        </td>
                        <td>
                            <?php $str = ""; if($vo["GJ_FROM"]=="1" || $vo["DQ_FROM"]=="1"){ $str = "到达 / "; } if($vo["GJ_TO"]=="1" || $vo["DQ_TO"]=="1"){ $str .= "出发"; } echo $str; ?>
                        </td>

                        <td>
                            <input type="checkbox" name="CKbtn" CKid = "<?php echo ($vo["id"]); ?>" style="margin-right: 10px;"/><a class="btn btn-danger btn-sm" href="#" DelFlightArrange BtnID = "<?php echo ($vo["id"]); ?>"  disabled>删除</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
             </table>
        </div>
     </div>
</div>

 </body>
 <script>
     var js_WeekDays = [];
     var ActiveLi="<?php echo (($myActiveLi)?($myActiveLi):FlightAdd); ?>";
     $(function () {
         $("input[name='CKbtn']").bind('click',function () {
             if($(this).is(":checked")){
                 $("a[BtnID="+$(this).attr("CKid")+"]").removeAttr("disabled");
             }else{
                 $("a[BtnID="+$(this).attr("CKid")+"]").attr("disabled","disabled");
             }

         });

                          $("button[name='FlightTypeBtn']").click(function () {
                                     var btns = $("button[name='FlightTypeBtn']");

                                      btns.removeClass("btn-success");
                                      $(this).attr("issel","0");
                                      $("input[name='FlightType']").val($(this).attr("val"));
                                     for(i=0;i<btns.length;i++){
                                              $(btns[i]).text($(btns[i]).attr("MName"));
                                          }
                                      $(this).text("√ " +   $(this).attr("MName"));
                                      $(this).addClass("btn-success");
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



         $("button[name='WeekDayBtn']").click(function () {
                 v = $(this).attr("val");
                 if($(this).hasClass("btn-success")){
                     arr_rm(js_WeekDays,Number(v));
                 }else{
                     arr_add(js_WeekDays,Number(v));
                 }
                 $(this).toggleClass("btn-success");
             $("#WeekDays").val(JSON.stringify(js_WeekDays));
         });

         $("#FlightSel").change(
                 function () {
                   window.location.href= "<?php echo U('Flight/ChangeFlight');?>" + "&FlightNo=" + $(this).val();
                    // alert($(this).val());
                 }
         );

         $("a[DelFlight]").click(
                 function () {
                     window.location.href= "<?php echo U('Flight/DelFlight');?>" + "&id=" + $(this).attr("BtnID");
                 }
         );

         $("a[DelFlightArrange]").click(
                 function () {
                     window.location.href= "<?php echo U('Flight/DelFlightArrange');?>" + "&id=" + $(this).attr("BtnID");
                 }
         );

         $("li").removeClass("active");
         $("#"+ActiveLi).addClass("active");
         tgtTab = $("#"+ActiveLi+">a").attr("href");
         $(tgtTab).addClass("fade  in active");

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