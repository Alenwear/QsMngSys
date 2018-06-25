<?php
/**
 * Created by PhpStorm.
 * User: liguangyao
 * Date: 2018/6/25
 * Time: 09:23
 */

class CheckFormAction extends Action
{
        function index()
        {
            $tb_CheckSourceTab = M("PModel:CheckBaseSourceTab");
            $tb_CheckBase= M("PModel:CheckBase");
            $this->assign("CheckSourceType_ret",$tb_CheckSourceTab->select());
            $this->assign("Check_ret",$tb_CheckBase->where(array("isValid"=>1))->select());
            $this->assign("CheckSource_ret",$tb_CheckBase->field("distinct CheckSource")->where(array("isValid"=>1))->select());
            $this->assign("CheckSubject_ret",$tb_CheckBase->field("distinct CheckSubject")->where(array("isValid"=>1))->select());
            $this->assign("myActiveLi","Confli1");
            $this->display("index");
        }
}