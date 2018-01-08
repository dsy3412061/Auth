<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Admin as AdminModel;

class Admin extends Base
{

    public function index()
    {
        return view();
    }
    /**
     *  此控制器使用model方法 进行  增删改查
     */
    public function lst()
    {
        $admin = new AdminModel();
        $auth = new Auth();
        $info = $admin->getLst();
        foreach ($info as $key => &$value) {
            $name = $auth->getGroups($value['id']);
            $value['title'] = $name[0]['title'];
        }
        $this->assign('info',$info);
    	return view();
    }

    public function edit()
    {
        $id = input('id');
        if(request()->isPost()){
            $data = input('post.');
            $admin = new AdminModel();
            $keys = array_keys($data);
            if(!in_array('status', $keys)){
                $data['status'] = 0;
            }
            $res = $admin->doEdit($data);
            if($res){
                $this->success('修改成功',url('lst'));
            }else{
                $this->error('修改失败');
            }
        }
        $admin = db('admin')->find($id);
        $group_id = db('auth_group_access')->where('uid',$id)->find();
        $auth_group = db('auth_group')->select();
        $this->assign([
                'admin'=>$admin,
                'auth_group'=>$auth_group,
                'group_id' => $group_id
            ]);
    	return view();

    }

    public function add()
    {
        if(request()->isPost()){
            $data = input('post.');
            if($data['password'] !== $data['repassword']){
                $this->error('俩次密码不相同');
            }
            if(empty($data['group_id'])){
                $this->error('请选择分组');
            }
            if(db('admin')->where('username',$data['username'])->count() > 0){
                $this->error('用户已存在');
            }
            $keys = array_keys($data);
            if(!in_array('status', $keys)){
                $data['status'] = 0;
            }
            $info['username'] = $data['username'];
            $info['password'] = $data['password'];
            $info['status'] = $data['status'];
            $info['group_id'] = $data['group_id'];
            $AdminModel = new AdminModel();
            $res = $AdminModel->addUser($info);
            if($res){
                $this->success('添加成功',url('lst'),2);
            }else{
                $this->error('添加失败');
            }
            return;
        }     
        $admin = db('auth_group')->select();
        $this->assign('admin_user',$admin);
    	return view();
    }

    public function del()
    {
        $admin = new AdminModel();
        $id = input('id');
        if(!$id){
            $this->error('参数错误');
        }
        $res = $admin->delete($id);
        if ($res) {
            $this->success('删除成功',url('lst'));
        }else{
            $this->error('删除失败');
        }
    }

}
