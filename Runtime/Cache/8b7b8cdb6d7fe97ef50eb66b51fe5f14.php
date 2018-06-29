<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>质量管理系统</title>
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
    <script src='__PUBLIC__/js/bootstrap-table.js'></script>

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
    <link href="__PUBLIC__/css/ bootstrap-table.css" rel="stylesheet">
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
                    <li class="dropdown"><a href="<?php echo U('CheckBaseMng/index');?>">执法依据</a></li>
                    <li class="dropdown"><a href="<?php echo U('CheckForm/index');?>">检查单</a></li>
                    <li class="dropdown"><a href="<?php echo U('FlightAddAndInput/index');?>">XXXXX</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            XXXXX <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown"><a href="<?php echo U('Airlines/index');?>">XXXXX</a></li>
                            <li class="divider"></li>
                            <li class="dropdown"><a href="<?php echo U('Airplane/index');?>">XXXXX</a></li>
                            <li class="divider"></li>
                            <li class="dropdown"><a href="<?php echo U('Flight/index');?>">XXXXX</a></li>
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
    <title>检查单管理</title>

</head>
<body class="container-fluid">
<ul id="myTab" class="nav nav-tabs" >
    <li  id="Confli1" >
        <a href="#Conf1" data-toggle="tab" >
            检查单生成
        </a>
    </li>
    <li id="Confli2">
        <a href="#Conf2" data-toggle="tab">
            检查单管理
        </a>
    </li>
