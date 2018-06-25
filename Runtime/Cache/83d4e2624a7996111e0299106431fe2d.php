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
            用户管理
        </a>
    </li>
</ul>
<div id="myTabContent" class="tab-content">
    <div class="tab-pane active" id="home">
        <div class="container-fluid" style="margin-top: 20px;">
            <form id="form1" class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="<?php echo U('UserMng/UserMdf');?>">
                <?php if(($Warning) != ""): ?><div class="form-group">
                        <div class="col-sm-12">
                            <?php if(($Warning) == ""): ?><div class="alert alert-success" role="alert"><strong>提示：</strong>用户添加与修改!</div><?php endif; ?>
                            <div class="alert alert-danger" role="alert"><strong>提示：</strong><?php echo ($Warning); ?></div>
                        </div>
                    </div><?php endif; ?>
                <input type="hidden" name="password"/>
                <input name="rowid" type="hidden"/>
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>序号</th>
                        <th>姓名</th>
                        <th>部门</th>
                        <th>用户名</th>
                        <th>密码</th>
                        <th>角色</th>
                        <th>保存</th>
                        <th>删除</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($UserList)): $i = 0; $__LIST__ = $UserList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td>
                                <?php echo ($vo["id"]); ?>
                            </td>
                            <td>
                                <?php echo ($vo["Name"]); ?>
                            </td>
                            <td>
                                <?php echo ($vo["Corp"]); ?>
                            </td>
                            <td>
                                <?php echo ($vo["UserName"]); ?>
                            </td>
                            <td class="col-sm-2">
                                <input style="width: 150px;" class="form-control" type="password" rowid = "<?php echo ($vo["id"]); ?>" name="pwd"/>
                            </td>
                            <td>
                                <?php if(($vo["userType"]) == "0"): ?><label class="label label-success">值机员</label><?php endif; ?>
                                <?php if(($vo["userType"]) == "1"): ?><label class="label label-warning">审核员</label><?php endif; ?>
                                <?php if(($vo["userType"]) == "2"): ?><label class="label label-danger">管理员</label><?php endif; ?>
                            </td>
                            <td>
                                <input type="checkbox" name="CKbtn" CKid = "a<?php echo ($vo["id"]); ?>" style="margin-right: 10px;"/><a class="btn btn-success btn-sm" href="#" CKid = "a<?php echo ($vo["id"]); ?>" BtnID = "<?php echo ($vo["id"]); ?>" SavePwd  disabled>保存</a>
                            </td>
                            <td>
                                <input type="checkbox" name="CKbtn" CKid = "d<?php echo ($vo["id"]); ?>" style="margin-right: 10px;"/><a class="btn btn-danger btn-sm" href="#" CKid = "d<?php echo ($vo["id"]); ?>" BtnID = "<?php echo ($vo["id"]); ?>"  DeleteUser disabled>删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    <?php if(($userType) > "0"): ?><tr>
                        <td>
                            <label class="label label-success">添加用户</label>
                        </td>
                        <td>
                            <input style="width: 150px;" class="form-control" rowid = "<?php echo ($vo["id"]); ?>" name="Name"/>
                        </td>
                        <td>
                            <input style="width: 150px;" class="form-control" rowid = "<?php echo ($vo["id"]); ?>" name="Corp"/>
                        </td>
                        <td>
                            <input style="width: 150px;" class="form-control" rowid = "<?php echo ($vo["id"]); ?>" name="UserName"/>
                        </td>
                        <td>
                            <input style="width: 150px;" class="form-control"  type="password" rowid = "<?php echo ($vo["id"]); ?>" name="sPwd"/>
                        </td>
                        <td>
                            <select id="userTypeSelect" name ="userTypeSelect" class="form-control">
                                <option value="0" >值机员</option>
                                <option value="1" >审核员</option>
                                <option value="2" >管理员</option>
                            </select>
                        </td>
                        <td colspan="2" style="text-align: center;">
                             <a class="btn btn-success"  href="#" BtnID = "<?php echo ($vo["id"]); ?>" AddUser>添加</a>
                        </td>

                    </tr><?php endif; ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
  </div>
</body>
</html>
<script>
    $(function () {
        $("input[name='CKbtn']").bind('click',function () {
            if($(this).is(":checked")){
                $("a[CKid="+$(this).attr("CKid")+"]").removeAttr("disabled");
            }else{
                $("a[CKid="+$(this).attr("CKid")+"]").attr("disabled","disabled");
            }

        });

        $("a[SavePwd]").click(function () {
            var pwd = $("input[rowid="+$(this).attr("BtnID")+"]").val();
            if(pwd==""){
                alert("请输入密码!");
                return;
            }

            $("input[name=password]").val(pwd);
            $("input[name=rowid]").val($(this).attr("BtnID"));
            $("#form1").submit();
        });
        
        $("a[AddUser]").click(function () {
            $("#form1").attr("action","<?php echo U('UserMng/AddUser');?>");
            $("#form1").submit();
        });

        $("a[DeleteUser]").click(function () {
            $("input[name=rowid]").val($(this).attr("BtnID"));
            $("#form1").attr("action","<?php echo U('UserMng/DeleteUser');?>");
            $("#form1").submit();
        });
        
    });
</script>
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