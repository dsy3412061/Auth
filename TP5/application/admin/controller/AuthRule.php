<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\AuthRule as RuleModel;
class AuthRule extends Base
{
    /**
     * 提交值 键名为id 键值 为排序值 
     */
    public function lst()
    {
        $Rules = new RuleModel();
        if($this->request->isPost()){
            $data = input('post.');
            foreach($data as $k=>$v){
                $Rules->update(['id'=>$k,'sort'=>$v]);
            }
            $this->success('更新成功',url('lst'));
            return;
        }      
        $info = $Rules->getRules();
        $this->assign('info',$info);
    	return view();
    }

    public function edit($id)
    {
        if($this->request->isPost()){
            $data = input('post.');
            $plevel = db('AuthRule')->field('level')->where('id',$data['pid'])->find();
            if($plevel){
                $data['level'] = $plevel['level'] + 1;
            }else{
                $data['level'] = 0;
            }
            $res = db('AuthRule')->update($data);
            if($res){
                $this->success('修改成功',url('lst'));
            }else{
                $this->error('修改失败');
            }
            return;
        }
        $AdminRule = db('AuthRule')->select();
        $admin = db('AuthRule')->where('id',$id)->find();      // 查询当前pid
        // $admin = db('AuthRule')->where('id',$admins['pid'])->find();
        $this->assign('AdminRule',$AdminRule);
        $this->assign('admin',$admin);
    	return view();

    }

    public function add()
    {
        if(request()->isPost()){
            $data = input('post.');          
            $plevel = db('AuthRule')->field('level')->where('id',$data['pid'])->find();
            if($plevel){
               $data['level'] = $plevel['level'] + 1;                  
            }else{
                $data['level'] = 0;
            }
                       
            $res = db('AuthRule')->insert($data);
            if($res){
                $this->success('添加权限成功',url('lst'));
            }else{
                $this->error('添加权限失败');
            }
            return;
        }
        $Rule = new RuleModel();
        $info = $Rule->getRules();
        $this->assign('AdminRule',$info);
    	return view();
    }

    public function del($id)
    {
        $Rules = new RuleModel();
        $res = $Rules->doDel($id);
        if($res){
            $this->success('删除成功','lst');
        }else{
            $this->error('删除失败');
        }
    }



}
