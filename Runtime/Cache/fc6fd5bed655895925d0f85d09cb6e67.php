<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
    <link href="__PUBLIC__/css/bootstrap-datetimepicker.css" rel="stylesheet">
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
    <script src="__PUBLIC__/js/bootstrap-datetimepicker.js"></script>
    <script src="__PUBLIC__/js/dialog-plus-min.js"></script>

    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/highcharts.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/exp1.js"></script>

</head>
<body class="container-fluid">
<form id="mForm" class="form-horizontal" role="form" enctype="application/x-www-form-urlencoded" method="post" >
    <?php if(($Warning) != ""): ?><div class="row">
            <div class="col-sm-12">
                <div class="alert alert-warning" role="alert"><strong>提示：</strong><?php echo ($Warning); ?></div>
            </div>
        </div><?php endif; ?>

    <div class="form-inline"  style="text-align: left">

        <div class="form-group">
            <label class="control-label">信息:</label>
            <label class="label label-success"><?php echo ($FlightNo); ?></label>
            <label class="label label-danger"><?php echo ($StatusText); ?></label>
            <label class="label label-default"><?php echo ($FlightDate); ?></label>
        </div>

    </div>


    <div class="form-group">
            <label class="control-label">留言:</label>
            <input name="Memo"  class="form-control"/>
    </div>


    <div class="form-group" style="text-align: left">
        <label class="control-label">操作:</label>
                <?php if(($Submit_show) == "true"): ?><button OpBtn="Submit" class="btn btn-sm btn-default">提交</button><?php endif; ?>
                <?php if(($Cancel_show) == "true"): ?><button OpBtn="Cancel" class="btn btn-sm btn-danger">取消该航班</button><?php endif; ?>
                <?php if(($Reject_show) == "true"): ?><button OpBtn="Reject"  class="btn btn-sm btn-primary">驳回</button><?php endif; ?>
                <?php if(($OK_show) == "true"): ?><button OpBtn="OK"   class="btn btn-sm btn-success">确认OK</button><?php endif; ?>
                <?php if(($DeCancel_show) == "true"): ?><button OpBtn="DeCancel"  class="btn btn-sm btn-danger">撤销取消</button><?php endif; ?>
    </div>
    <div class="form-group">
        <hr/>
        <div style="">
            <?php
 echo htmlspecialchars_decode(htmlspecialchars_decode($Memo)); ?>
        </div>

    </div>
</form>
<script>
    var rowId = <?php echo ($rowId); ?>;
    var curState = <?php echo ($curState); ?>;
    $(function () {
        $("button[OpBtn]").click(function () {
            $("#mForm").attr("action","<?php echo U('FlightStatusMng/userSubmit');?>" + "&OpType="+$(this).attr("OpBtn")+"&rowId="+rowId + "&curState="+curState);
            $("#mForm").submit();
        });
    });
</script>
</body>
</html>