</ul>
<div id="myTabContent" class="tab-content">
    <div class="tab-pane" id="Conf1">
        <div class="container-fluid">
            <form id="mForm" class="form-horizontal" role="form" enctype="application/x-www-form-urlencoded" method="post" action="<?php echo U('CheckBaseMng/AddCheck');?>">
                <div class="alert alert-info" role="alert" style="margin-top: 10px;">
                    <div class=""><strong>提示：</strong>根据执法依据生成检查单。</div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-0 col-sm-12">
                        <?php if(($Warning) != ""): ?><div class="alert alert-warning" role="alert"><strong>提示：</strong><?php echo ($Warning); ?></div><?php endif; ?>
                    </div>
                </div>


                    <div class="form-group">

                        <div class="">
                            <label class="control-label col-sm-1" for="MdfID">来源类型:</label>
                            <div class="col-sm-2">
                                <input name="MdfID" id="MdfID" type="hidden" value="<?php echo ($MdfID); ?>"/>
                                <select class="form-control" name="CheckSourceType" id="CheckSourceTypeSel">
                                    <option></option>
                                    <?php if(is_array($CheckSourceType_ret)): $i = 0; $__LIST__ = $CheckSourceType_ret;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["SourceTypeName"]); ?>">
                                            <?php echo ($vo["SourceTypeName"]); ?>
                                        </option>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="" >
                                <label class="control-label col-sm-1" for="CheckSourceSel">来源名称:</label>
                            </div>
                            <div class="col-sm-2">
                                <select class="form-control" name="CheckSource" id="CheckSourceSel">
                                    <option></option>
                                    <?php if(is_array($CheckSource_ret)): $i = 0; $__LIST__ = $CheckSource_ret;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["CheckSource"]); ?>">
                                            <?php echo ($vo["CheckSource"]); ?>
                                        </option>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="" >
                                <label class="control-label col-sm-1" for="CheckSubjectSel">检查项目:</label>
                            </div>
                            <div class="col-sm-2">
                                <select class="form-control" name="" id="CheckSubjectSel">
                                    <option></option>
                                    <?php if(is_array($CheckSubject_ret)): $i = 0; $__LIST__ = $CheckSubject_ret;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["CheckSubject"]); ?>">
                                            <?php echo ($vo["CheckSubject"]); ?>
                                        </option>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                            <a id="showInput" class="btn btn-warning">筛选</a>
                            <a id="" class="btn btn-success">检查单预览</a>
                    </div>
              <hr/>

                <div class="col-sm-12"  style="overflow:scroll;">
                    <table class="table  bootstrap-datatable datatable  table-bordered responsive table-hover" style="min-width:  150%;"
                           data-toggle="table"
                           data-toolbar="#toolbar"
                           data-search="true"
                           data-show-refresh="true"
                           data-show-toggle="true"
                           data-show-columns="true"
                           data-show-export="true"
                           data-minimum-count-columns="2"
                           data-id-field="id"
                           data-show-footer="false"
                           data-classes="table table-bordered"
                           data-response-handler="responseHandler">
                        <thead>
                        <tr>
                            <th >序号</th>
                            <th class="col-sm-1">类型</th>
                            <th class="col-sm-1">来源</th>
                            <th class="col-sm-1">项目</th>
                            <th class="col-sm-2">内容</th>
                            <th class="col-sm-3">标准</th>
                            <th class="col-sm-4">符合性判定标准</th>
                            <th >加入</th>
                            <th >状态</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($Check_ret)): $i = 0; $__LIST__ = $Check_ret;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td>
                                    <?php echo ($vo["id"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["CheckSourceType"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["CheckSource"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["CheckSubject"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["CheckContent"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["CheckStandard"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["CheckConfirmStd"]); ?>
                                </td>
                                <td>
                                    <a class="btn btn-default btn-sm" href="#" XDBtnID = "<?php echo ($vo["id"]); ?>"  >加入</a>
                                </td>
                                <td>

                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>

            </form>

        </div>
    </div>
    <div class="tab-pane" id="Conf2">
        <div class="container-fluid" style="margin-top:30px">
            <form class="form-horizontal" id="CheckSourceAddFrm" role="form" enctype="multipart/form-data" method="post" action="<?php echo U('CheckBaseMng/AddCheckBaseSource');?>">
                <div class="alert alert-info" role="alert" style="margin-top: 10px;"><div class="col-sm-offset-0"><strong>提示：</strong>检查单管理。</div></div>
                <input type="hidden" name="selInput" id="selInput"/>
                <div style="margin-top: 10px">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <?php if(($WarningRight) != ""): ?><div class="alert alert-danger" role="alert"><strong>提示：</strong><?php echo ($WarningRight); ?></div><?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-1"></div>
                        <label for="Name" class="col-sm-2 control-label">执法依据来源类型:</label>

                        <div class="col-sm-6">
                            <input class="form-control" type="text" id="Name" name="Name"  placeholder="请写全称" />
                        </div>
                        <button type="submit" class="btn btn-primary">添加</button>
                    </div>
                    <hr/>
                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                        <thead>
                        <tr>
                            <th>序号</th>
                            <th>依据来源类型</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($CheckSourceType_ret)): $i = 0; $__LIST__ = $CheckSourceType_ret;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td>
                                    <?php echo ($vo["id"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["SourceTypeName"]); ?>
                                </td>
                                <td>
                                    <input type="checkbox" name="CKbtn" CKid = "<?php echo ($vo["id"]); ?>" style="margin-right: 10px;"/><a class="btn btn-danger btn-sm" href="#" BtnID = "<?php echo ($vo["id"]); ?>"  disabled>删除</a>
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
        var ActiveLi = "<?php echo (($myActiveLi)?($myActiveLi):Confli1); ?>";
        var CurCheckSourceType = "<?php echo (($CheckSourceType)?($CheckSourceType):''); ?>";
        var CurCheckSource = "<?php echo (($CheckSource)?($CheckSource):''); ?>";
        $("li").removeClass("active");
        $("#" + ActiveLi).addClass("active");
        tgtTab = $("#" + ActiveLi + ">a").attr("href");
        $(tgtTab).addClass("fade  in active");
        $("#showInput").click(function () {
            var elem = document.getElementById('IN');
            dialog({
                title:'请输入来源名称!',
                content: '名称:<input id="DiagUserInput" class="form-control"/>',
                id: 'IN',
                button: [
                    {
                        value: '添加来源',
                        callback: function () {
                            var count = $("#CheckSourceSel option").length;
                            var val =$("#DiagUserInput").val(),bFind=0;
                            for ( var i = 0; i < count; i++) {
                                if($("#CheckSourceSel ").get(0).options[i].value==val){
                                    bFind = 1;
                                }
                            }
                            if(bFind==0){
                                $("#CheckSourceSel ").append("<option>"+val+"</option>");
                            }
                        },
                        autofocus: true
                    },
                    {
                        value: '退出',
                        callback: function () {
                            close();
                        }
                    }
                ]
            }).showModal();
        });
        $("a[XDBtnID]").click(function () {
            window.location = "<?php echo U('CheckBaseMng/showMdfInfo');?>" + "&id="+$(this).attr("XDBtnID");
        });
        $("a[RXDBtn]").click(function () {
            $("#mForm").attr("action", "<?php echo U('CheckBaseMng/MdfCheck');?>" + "&id="+$("#MdfID").val()) ;
            $("#mForm").submit();
        });
        $("#CheckSourceTypeSel option[value="+CurCheckSourceType+"]").attr("selected", true);
        $("#CheckSource option[value="+CurCheckSource+"]").attr("selected", true);
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