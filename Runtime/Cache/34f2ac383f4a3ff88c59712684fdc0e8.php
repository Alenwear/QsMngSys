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
    <!-- history.js for cross-browser state change on ajax -->
    <script src="__PUBLIC__/js/jquery.history.js"></script>
    <link rel="shortcut icon" href="__PUBLIC__/img/favicon.ico">
    <script type="text/javascript" src="__PUBLIC__/ckeditor/ckeditor.js"></script>
    <script src="__PUBLIC__/js/gyComm.js"></script>
    <script src="__PUBLIC__/js/jquery-ui.min.js"></script>
    <style>
      #Adult #Children #Baby #GoStationAdult  #GoStationChildren  #GoStationBaby {
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
<form id="mForm" class="form-horizontal" role="form" enctype="application/x-www-form-urlencoded" action="<?php echo U('FlightInput/Save');?>" method="post" >
    <div class="alert alert-info" role="alert" style="margin-top: 10px;">
    <div class="col-sm-offset-0"><strong>提示：</strong>航班数据输入，请将所有数据填写完整后再保存。</div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-0 col-sm-12">
            <?php if(($Warning) != ""): ?><div class="alert alert-warning" role="alert"><strong>提示：</strong><?php echo ($Warning); ?></div><?php endif; ?>
        </div>
    </div>

    <div style="margin-top: 10px">
        <div class="form-group">
            <input type="hidden" id="rowId" name="rowId"/>
           <label for="AddDate" class="col-sm-2 control-label">运行日期:</label>
            <div class="col-sm-10">
                <input id = "AddDate" class="form-control" type="text" placeholder="" value="<?php echo ($FlightDate); ?>" readonly>
            </div >
        </div>
        <div class="form-group ">
            <label for="Airline" class="col-sm-2 control-label">航空公司:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Airline"  name="Airline" placeholder="" value="<?php echo ($Airline); ?>" readonly>
            </div>
        </div>
        <div class="form-group ">
            <label for="FlightNo" class="col-sm-2 control-label">航班号:</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <input type="text" id = "FlightNo" type="number"  class="form-control"  name="FlightNo" placeholder="" value="<?php echo ($FlightNo); ?>" readonly>
                    <div class="input-group-addon"><span style="color:blue;"><?php echo ($FlightType); ?></span></div>
                </div>
            </div>
        </div>
        <div class="form-group ">
            <label for="AirplaneNo" class="col-sm-2 control-label">机号:</label>
            <div class="col-sm-2">
                <div class="input-group">
                    <input type="text" class="form-control input-md" id="AirplaneNo"  name="AirplaneNo" value="<?php echo ($AirplaneNo); ?>" />
                </div>
            </div>
            <div class="form-group ">
            <label for="AirplaneNo" class="col-sm-1 control-label">机型:</label>
            <div class="col-sm-2">
                <div class="input-group">
                    <input type="text" class="form-control input-md" id="AirplaneModel"  name="AirplaneModel" value="<?php echo ($AirplaneModel); ?>" readonly/>
                </div>
            </div>
            <div class="form-group ">
            <label for="AirplaneNo" class="col-sm-1 control-label">座位:</label>
            <div class="col-sm-2">
                <div class="input-group">
                    <input type="text" class="form-control input-md" id="SeatsAtThisTime"  name="SeatsAtThisTime" value="<?php echo ($SeatsAtThisTime); ?>" readonly/>
                </div>
            </div>

                <?php if(($AirplaneNo) == ""): ?><label  class="label control-label label-danger" id="StateLB">输入机号!</label><?php endif; ?>
                <?php if(($AirplaneNo) != ""): ?><label  class="label control-label label-success" id="StateLB">该飞机存在!</label><?php endif; ?>


        </div>

        <div class="col-sm-11 col-sm-offset-1">
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
            <?php if(($FakeFlightType == 'Arrive') OR ($FakeFlightType == 'GoStation') OR ($FakeFlightType == 'Alternate') OR ($FakeFlightType == 'Gongwu')): ?><tr>
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
                    <td><input name= "ArrLuggage"  class="form-control input-sm myInput" value="<?php echo ($ArrLuggage); ?>"/></td>
                </tr><?php endif; ?>
            <?php if(($FakeFlightType == 'To') OR ($FakeFlightType == 'GoStation') OR ($FakeFlightType == 'Alternate') OR ($FakeFlightType == 'Gongwu') ): ?><tr class="spec">
                    <td style="color: red;font-weight: bold;">出发</td>
                    <td ><input name="Adult" class="form-control input-sm myInput" value="<?php echo ($Adult); ?>"/></td>
                    <td ><input name="Children" class="form-control input-sm myInput"  value="<?php echo ($Children); ?>"/></td>
                    <td ><input name="Baby" class="form-control input-sm myInput"  value="<?php echo ($Baby); ?>"/></td>
                    <td><input  name="GoStationAdult" class="form-control input-sm myInput"   value="<?php echo ($GoStationAdult); ?>" <?php if(($FakeFlightType) != "GoStation"): ?>disabled<?php endif; ?>/></td>
                    <td><input  name="GoStationChildren" class="form-control input-sm myInput"   value="<?php echo ($GoStationChildren); ?>" <?php if(($FakeFlightType) != "GoStation"): ?>disabled<?php endif; ?>/></td>
                    <td><input  name="GoStationBaby" class="form-control input-sm myInput"   value="<?php echo ($GoStationBaby); ?>" <?php if(($FakeFlightType) != "GoStation"): ?>disabled<?php endif; ?>/></td>

                    <td style="font-weight: bolder;" ><?php echo ($PeopleCnt); ?></td>
                    <td ><input name="Cargo"  class="form-control input-sm myInput" value="<?php echo ($Cargo); ?>"/></td>
                    <td><input name="Mail" class="form-control input-sm myInput" value="<?php echo ($Mail); ?>"/></td>
                    <td><input name="Luggage" class="form-control input-sm myInput" value="<?php echo ($Luggage); ?>"/></td>
                </tr><?php endif; ?>
            </tbody>
        </table>
        </div>
        <div class="form-group ">
            <div class="col-sm-8 col-sm-offset-4">
                <button id="SaveBtn" class="btn btn-primary"  style="margin-left:25%;">保存</button>
            </div>
        </div>
    </div>

    </form>

