<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Admin;
class Index extends Controller
{
  
    public function login()
    {
    	if(request()->isPost()){
    		$data = input('post.');
    		$code = $this->check($data['code']);
    		if($code){
    			$info['password'] = md5($data['password']);
    			$info['username'] = $data['username'];
    			$res = db('admin')->where($info)->find();
                if ($res['status'] == 0) {
                    $this->error('用户已被禁用! ');
                }
    			if ($res) {
    				session('userid',$res['id']);
    				session('name',$res['username']);
    				$this->success('登录成功！',url('Admin/index'));
    			}else{
    				$this->error('登录失败! ');
    			}
    		}
    		return;
    	}
    	return view();
    }

    /**
     * 检测验证码
     */
    public function check($code)
    {
    	if(!captcha_check($code)){
			$this->error('验证码错误');
		}else{
			return true;
		}
    }

    public function logout()
    {
    	session('userid',null);
    	session('name',null);
    	$this->success('退出成功! ',url('index/login'));
    }
}
