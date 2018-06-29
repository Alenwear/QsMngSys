<?php
/**
 * Created by PhpStorm.
 * User: lgy
 * Date: 17-4-16
 * Time: 下午3:50
 */

class UserMngAction extends  PublicAction
{
        function  index()
        {
            $tb_UserList = M("PModel:UserList");
            $tb_Department = M("PModel:Departments");
            $ret = $tb_UserList->select();
            $this->assign("UserList",$ret);
            $this->assign("Departments",$tb_Department->select());
            $this->assign("UserRoles",C("UserRoles"));
            $this->display("index");
        }

        function UserMdf(){
            $rowid = I("rowid");
            $pwd   = I("password");
            $UserID = session("UserID");
            $Warning = "";
            if($UserID!=$rowid && intval(session("userType"))==0){
                $Warning.= "您没有权限修改他人密码";
                goto OUT;
            }

            if(empty($pwd)){
                $Warning.= "密码不能为空哦!";
                goto OUT;
            }

            $tb_UserList = M("PModel:UserList");
            $tb_UserList->where(array("id"=>$rowid))->save(array("Pwd"=>$pwd));
            $Warning.= "密码修改成功!";
            $this->AddUserLog("修改".$rowid."密码为:".$pwd);
            OUT:
                $this->assign("Warning",$Warning);
                $this->index();
        }

        function AddDepartMent(){
            $Name = I("Department");
            $tb_Department = M("PModel:Departments");
            if(empty($Name)){
                goto OUT;
            }
            if(!empty($tb_Department->where(array("Department"=>$Name))->select())){
                goto OUT;
            }

            $data["Department"] = $Name;
            $tb_Department->add($data);

            OUT:
                $this->index();
        }

        function  AddUser()
        {
            $Warning = "";

            $Name = I("Name");
            $Corp = I("Corp");
            $UserName = I("UserName");
            $Pwd = I("sPwd");
            $UserRole = I("UserRole");


            if(empty($Name)||empty($Corp)||empty($UserName)||empty($Pwd) || empty($UserRole)){
                $Warning.= "信息不完整！";
                goto OUT;
            }

            $tb_UserList = M("PModel:UserList");
            if(!empty($tb_UserList->where(array("Name"=>$Name))->select())){
                $Warning.= "该姓名已存在！";
                goto OUT;
            }

            if(!empty($tb_UserList->where(array("UserName"=>$UserName))->select())){
                $Warning.= "该用户名已存在！";
                goto OUT;
            }

            $tb_UserList = M("PModel:UserList");

            $data["Name"] = $Name;
            $data["Department"] = $Corp;
            $data["UserName"] = $UserName;
            $data["Pwd"] = md5($Pwd);
            $data["Role"] = $UserRole;

            if(empty($tb_UserList->add($data))){
                //echo $tb_UserList->getDbError();
                $Warning.= "用户添加失败！";
                goto OUT;
            }else{
                $Warning.= "用户添加成功！！";
                $this->AddUserLog("添加用户:".$Name);
                goto OUT;
            }

            OUT:
                $this->assign("Warning",$Warning);
                $this->index();
        }

        function DeleteUser()
        {
            $Warning="";
            $UserID = session("UserID");
            $DelID = I("rowid");
            if(empty($UserID) || empty("DelID")){
                $Warning.= "没有登陆!";
                goto OUT;
            }

            $userType = intval(session("userType"));
            if($userType<2){
                $Warning.= "权限不足!";
                goto OUT;
            }

            $tb_UserList = M("PModel:UserList");
            $data["id"] = $DelID;


            if(empty($tb_UserList->where($data)->delete())){
                //echo $tb_UserList->getLastsql();
                $Warning.= "用户删除失败!";
                goto OUT;
            }else{
                $Warning.= "用户添加成功！！";
                $this->AddUserLog("删除用户:".$UserID);
                goto OUT;
            }


            OUT:
            $this->assign("Warning",$Warning);
            $this->index();


        }


}