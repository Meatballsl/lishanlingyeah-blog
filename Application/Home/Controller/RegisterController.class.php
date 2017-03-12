<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller{




    public function email_api(){
        $re = send_email($_POST['email'], $_POST['subject'], $_POST['content']);
        var_dump($re);
        die();
    }

    //写入数据库：username（生成一个序列号）、password、email、token（激活码：）
    //发邮件
    //回来点确认，更改数据库里的
    public function index(){
        $select = M('category')->select();
        var_dump($select);
    }
}
