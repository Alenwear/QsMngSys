<?php
class PublicAction extends Action
{

    protected $StationName = "";//本航站名称



    function  __construct(){
       parent::__construct();

        //$this->CheckBrowser();
        if(empty(session("UserID"))){
            $this->redirect("Login/index");
        }
         //获取航站名称，此处省略，直接赋值为洛阳
        $this->StationName = "洛阳";
    }

    protected $tb_name = "";
    public function upload()
    {
        import('ORG.Net.UploadFile');
        $upload = new UploadFile (); // 实例化上传类
        $upload->maxSize = 3145728; // 设置附件上传大小
        $upload->allowExts = array(
            'pdf',
            'jpg',
            'gif',
            'png',
            'jpeg',
            'xlsx',
            'xls',
            'txt',
             'log',
        ); // 设置附件上传类型
        $upload->savePath = './Public/Uploads/'; // 设置附件上传目录
        if (!$upload->upload()) { // 上传错误提示错误信息
            $this->error($upload->getErrorMsg());
        } else { // 上传成功 获取上传文件信息
            $info = $upload->getUploadFileInfo();
        }

        return $info;
    }

    public  function TO($name,$value='')
    {
            $this->assign($name,$value);
    }

    /**
     *     用Ajax方式检测对应的tb_name中$field字段是否存在$val
     * 子类中需要保证tb_name和$field正确,否则将出现错误结果。
     * 返回值格式{"status":1}： x --> -1错误　0不存在　1存在
     */
    public function  AjaxCk($field,$val)//用ajax方式检测数据表中field字段中是否存在值为val的行
    {
            $tb = M("PModel:$this->tb_name");
            $json["status"] = 1;
            $json["field"] = $field;
            $json["val"]=$val;
            if(empty($this)|| !empty($tb->getDbError())||empty($val)){
                $json["status"]=-1;//模型实例化失败，多半是表名没有设置或者为空
                $this->ajaxReturn($json,"json");
                return;
            }
            $map[$field]  = array('eq',$val);//因为Thinkphp会过滤不存在的字段，所以必须在子类中保证字段名正确，否则将总返回所有航
            if(empty($tb->where($map)->select())){
                $json["status"]=0;//不存在
            }else{
                $json["status"]=1;//存在
            }
            $this->ajaxReturn($json,"json");
    }

    public function Get_uniq_json($rawjson)
    {
        $arr = json_decode(htmlspecialchars_decode($rawjson));
        return json_encode(array_unique($arr),JSON_UNESCAPED_UNICODE);
    }
    function TransArr2ToArr1($Arr_IN,$Key) //将两维度的数组转换成1维度的数组
    {
        $ret = array();
        foreach ($Arr_IN as $v){
            if(isset($v[$Key])){
                $ret[] = $v[$Key];
            }
        }
        return $ret;
    }

    function TransArr2ToKV($Arr_IN,$Key,$Val) //将两维度的数组 K->V
    {
        $ret = array();
        foreach ($Arr_IN as $v){
            if(isset($v[$Key])){
                $ret[$v[$Key]] = $v[$Val];
            }
        }
        return $ret;
    }

    function  CheckBrowser()//检查浏览器是否是IE
    {
        $agent = $_SERVER['HTTP_USER_AGENT']; //获取客户端信息
        if(!empty(strpos($agent,"MSIE"))){
            $this->redirect("BrowserWarning/index");
        }
    }

    function AddUserLog($log){
        $tb_UserLog = M("PModel:UserLog");
        $data["AddTime"] = date("Y-m-d H:i:s");
        $data["Name"] = session("Name");
        $data["Log"] = $log;
        $data["IP"] = $this->get_client_ip();
        $tb_UserLog->add($data);
       // var_dump($tb_UserLog->getDbError());
        //var_dump($tb_UserLog->getLastsql());
    }

    function get_client_ip($type = 0) {
        $type       =  $type ? 1 : 0;
        static $ip  =   NULL;
        if ($ip !== NULL) return $ip[$type];
        if($_SERVER['HTTP_X_REAL_IP']){//nginx 代理模式下，获取客户端真实IP
            $ip=$_SERVER['HTTP_X_REAL_IP'];
        }elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {//客户端的ip
            $ip     =   $_SERVER['HTTP_CLIENT_IP'];
        }elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {//浏览当前页面的用户计算机的网关
            $arr    =   explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            $pos    =   array_search('unknown',$arr);
            if(false !== $pos) unset($arr[$pos]);
            $ip     =   trim($arr[0]);
        }elseif (isset($_SERVER['REMOTE_ADDR'])) {
            $ip     =   $_SERVER['REMOTE_ADDR'];//浏览当前页面的用户计算机的ip地址
        }else{
            $ip=$_SERVER['REMOTE_ADDR'];
        }
        // IP地址合法验证
        $long = sprintf("%u",ip2long($ip));
        $ip   = $long ? array($ip, $long) : array('0.0.0.0', 0);
        return $ip[$type];
    }
}