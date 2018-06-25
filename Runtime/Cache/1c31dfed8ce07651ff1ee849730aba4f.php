<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
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
    <meta charset="utf-8">
    <title>洛阳机场航班数据管理系统v1.0</title>


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
    <link href="__PUBLIC__/css/font-awesome.css" rel="stylesheet">
    <link href="__PUBLIC__/css/s2-docs.css" rel="stylesheet">





    <!-- jQuery -->
    <script src="__PUBLIC__/bower_components/jquery/jquery.min.js"></script>


    <script src="__PUBLIC__/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/bower_components/jquery/jquery.min.js"></script>


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
    <script src="__PUBLIC__/js/jquery-2.1.0.js"></script>



    <link rel="shortcut icon" href="__PUBLIC__/img/favicon.ico">
    <script type="text/javascript" src="__PUBLIC__/ckeditor/ckeditor.js"></script>
    <script src="__PUBLIC__/js/gyComm.js"></script>
    <script src="__PUBLIC__/js/jquery-ui.min.js"></script>
    <script src="__PUBLIC__/js/gyComm.js"></script>
    <script src="__PUBLIC__/js//bootstrap-slider.min.js"></script>

    <script src="__PUBLIC__/js/dialog-plus-min.js"></script>


    <script type="text/javascript" src="__PUBLIC__/js/highcharts.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/exp1.js"></script>

    <script src="__PUBLIC__/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <link href="__PUBLIC__/css/select2.min.css" rel="stylesheet" />
    <script src="__PUBLIC__/js/select2.min.js"></script>
    <link href="__PUBLIC__/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script src="__PUBLIC__/js/bootstrap-datetimepicker.js"></script>
    <!-- library for cookie management -->



<body>
<!-- topbar starts -->
<div class="navbar navbar-default" role="navigation" style="height:75px;">

    <div class="container-fluid" >
        <div class="navbar-header col-sm-4">
            <a class="navbar-brand" href="#">
                <img style="width: 350px;height:50px;" src="__PUBLIC__/img/logo.png" />
            </a>
        </div>
        <div class="col-sm-offset-7 col-sm-1">
            <ul class="nav navbar-nav" style="margin-top:15px">
                <?php if(session("UserID")!=null){ echo '<li class="dropdown"><a href="/FlightMng.php?m=CurFlight">返回</a></li>'; }else{ echo '<li class="dropdown"><a href="/FlightMng.php?m=Login&a=index">登陆</a></li>'; } ?>

            </ul>

        </div>
    </div>
</div>

