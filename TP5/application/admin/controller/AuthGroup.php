<?php 
namespace app\admin\controller;
use think\Controller;
use app\admin\model\AuthRule;
class AuthGroup extends Base
{
	/**
	 * 本类 单独使用db()助手函数进行增删改查
	 */
	public function lst()
	{
		$db = db('auth_group');
		$info = $db->select();
		$this->assign('info',$info);
		return view();
	}
	public function add()
	{
		if(request()->isPost()){
			$data = input('post.');
			if ($data['rules']) {
				$data['rules'] = implode(',',$data['rules']);
			}
			if(empty($data['status'])){
				$data['status'] = 0;
			}
			$res = db('auth_group')->insert($data);
			if($res){
				$this->success('添加用户组成功！',url('lst'),1);
			}else{
				$this->error('添加用户组失败！');
			}
			return;
		}
		$rules = new AuthRule();
		$info = $rules->getRules();
		$this->assign('rule',$info);
		return view();
	}

	public function del()
	{
		$id = input('id');
		if(!$id){
			$this->error('参数错误');
		}
		$db = db('auth_group');
		$res = $db->delete($id);
		if($res){
			$this->success('删除成功',url('lst'));
		}else{
			$this->error('删除失败');
		}
	}

	public function edit()
	{
		$db = db('auth_group');
		if(request()->isPost()){
			$data = input('post.');		//  获取 编辑信息

			$_data = array_keys($data);
			if(!in_array('status',$_data)){
				$data['status'] = 0;
			}
			if($data['rules']){
				$data['rules'] = implode(',',$data['rules']);
			}
			$res = $db->update($data);
			if($res){
				$this->success('修改成功',url('lst'));
			}else{
				$this->error('修改失败');
			}
			return;
		}
		$id = input('id');
		$info = $db->where(array('id'=>$id))->find();
		$info['rules'] = explode(',',$info['rules']);
		$rules = new AuthRule();
		$infos = $rules->getRules();
		$this->assign('rule',$infos);
		$this->assign('info',$info);
		return view();
	}

}