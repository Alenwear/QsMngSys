<?php
/**
 * Created by PhpStorm.
 * User: liguangyao
 * Date: 2018/6/21
 * Time: 14:57
 */
class CheckBaseMngAction extends Action{
    public $CurLi = "Confli1";
    public function index(){
        $tb_CheckSourceTab = M("PModel:CheckBaseSourceTab");
        $tb_CheckBaseDB = M("PModel:CheckBaseDB");
        $tb_CheckBase= M("PModel:CheckBase");
        $this->assign("CheckSourceType_ret",$tb_CheckSourceTab->select());
        $this->assign("CheckBaseDB_ret",$tb_CheckBaseDB->select());
        $this->assign("Check_ret",$tb_CheckBase->where(array("isValid"=>1))->select());
        $this->assign("CheckSource_ret",$tb_CheckBase->field("distinct CheckSource")->where(array("isValid"=>1))->select());
        $this->assign("myActiveLi",$this->CurLi);
        $this->display("index");
    }
    public function AddCheckBaseSource()
    {
        $Name = trim(I("Name"));
        if(empty($Name)){
            goto OUT;
        }

        $tb_CheckBaseSourceTab = M("PModel:CheckBaseSourceTab");
        $where["SourceTypeName"] = $Name;
        if(!empty($tb_CheckBaseSourceTab->where($where)->select())){
            goto OUT;
        }

        $data["SourceTypeName"] = $Name;
        $tb_CheckBaseSourceTab->add($data);
        echo $tb_CheckBaseSourceTab->getDbError();
        OUT:
            $this->CurLi = "Confli2";
            $this->index();
    }

    public function AddCheckDB()
    {
        $Name = trim(I("CheckBaseDBName"));
        if(empty($Name)){
            goto OUT;
        }

        $tb_CheckBaseDB = M("PModel:CheckBaseDB");
        $where["DBName"] = $Name;
        if(!empty($tb_CheckBaseDB->where($where)->select())){
            goto OUT;
        }

        $data["DBName"] = $Name;
        $tb_CheckBaseDB->add($data);
        echo $tb_CheckBaseDB->getDbError();
        OUT:
        $this->CurLi = "Confli3";
        $this->index();
    }

    public function AddCheck(){
        $CheckSourceType  =I("CheckSourceType");
        $CheckSource  = I("CheckSource");
        $CheckSubject = I("CheckSubject");
        $CheckContent = I("CheckContent");
        $CheckStandard = I("CheckStandard");
        $CheckConfirmStd = I("CheckConfirmStd");
        $CheckContent = str_replace(array("\r\n", "\r", "\n"),"</br>",$CheckContent);
        $CheckStandard = str_replace(array("\r\n", "\r", "\n"),"</br>",$CheckStandard);
        $CheckConfirmStd = str_replace(array("\r\n", "\r", "\n"),"</br>",$CheckConfirmStd);
        $Warning = "";
        if(empty($CheckSourceType)||empty($CheckSource)||empty($CheckSubject) || empty($CheckContent) || empty($CheckStandard)){
            $Warning.= "请完整填写所有要素。";
            goto OUT;
        }
        //检查执法来源是否用户手动添加，不存在。
        $tb_CheckSourceTypeTab = M("PModel:CheckBaseSourceTab");
        if(empty($tb_CheckSourceTypeTab->where(array("SourceTypeName"=>$CheckSourceType))->select())){
            $Warning.="来源类型错误！";
            goto OUT;
        }
        //检查法规是否隶属于不同的类型
        $tb_CheckBase = M("PModel:CheckBase");
        $ret = $tb_CheckBase->where(array("CheckSource"=>$CheckSource))->select();
        if(!empty($ret) && $ret[0]["CheckSourceType"]!=$CheckSourceType){
            $Warning.= $CheckSource."来源选择错误！";
            goto OUT;
        }
        $data["CheckSourceType"] = $CheckSourceType;
        $data["CheckSource"] = $CheckSource;
        $data["CheckSubject"] = $CheckSubject;
        $data["CheckContent"] = $CheckContent;
        $data["CheckStandard"] = $CheckStandard;
        $data["CheckConfirmStd"] = $CheckConfirmStd;
        $data["isValid"] = 1;
        $data["OldID"] = 0;

        if(!empty($tb_CheckBase->where($data)->select())){
            $Warning.= "本条执法依据已存在!";
            goto OUT;
        }

        $data["AddTime"] = date("Y-m-d H:i:s");


        if($tb_CheckBase->add($data)>1){
            $Warning.="添加成功！";
        }else{
            $Warning.="添加失败！！！";
        }

        OUT:
            $this->assign("Warning",$Warning);
            $this->assign("myActiveLi","Confli1");
            $this->index();
    }

