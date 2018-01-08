<?php 
namespace app\admin\controller;
use think\Controller;
use think\Request;
class Base extends Controller{

	public function _initialize(){
		if(!session('userid') || !session('name')){
           $this->error('您尚未登录系统',url('index/login')); 
        }

        // 检测权限
        $auth=new Auth();
        $request = Request::instance();
        $con = $request->controller();	// 当前控制器名
        $action = $request->action();	// 当前方法名
        $name = $con.'/'.$action;
        $notCheck = array('Index/index','Admin/lst','Admin/logout');	
        if(session('name') != 'admin'){	// 若是总管理员不必检查
        	if(!in_array($name,$notCheck)){	// 判断若不再此数组的路由也不检查
        		if(!$auth->check($name,session('userid'))){
        			
        			$this->error('权限不足',url('Admin/lst'));
        		}
        	}
        }

	}

}