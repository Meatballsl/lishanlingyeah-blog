<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->assign('choose','index');
        $this->display();
    }

    public function classify(){
        $this->assign('choose','classify');
        $this->display();
    }

    public function auther(){
        $this->assign('choose','auther');
        $this->display();
    }
    public function blog(){
        $this->assign('choose','blog');
        $this->display();
    }

    public function article(){
        $this->assign('choose','article');
        $this->display();
    }

}