</body>
<script>

    var url = window.location.toString();
    var index = url.lastIndexOf("rowId=");
    var rowId = url.substr(index+6);
    var AllSeatsCnt = <?php echo ($SeatsAtThisTime); ?>;
    var ActionUrl = "<?php echo U('FlightInput/Save');?>" + "&rowId=" + rowId;



    $(function () {
        var OldAirplanNo = "<?php echo ($AirplaneNo); ?>";
        $("#mForm").attr("action",ActionUrl);
        $("#rowId").val(rowId);
        $("#AirplaneNo").focusout(function () {
             if($(this).val()==OldAirplanNo)
                 return;

             OldAirplanNo=$(this).val();
             MyAjax("<?php echo U('Airplane/GetAirplanInfo');?>"+"&AirplaneNo="+$(this).val()+"&Airline="+$("#Airline").val(),{},function (data) {
                 if(data.status=="success"){
                     $("#SeatsAtThisTime").val(data.seats);
                     $("#AirplaneModel").val(data.AirplaneModel);
                     $("#SeatsAtThisTime").attr("readonly","");
                     $("#AirplaneModel").attr("readonly","");
                     if(data.Airline == $("#Airline").val()){
                         $("#StateLB").text("飞机存在!");
                         $("#StateLB").removeClass("label-danger");
                         $("#StateLB").addClass("label-success");
                     }else{
                         $("#StateLB").text("飞机不属于该公司！!");
                         $("#StateLB").addClass("label-danger");
                     }

                 }else {
                     $("#SeatsAtThisTime").val("");
                     $("#AirplaneModel").val("");
                     $("#StateLB").text("飞机不存在!");
                     $("#SeatsAtThisTime").removeAttr("readonly");
                     $("#AirplaneModel").removeAttr("readonly");
                     $("#StateLB").addClass("label-danger");
                     $("#StateLB").removeClass("label-success");
                 }
             });

        });

           $( "div[slider]" ).css("margin-left","50px");
            $( "div[slider]" ).css("background","#8ae234");
            $( "div[slider]" ).css("border-color","#8ae234");

            var availableTags = <?php echo (($AiplaneList )?($AiplaneList ):[]); ?>;
            $("#AirplaneNo").autocomplete({
                source: availableTags
            });

    });








</script>
</html>