    function MdfCheck($id=null){

        if(empty($id)){
            goto OUT;
        }

        $CheckSourceType  =I("CheckSourceType");
        $CheckSource  = I("CheckSource");
        $CheckSubject = I("CheckSubject");
        $CheckContent = I("CheckContent");
        $CheckStandard = I("CheckStandard");
        $CheckConfirmStd = I("CheckConfirmStd");
        $CheckConfirmStd = str_replace(array("\r\n", "\r", "\n"),"</br>",$CheckConfirmStd);
        $CheckContent = str_replace(array("\r\n", "\r", "\n"),"</br>",$CheckContent);
        $CheckStandard = str_replace(array("\r\n", "\r", "\n"),"</br>",$CheckStandard);
        $Warning = "";

        if(empty($CheckSourceType)||empty($CheckSource)||empty($CheckSubject) || empty($CheckContent) || empty($CheckStandard)){
            $Warning.= "请完整填写所有要素。";
            goto OUT;
        }
        //检查执法来源是否用户手动添加，不存在。
        $tb_CheckSourceTypeTab = M("PModel:CheckBaseSourceTab");
        if(empty($tb_CheckSourceTypeTab->where(array("SourceTypeName"=>$CheckSourceType))->select())){
            $Warning.="来源类型错误！";
            goto OUT;
        }
        //检查法规是否隶属于不同的类型
        $tb_CheckBase = M("PModel:CheckBase");
        $ret = $tb_CheckBase->where(array("CheckSource"=>$CheckSource))->select();
        if(!empty($ret) && $ret[0]["CheckSourceType"]!=$CheckSourceType){
            $Warning.= $CheckSource."来源选择错误！";
            goto OUT;
        }

        if(empty($tb_CheckBase->where(array("id"=>$id))->select())){
            $Warning.="该条执法依据不存在!";
            goto  OUT;
        }

        $data["CheckSourceType"] = $CheckSourceType;
        $data["CheckSource"] = $CheckSource;
        $data["CheckSubject"] = $CheckSubject;
        $data["CheckContent"] = $CheckContent;
        $data["CheckStandard"] = $CheckStandard;
        $data["CheckConfirmStd"] = $CheckConfirmStd;
        $data["isValid"] = 1;

        if(!empty($tb_CheckBase->where($data)->select())){
            $Warning.= "本条执法依据已存在!";
            goto OUT;
        }



        $data["AddTime"] = date("Y-m-d H:i:s");
        $data["OldID"] = $id;


        if($tb_CheckBase->add($data)>0){
            $Warning.="修订成功！";
            $data = array();
            $data["isValid"]=0;
            $tb_CheckBase->where(array("id"=>$id))->save($data);
        }else{
            $Warning.="添加失败！！！";
            var_dump($tb_CheckBase->getDbError());
        }

        OUT:
        $this->assign("Warning",$Warning);
        $this->assign("myActiveLi","Confli1");
        $this->index();
    }

    function showMdfInfo($id=null)
    {
        if(empty($id)){
           goto OUT;
        }
        $tb_CheckBase= M("PModel:CheckBase");
        $ret = $tb_CheckBase->where(array("id"=>$id))->select();
        $this->assign("CheckSourceType",str_replace("</br>","\n",$ret[0]["CheckSourceType"]));
        $this->assign("CheckSource",str_replace("</br>","\n",$ret[0]["CheckSource"]));
        $this->assign("CheckContent",str_replace("</br>","\n",$ret[0]["CheckContent"]));
        $this->assign("CheckStandard",str_replace("</br>","\n",$ret[0]["CheckStandard"]));
        $this->assign("CheckSubject",str_replace("</br>","\n",$ret[0]["CheckSubject"]));
        $this->assign("CheckConfirmStd",str_replace("</br>","\n",$ret[0]["CheckConfirmStd"]));
        $this->assign("MdfID",$id);
        OUT:
            $this->index();
    }
}