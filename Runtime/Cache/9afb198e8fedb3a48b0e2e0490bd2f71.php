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



<body class="container-fluid">
<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade in active" id="home">
        <div class="container-fluid">

            <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="<?php echo U('UserLog/index');?>">
                <div class="alert alert-info" role="alert" style="margin-top: 10px;"><div class="col-sm-offset-0"><strong>提示：</strong>用户操作记录。</div></div>
                <input type="hidden" name="selInput" id="selInput"/>
                <div style="margin-top: 10px">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <?php if(($Warning) != ""): ?><div class="alert alert-danger" role="alert"><strong>提示：</strong><?php echo ($Warning); ?></div><?php endif; ?>
                        </div>
                    </div>
                    <h4 style="text-align: center"></h4>
                    <hr/>
                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                        <thead>
                        <tr>
                            <th>序号</th>
                            <th>时间</th>
                            <th>操作者</th>
                            <th>日志</th>
                            <th>IP</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($LogList)): $i = 0; $__LIST__ = $LogList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td>
                                    <?php echo ($vo["id"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["AddTime"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["Name"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["Log"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["IP"]); ?>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </form>

        </div>
    </div>
 </div>
</body>
<script>
    $(function () {
        $("input[name='CKbtn']").bind('click',function () {
            if($(this).is(":checked")){
                $("a[BtnID="+$(this).attr("CKid")+"]").removeAttr("disabled");
            }else{
                $("a[BtnID="+$(this).attr("CKid")+"]").attr("disabled","disabled");
            }
        });
        
        $("a[BtnID]").click(function () {
             window.location = "<?php echo U('Airplane/DelAirplane');?>"+"&id="+$(this).attr("BtnID");
        });
    });
</script>
</html>