<div id="content_main" class="col-lg-12 col-sm-12">
        <ul id="myTab" class="nav nav-tabs" >
            <li id="FlightAdd" class="<?php if(($Tab1_Active) != ""): ?>active<?php endif; ?>">
                <a href="#home" data-toggle="tab">
                    航班动态
                </a>
            </li>
            <li id="FlightArrange" class="<?php if(($Tab2_Active) != ""): ?>active<?php endif; ?>">
                <a href="#Arrange" data-toggle="tab">
                    数据查询
                </a>
            </li>
            <li id="DataCompare" class="<?php if(($Tab3_Active) != ""): ?>active<?php endif; ?>">
                <a href="#Compare" data-toggle="tab">
                    数据对比
                </a>
            </li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane  <?php if(($Tab1_Active) != ""): ?>fade in active<?php endif; ?>" id="home">
                <div class="container-fluid">
                        <div class="row">
                            <div id="container" style="height: 600px;" class="col-sm-9"></div>
                            <div class="col-sm-3" style="margin-top: 10px;">
                                <div class="alert alert-info" role="alert" style="margin-top: 10px;"><div class="col-sm-offset-0"><strong>提示：</strong>对图标的显示数据和格式的控制。</div></div>
                                <div class="form-group">
                                        <label for="YAxis"  class="col-sm-3 control-label">Y轴:</label>
                                        <div class="col-sm-9">
                                            <div class ="btn-group">
                                                <button type="button" class="btn btn-default  btn-sm "  YAxisKey="ArrPeopleCnt" >到站总人</button>
                                                <button type="button"  class="btn btn-default btn-sm " YAxisKey="ArrAdult">到站成人</button>
                                                <button type="button"  class="btn btn-default btn-sm " YAxisKey="ArrChildren">到站儿童</button>
                                                <button type="button"  class="btn btn-default btn-sm " YAxisKey="ArrBaby">到站婴儿</button>
                                                <button type="button"  class="btn btn-default btn-sm " YAxisKey="ArrCargo">到站货物</button>
                                                <button type="button"  class="btn btn-default btn-sm " YAxisKey="ArrMail">到站邮件</button>
                                                <button type="button"  class="btn btn-default btn-sm"  YAxisKey="ArrLuggage">到站行李</button>
                                                <button type="button"  class="btn btn-default btn-sm"  YAxisKey="ArrRate">到站座率</button>
                                                <button type="button"  class="btn btn-default btn-sm " YAxisKey="PeopleCnt">出发总人</button>
                                                <button type="button"  class="btn btn-default btn-sm " YAxisKey="Adult">出发成人</button>
                                                <button type="button"  class="btn btn-default btn-sm " YAxisKey="Children">出发儿童</button>
                                                <button type="button"  class="btn btn-default btn-sm " YAxisKey="Baby">出发婴儿</button>
                                                <button type="button"  class="btn btn-default btn-sm " YAxisKey="Cargo">出发货物</button>
                                                <button type="button"  class="btn btn-default btn-sm " YAxisKey="Mail">出发邮件</button>
                                                <button type="button"  class="btn btn-default btn-sm"  YAxisKey="Luggage">出发行李</button>
                                                <button type="button"  class="btn btn-default btn-sm"  YAxisKey="ToRate">出发座率</button>
                                                <button type="button" class="btn btn-default  btn-sm "  YAxisKey="GoStationPeopleCnt">过站人数</button>
                                                <button id="YAxis" type="button" class="btn btn-default btn-sm" YAxisKey="AvgRate" >平均座率</button>
                                            </div>
                                        </div>
                                        <div class="row">

                                        </div>
                                </div>

                                <div class="form-group ">
                                    <label for="showType" class="col-sm-3 control-label">图示:</label>
                                    <div class="col-sm-9">
                                        <div class ="btn-group">
                                            <button id="showType" type="button" showType="Flight" class="btn btn-default btn-sm">航班</button>
                                            <button type="button" class="btn btn-default btn-sm" showType="Airline">公司</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="sDate" class="col-sm-3 control-label">起始:</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control input-sm"  id="sDate" value="<?php echo ($StartDate); ?>" />
                                    </div>

                                    <div class="row">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="DayLenInput" class="col-sm-3 control-label">天数:</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control input-sm" id="DayLenInput" value="31" />
                                    </div>
                                    <div class="row"></div>
                                </div>
                                <div class="form-group ">
                                    <label for="Start" class="col-sm-3 control-label">操作:</label>
                                    <div class="col-sm-8">
                                        <button id = "Start" class="btn btn-sm btn-warning" onclick="DrawTB();">绘图</button>
                                    </div>
                                    <div class="row"></div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="tab-pane <?php if(($Tab2_Active) != ""): ?>fade in active<?php endif; ?>" id="Arrange">
                <div class="container-fluid">
                    <form id="mForm" class="form-horizontal" role="form" enctype="application/x-www-form-urlencoded" method="post" action="<?php echo U('Welcome/Qry');?>">
                        <div class="form-group">
                            <div class="col-sm-offset-0 col-sm-12">
                                <?php if(($Warning) != ""): ?><div class="alert alert-warning" role="alert"><strong>提示：</strong><?php echo ($Warning); ?></div><?php endif; ?>
                            </div>
                        </div>
                        <div class="col-sm-11 col-sm-offset-1">
                            <div style="margin-top: 10px">
                                <div class="form-group">
                                    <label for="FlightTypeBtn"  class="col-sm-2 control-label">航班类型:</label>
                                    <div class="col-sm-4">
                                        <div class="btn-group" class="">
                                            <input  name= "FlightTypeInput" id ="FlightTypeInput" type="hidden" value="<?php echo ($FlightType); ?>"/>
                                            <button id="FlightTypeBtn" type="button" name="FlightTypeBtn" issel="0" MName="飞来" val="0" class="btn btn-md  btn-default ">飞来</button>
                                            <button type="button" name="FlightTypeBtn" issel="0"  val="1"  MName="始发" class="btn btn-md  btn-default ">始发</button>
                                            <button type="button" name="FlightTypeBtn" issel="0"  val="2"  MName="过站" class="btn   btn-default ">过站</button>
                                            <button type="button" name="FlightTypeBtn" issel="0"  val="3"  MName="备降" class="btn  btn-default ">备降</button>
                                            <button type="button" name="FlightTypeBtn" issel="0"  val="4"  MName="公务机" class="btn  btn-default ">公务机</button>
                                            <button type="button" name="FlightTypeBtn" issel="0"  val="5"  MName="包机" class="btn  btn-default ">包机</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-1" style="width: 100px;">
                                        <label for="StartFlightDate" class="control-label">起止日期:</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input id = "StartFlightDate" class="form-control"  name= "StartFlightDate" type="text" datetimepicker placeholder="" value="<?php echo ($StartFlightDate); ?>">
                                    </div>.
                                    <div class="col-sm-2">
                                        <input id = "EndFlightDate" class="form-control"  name= "EndFlightDate" type="text" datetimepicker placeholder="" value="<?php echo ($EndFlightDate); ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="Airline" class="col-sm-2 control-label">航空公司:</label>
                                    <div class="col-sm-4" >
                                        <select id="Airline"  name ="Airline" class="form-control select2" style="width: 100%;" >
                                            <option><?php echo ($Airline); ?></option>
                                            <?php if(is_array($Airline_Out)): $i = 0; $__LIST__ = $Airline_Out;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option> <?php echo ($vo["Content"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            <option></option>
                                            <option></option>
                                        </select>
                                    </div>
                                    <div class="col-sm-1" style="width: 100px;">
                                        <label for="FlightNo" class="control-label">航班号:</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <select id="FlightNo" name ="FlightNo" class="form-control select2" style="width: 100%;" >
                                            <option> <?php echo ($FlightNo); ?></option>
                                            <?php if(is_array($FlightNo_Out)): $i = 0; $__LIST__ = $FlightNo_Out;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option> <?php echo ($vo["Content"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            <option></option>
                                        </select>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="Origin" class="col-sm-2 control-label">始发到达:</label>
                                    <div class="col-sm-2">
                                        <select id="Origin" name ="Origin"  class="form-control select2" style="width: 100%;" >
                                            <option> <?php echo ($Origin); ?></option>
                                            <?php if(is_array($Origin_Out)): $i = 0; $__LIST__ = $Origin_Out;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option> <?php echo ($vo["Content"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            <option></option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select id="Destination"  name ="Destination" class="form-control select2" style="width: 100%;" >
                                            <option> <?php echo ($Destination); ?></option>
                                            <?php if(is_array($Destination_Out)): $i = 0; $__LIST__ = $Destination_Out;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option> <?php echo ($vo["Content"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            <option></option>
                                        </select>
                                    </div>
                                    <div class="col-sm-1" style="width: 100px;">
                                        <label for="AirplaneModel" class="control-label">机型:</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <select id="AirplaneModel" name ="AirplaneModel" class="form-control select2" style="width: 100%;" >
                                            <option><?php echo ($AirplaneModel); ?></option>
                                            <?php if(is_array($AirplaneModel_Out)): $i = 0; $__LIST__ = $AirplaneModel_Out;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option> <?php echo ($vo["Content"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="AirplaneNo" class="col-sm-2 control-label">机号:</label>
                                    <div class="col-sm-4">
                                        <select id="AirplaneNo" name ="AirplaneNo" class="form-control select2" style="width: 100%;" >
                                            <option><?php echo ($AirplaneNo); ?> </option>
                                            <?php if(is_array($AirplaneNo_Out)): $i = 0; $__LIST__ = $AirplaneNo_Out;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option> <?php echo ($vo["Content"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            <option></option>
                                        </select>
                                    </div>
                                    <div class="col-sm-1" style="width: 100px;">
                                        <label for="SaveBtn" class="control-label">查询:</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <button id="SaveBtn" class="btn  btn-primary"  style="margin-left: 40px;">数据查询</button> <a id="Export" class="btn   btn-success"  style="margin-left: 80px;">数据导出</a>  </div>
                                    </div>
                                <div class="form-group ">
                                    <div class="col-sm-10 col-sm-offset-2">

                                    </div>
                                </div>
                            </div>
                            <hr/>
                        </div>
                        <div class="col-sm-12">
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
                                    <th>客座率</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($FlightData)): $i = 0; $__LIST__ = $FlightData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr <?php if($i %2==0) { echo "style=\"background-color:#f9f9f9;\""; } ?>
                                    >
                                    <td rowspan="2"　colspan="4" >
                                        <?php echo ($vo["id"]); ?>
                                    </td>
                                    <td rowspan="2" >
                                        <?php require APP_PATH."/MyConf/FlightTypes.php"; $FlightTypeStr = $FlightType_Arr[intval(($vo["FlightType"]))]; $content = '<table class = "MyTable"  border="0" cellpadding="0" cellspacing="0"><tr><td style="color:red;font-weight:bold;">属性</td><td  style="color:red;font-weight:bold;">取值</td></tr><tr><td style="color:blue;">生成类型</td><td>'.$vo["Type"].'</td></tr><tr><td style="color:blue;">航空公司</td><td>'.$vo["Airline"].'</td></tr><tr><td style="color:blue;">航班类型</td><td>'.$FlightTypeStr.'</td></tr><tr><td style="color:blue;">起点</td><td>'.$vo["Origin"].'</td></tr><tr><td style="color:blue;">终点</td></td><td>'.$vo["Destination"].'</td></tr>'; ?>

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
                                        <?php $content = '<table class = "MyTable"  border="0" cellpadding="0" cellspacing="0"><tr><td style="color:red;font-weight:bold;">属性</td><td  style="color:red;font-weight:bold;">取值</td></tr><tr><td style="color:blue;">机型</td><td>'.$vo["AirplaneModel"].'</td></tr><tr><td style="color:blue;">座位数</td><td>'.$vo["SeatsAtThisTime"].'</td></tr><tr><td style="color:blue;">航空公司</td><td>'.$vo["Airline"].'</td></tr>'; ?>

                                        <a  class="popover-show"
                                            data-container="body"
                                            data-toggle="popover"
                                            data-trigger="hover"
                                            data-content='<?php echo $content; ?>'>
                                            <?php echo ($vo["AirplaneNo"]); ?>
                                        </a>
                                    </td>
                                    <td style="color: blue;font-weight: bold;">
                                        <?php if(($vo['FlightType'] == '0') OR ($vo['FlightType'] == '2') OR ($vo['FlightType'] == '3')): ?>到达
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
                                        <?php if(($vo["GoStationPeopleCnt"]) == "0"): ?>--<?php endif; ?>
                                        <?php if(($vo["GoStationPeopleCnt"]) != "0"): echo ($vo["GoStationPeopleCnt"]); endif; ?>
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




                                    <td rowspan="2">
                                        <?php echo "<span style=\"color:".$color.";font-weight: bold\">".round($vo["AvgRate"]*100,1)."%</span>"; ?>
                                    </td>

                                    </tr>
                                    <tr <?php if($i %2==0){ echo "style=\"background-color:#f9f9f9;\""; } ?>>

                                    <td style="color: red;font-weight: bold;">
                                                出发
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
                                        <?php if(($vo["GoStationPeopleCnt"]) == "0"): ?>--<?php endif; ?>
                                        <?php if(($vo["GoStationPeopleCnt"]) != "0"): echo ($vo["GoStationPeopleCnt"]); endif; ?>
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
                                <?php if(is_array($FlightData_Total)): $i = 0; $__LIST__ = $FlightData_Total;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr  <?php if($i %2==0) { echo "style=\"background-color:#f9f9f9;\""; } ?>
                                    >
                                    <td rowspan="2"  colspan="4"  style="font-weight: bolder;text-align: center;">
                                       数据统计
                                    </td>
                                    <td style="color: blue;font-weight: bold;">
                                          到达
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
                                        <?php if(($vo["GoStationPeopleCnt"]) == "0"): ?>--<?php endif; ?>
                                        <?php if(($vo["GoStationPeopleCnt"]) != "0"): echo ($vo["GoStationPeopleCnt"]); endif; ?>
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




                                    <td rowspan="2">
                                        <?php echo "<span style=\"color:".$color.";font-weight: bold\">".round($vo["AvgRate"]*100,1)."%</span>"; ?>
                                    </td>

                                    </tr>
                                    <tr <?php if($i %2==0){ echo "style=\"background-color:#f9f9f9;\""; } ?>>

                                    <td style="color: red;font-weight: bold;">
                                        出发
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
                                        <?php if(($vo["GoStationPeopleCnt"]) == "0"): ?>--<?php endif; ?>
                                        <?php if(($vo["GoStationPeopleCnt"]) != "0"): echo ($vo["GoStationPeopleCnt"]); endif; ?>
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
                </div>
                </div>
                    <div class="tab-pane <?php if(($Tab3_Active) != ""): ?>fade in active<?php endif; ?>" id="Compare">
                            <div class="container-fluid">
                                <div class="row">
                                    <div id="container3" style="height: 600px;" class="col-sm-9"></div>
                                    <div class="col-sm-3" style="margin-top: 10px;">
                                        <div class="alert alert-info" role="alert" style="margin-top: 10px;"><div class="col-sm-offset-0"><strong>提示：</strong>对图标的显示数据和格式的控制。</div></div>
                                       <div class="form-group ">
                                            <label for="showType_CP" class="col-sm-3 control-label">类型:</label>
                                            <div class="col-sm-9">
                                                <div class ="btn-group">
                                                    <button id="showType_CP" type="button" showType_CP="Flight" class="btn btn-default btn-sm">航班</button>
                                                    <button type="button" class="btn btn-default btn-sm" showType_CP="Airline">公司</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="select_CP" class="col-sm-3 control-label">选择:</label>
                                            <div class="col-sm-9">
                                                <div class="form-inline">
                                                    <select type="date" style="width:72%" class="form-control input-sm"  id="select_CP" value="<?php echo ($StartDate); ?>" >
                                                    </select>
                                                    <button id="Select_CP_Add" class="btn btn-danger btn-sm">+</button>
                                                    <span><a id="showSelect_A" href="#">(<span id="SelectCount" style="color:blue;font-weight:bold;  ">0</span>)</a></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                            </div>
                                        </div>


                                        <div class="form-group ">
                                            <label for="sDate_CP" class="col-sm-3 control-label">起始:</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control input-sm"  id="sDate_CP" value="<?php echo ($StartDate); ?>" />
                                            </div>
                                            <div class="row">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="eDate_CP" class="col-sm-3 control-label">结束:</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control input-sm"  id="eDate_CP" value="<?php echo ($StartDate); ?>" />
                                            </div>

                                            <div class="row">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="Start" class="col-sm-3 control-label">操作:</label>
                                            <div class="col-sm-9">
                                                <button id = "AddCon" class="btn btn-sm btn-danger" onclick="">增加条件</button>
                                                <button id = "ClearCon" class="btn btn-sm btn-default" onclick="">清空条件</button>
                                                <span><a id="showCond_A" href="#">(<span id="CondCount" style="color:red;font-weight:bold;  ">0</span>)</a></span>
                                            </div>
                                            <div class="row"></div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="Start" class="col-sm-3 control-label">操作:</label>
                                            <div class="col-sm-9">
                                                <button id = "StartCmp" class="btn btn-sm btn-success" onclick="">开始对比</button>
                                            </div>
                                            <div class="row"></div>
                                        </div>
                                        <div class="row"></div>
                                        <div class="form-group ">
                                            <h5 style="text-align: center">客座率平均值对比</h5>
                                            <hr/>
                                            <table id="RateTable" class="table table-striped table-bordered bootstrap-datatable">
                                                <thead>
                                                <tr>
                                                    <th>条件名</th>
                                                    <th>平均客座率</th>
                                                    <th>到达客座率</th>
                                                    <th>出发客座率</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
        </div>

<script>
    var chart,chart1;
    var yAxisKey = "AvgRate";
    var StartDate = "";
    var showType = "Flight";
    var yAxisName = "平均客座率";
    var FTypes =["飞来","始发","过站","备降"];
    var DayLen = 0;
    var Cond_Arr  = [];


    function DrawCompareTB () {

        var o = {};
        o.cmd = "DataCompare";
        o.yAxisKey = yAxisKey;
        o.StartDate = StartDate;
        o.showType = showType;
        o.DayLen   = DayLen;


        MyAjax("<?php echo U('Handler/index');?>",o,function (data) {
            /* len = chart.series.length;
             for(i=0;i<len;i++){
             chart.series[0].remove();
             }
             */


            chart1 = new Highcharts.Chart({
                chart: {
                    renderTo: 'container3',
                    type: 'column'
                },
                title: {
                    text: '数据对比柱形图'
                },
                subtitle: {
                    text: '中国民用航空飞行学院洛阳分院'
                },
                xAxis: {
                    categories: [
                        '到站总人', '到站成人', '到站儿童', '到站婴儿', '到站货物', '到站邮件', '到站行李', '出发总人', '出发成人', '出发儿童', '出发婴儿', '出发货物', '出发邮件', '出发行李', '过站人数'
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: '降雨量 (mm)'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: '东京',
                    data: [{"a": 123}, {"b": 456}]
                }, {
                    name: '纽约',
                    data: [{"a": 100}, {"b": 200}]
                }]
            });
        });

    }
    
    function DrawTB() {
        var sAlert = "";

        StartDate = $("#sDate").val();
        DayLen = $("#DayLenInput").val();

        if(StartDate==""){
            sAlert += "请选择开始日期!";
        }

        if(yAxisKey==""){
            sAlert += "请选择Y轴标量!";
        }

        if(showType==""){
            sAlert+= "请选择图示类型!";
        }

        if(sAlert!=""){
            var d = dialog({
                title: '提示',
                content: sAlert,
                okVal:'确定',
                ok:true,
            });
            d.showModal();
            return;
        }
        var o = {};
        o.cmd = "getFlightTBData";
        o.yAxisKey = yAxisKey;
        o.StartDate = StartDate;
        o.showType = showType;
        o.DayLen   = DayLen;


        MyAjax("<?php echo U('Handler/index');?>",o,function (data){
               /* len = chart.series.length;
                for(i=0;i<len;i++){
                    chart.series[0].remove();
                }
               */

            chart =  new Highcharts.Chart({
                chart: {
                    renderTo: 'container',
                    zoomType: 'x'
                },
                title: {
                    text: '洛阳机场航班数据折线图',
                },
                subtitle:{
                    text: '中国民航飞行学院洛阳分院',
                },
                yAxis: {
                    title: {
                        text: yAxisName
                    },
                },
                xAxis: {
                    title: {
                        text: '运行日期'
                    },
                    type:"datetime",
                    labels: {
                        formatter: function() {

                            return  Highcharts.dateFormat('%Y-%m-%d', this.value);
                        }
                    }

                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },
                exporting: {
                    enabled: true
                },
                tooltip: {
                    headerFormat: '<b style="color:blue;font-weight: bold;">{series.name}</b><br>',
                    /*pointFormat: '日期：{point.x:%m月%d日}<br/>'
                     +yAxisName+'：{point.y:.2f}'+'<br/>'
                     ,*/
                    pointFormatter:function () {
                        var dt = new Date(this.x);
                        var SubTip = "";
                        var bFind = false;
                        if(showType=="Flight") {
                            SubTip += "航班类型:" + FTypes[this.FlightType] + "<br/>";
                            SubTip += "机号:" + this.AirplaneNo + "<br/>";
                        }

                        if(yAxisName!="平均客座率"){
                            SubTip+="平均客座率:"+this.AvgRate+"<br/>";
                        }else{
                            SubTip+="平均客座率:<span style=\"color:red;\">"+this.AvgRate+"</span><br/>";
                            bFind = true;
                        }
                        if(yAxisName!="到站总人"){
                            SubTip+="到站总人数:"+this.ArrPeopleCnt+"<br/>";
                        }else{
                            SubTip+="到站总人数:<span style=\"color:red;\">"+this.ArrPeopleCnt+"</span><br/>";
                            bFind = true;
                        }

                        if(yAxisName!="始发总人"){
                            SubTip+="始发总人数:"+this.PeopleCnt+"<br/>";
                        }else{
                            SubTip+="始发总人数:<span style=\"color:red;\">"+this.PeopleCnt+"</span><br/>";
                            bFind = true;
                        }

                        if(yAxisName!="过站总人"){
                            SubTip+="过站总人数:"+this.GoStationPeopleCnt+"<br/>";
                        }else{
                            SubTip+="过站总人数:<span style=\"color:red;\">"+this.GoStationPeopleCnt+"</span><br/>";
                            bFind = true;
                        }

                        if(!bFind){
                            SubTip+= yAxisName +":<span style=\"color: red;\">" + this.y+"</span>";
                        }


                        return '日期：'+dt.toLocaleDateString()+'<br/>'+SubTip;

                    }
                },
                plotOptions: {
                    line: {
                        dataLabels: {
                            enabled: true          // 开启数据标签
                        }
                    }
                },
                series:data.data,

            });

                /*for(i=0;i<len;i++){
                    chart.addSeries(data.data[i]);
                }*/
        });
    }

    var MyStationName = "<?php echo ($MyStationName); ?>";//本航站名称
    var  FlightType_Arr= [];
    var FlightType = "<?php echo (($FlightType)?($FlightType):-1); ?>";
    var Select_CP_Arr = [];
    var showType_CP = "";
    $(function () {

       $(".select2").select2({
        });

       $("input[datetimepicker]").datetimepicker({format: 'yyyy-mm-dd',autoclose: true,
           todayBtn: true,
           startView: 'month',
           minView:'month',
           maxView:'decade',
            language:'cn'});
        $("[data-toggle='popover']").popover({html : true });

        if(FlightType!="-1"){
            FlightType_Arr = FlightType.split('|');
            for(i=0;i<FlightType_Arr.length;i++){
                $("button[val="+FlightType_Arr[i]+"]").toggleClass("btn-success");
            }

        }

        $("#Export").click(function () {
                $("#mForm").attr("Action","<?php echo U('Welcome/Qry');?>"+"&Export=true");
                $("#mForm").submit();
        });
        $("#SaveBtn").click(function () {
            $("#mForm").attr("Action","<?php echo U('Welcome/Qry');?>");
            $("#mForm").submit();
        });


        $("button[name='FlightTypeBtn']").click(function () {
            $("input[name='FlightType']").val($(this).attr("val"));
            if($(this).hasClass("btn-success")){
                arr_rm(FlightType_Arr,$(this).attr("val"));
            }else{
                arr_add(FlightType_Arr,$(this).attr("val"));
            }
            $("#FlightTypeInput").val(FlightType_Arr.join('|'));
            $(this).toggleClass("btn-success");
        });

        $("button[YAxisKey='AvgRate']").addClass("btn-success");

        $("button[YAxisKey]").click(function () {
            var btns = $("button[YAxisKey]");
            btns.removeClass("btn-success");
            yAxisKey = $(this).attr("YAxisKey");
            yAxisName = $(this).text();
            $(this).addClass("btn-success");
        });

        $("button[showType='Flight']").addClass("btn-success");
        $("button[showType]").click(function () {
            var btns = $("button[showType]");
            btns.removeClass("btn-success");
            showType = $(this).attr("showType");
            $(this).addClass("btn-success");
        });

        $("button[showType_CP]").click(function () {
            var btns = $("button[showType_CP]");
            btns.removeClass("btn-success");
            showType_CP = $(this).attr("showType_CP");
            $(this).addClass("btn-success");
            if(showType_CP=="Flight"){
                var o = {};
                o.cmd= "getAllFlights";
                MyAjax("<?php echo U('Handler/index');?>",o,function (data) {
                      $("#select_CP").children().remove();
                      var dd =data.data;
                      var len =dd.length;
                      for(i=0;i<len;i++){
                          $('<option value="'+dd[i].FlightNo+'">'
                                  +dd[i].FlightNo+'('+dd[i].Origin+'->'+dd[i].Destination+')'+'</option>').appendTo("#select_CP");
                      }
                    Select_CP_Arr = [];
                    $("#SelectCount").text("0");
                });
            }else{
                var o={};
                o.cmd = "getAllAirlines";
                MyAjax("<?php echo U('Handler/index');?>",o,function (data) {
                    $("#select_CP").children().remove();
                    var dd =data.data;
                    var len =dd.length;
                    for(i=0;i<len;i++){
                        $('<option value="'+dd[i].Airline+'">'
                                +dd[i].Airline+'</option>').appendTo("#select_CP");
                    }
                    Select_CP_Arr = [];
                    $("#SelectCount").text("0");
                });
            }

        });
        $("#Select_CP_Add").click(function () {
            if(showType_CP==""){
                var d = dialog({
                    title: '提示',
                    content: '请选择类型！',
                    ok:true,
                    okVal:'确定',
                    width:200,
                });
                d.showModal();
                return;
            }

            v = $("#select_CP").val();
            if(v==""){
                var d = dialog({
                    title: '提示',
                    content: '没有选择任何值！',
                    ok:true,
                    okVal:'确定',
                    width:200,
                });
                d.showModal();
                return;
            }
            arr_add(Select_CP_Arr,$("#select_CP").val());
            $("#SelectCount").text(Select_CP_Arr.length);

        });
        
        $("#showSelect_A").click(function () {
            var d = dialog({
                title: '当前您选择的条件',
                content: function () {
                    s = "";
                    for(i=0;i<Select_CP_Arr.length;i++){
                        s+= (i+1)+":"+Select_CP_Arr[i]+"</br>";
                    }
                    return s;
                },
                ok:true,
                okVal:'确定',
                width:200,
            });
            d.showModal();
        });

        $("#showCond_A").click(function () {
            var d = dialog({
                title: '当前您选择的条件',
                content: function () {
                    var s= "";
                    for(i=0;i<Cond_Arr.length;i++){
                        ss="";
                        s += "----------------------条件"+(i+1)+"------------------------</br>";
                        s += "日期:"+Cond_Arr[i].sDate+"==>"+Cond_Arr[i].eDate+"</br>";
                        fw = Cond_Arr[i].fanwei.split('|');
                        for(j=0;j<fw.length;j++){
                            ss+=fw[j]+" ";
                        }
                        ss+="</br>";
                        s+="范围:"+ss;
                    }
                    return s+"</br>";
                },
                ok:true,
                okVal:'确定',
                width:400,
            });
            d.showModal();
        });

        $("#AddCon").click(function () {
              if(showType_CP==""){
                  var d = dialog({
                      title: '提示',
                      content: '没有选择类型！',
                      ok:true,
                      okVal:'确定',
                      width:200,
                  });
                  d.showModal();
                  return;
              }

              if(Select_CP_Arr.length==0){
                  var d = dialog({
                      title: '提示',
                      content: '没有选择任何'+(showType_CP=="Flight"?"航班！":"公司！"),
                      ok:true,
                      okVal:'确定',
                      width:200,
                  });
                  d.showModal();
                  return;
              }

              var sDate = $("#sDate_CP").val();
              var eDate = $("#eDate_CP").val();
              if(sDate==""||eDate==""){
                  var d = dialog({
                      title: '提示',
                      content: "请选择完整日期!",
                      ok:true,
                      okVal:'确定',
                      width:200,
                  });
                  d.showModal();
                  return;
              }

            var oDate1 = new Date(sDate);
            var oDate2 = new Date(eDate);
            if(oDate1.getTime()>oDate2.getTime()){
                var d = dialog({
                    title: '提示',
                    content: "开始日期不能大于结束日期!",
                    ok:true,
                    okVal:'确定',
                    width:200,
                });
                d.showModal();
                return;
            }

            var con = {};
            con.Type = showType_CP;
            con.fanwei = Select_CP_Arr.join('|');
            con.sDate = sDate;
            con.eDate = eDate;
            con.ConName = "条件"+(Cond_Arr.length+1);
            arr_add(Cond_Arr,con);
            $("#CondCount").text(Cond_Arr.length);
            Select_CP_Arr = [];
            $("#SelectCount").text("0");
            var d = dialog({
                title: '提示',
                content: "条件添加成功!",
                ok:true,
                okVal:'确定',
                width:200,
            });
            d.showModal();

        });

        $("#StartCmp").click(function () {
            var o = {};
            o.cmd = "DataCompare";
            o.data = Cond_Arr;
            MyAjax("<?php echo U('Handler/index');?>",o,function (data) {
                if(data["status"]!="success"){
                    var d = dialog({
                        title: '提示',
                        content: '查询数据失败！',
                        ok:true,
                        okVal:'确定',
                        width:200,
                    });
                    d.showModal();
                    return;
                }
                chart1 = new Highcharts.Chart({
                    chart: {
                        renderTo: 'container3',
                        type: 'column'
                    },
                    title: {
                        text: '数据对比柱形图'
                    },
                    subtitle: {
                        text: '中国民用航空飞行学院洛阳分院'
                    },
                    xAxis: {
                        categories: [
                            '到站总人', '到站成人', '到站儿童', '到站婴儿', '到站货物', '到站邮件', '到站行李', '出发总人', '出发成人', '出发儿童', '出发婴儿', '出发货物','过站人数', '出发邮件', '出发行李',
                        ],
                        crosshair: true
                    },
                    yAxis: [{
                        min: 0,
                    }],
                    tooltip: {
                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y}</b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series:data.data,
                });

                $("#RateTable").children("tbody").children("tr").remove();
                for(i=0;i<data.data.length;i++){
                    $tr = $('<tr><td>'+data.data[i].name+'</td><td>'+data.data[i].rate[0]+'</td><td>'+data.data[i].rate[1]+'</td><td>'+data.data[i].rate[2]+'</td></tr>');
                    $tr.appendTo($("#RateTable"));
                }
            });

        });

        DrawTB();
    });

</script>

</body>
</html>