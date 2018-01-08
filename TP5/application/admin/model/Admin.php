<?php 
namespace app\admin\model;
use think\Model;
class Admin extends Model
{
	public function addUser($data)
	{
		if(empty($data) || !is_array($data)){
			return false;
		}
		if($data['password']){
			$data['password'] = md5($data['password']);
		}
		$access = array();
		$dataAdmin['username'] = $data['username'];
		$dataAdmin['password'] = $data['password'];
		$dataAdmin['status'] = $data['status'];
 		$res = $this->save($dataAdmin);
		if($res){
			$access['uid'] = $this->id;
			$access['group_id'] = $data['group_id'];
			if(db('auth_group_access')->insert($access)){
				return true;
			}else{
				return false;
			}
			
		}else{
			return false;
		}
		
	}

	/**
	 * 分页操作
	 */
	public function getLst()
	{
		return $this::paginate(10,false,[
        'type'=>'bootstrap',
        'var_page' => 'page',
        ]);
	}
	/**
	 * 删除操作
	 */
	public function delete($id = '')
	{
		if($id !== ''){
			$res = $this::where('id',$id)->delete();
			if($res){
				$result = db('auth_group_access')->where('uid',$id)->delete();
				if($result){
					return true;
				}else{
					return false;
				}
				
			}else{
				return false;
			}
		}
	}
	/**
	 *  修改操作
	 */
	public function doEdit($data)
	{
		if(empty($data) || !is_array($data)){
			return false;
		}
		if(empty($data['password'])){
	        unset($data['password']);
	    }else{
	    	$admin['password'] = md5($data['password']);
	    }

		$admin['username'] = $data['username'];		
		$admin['status'] = $data['status'];
		$admin['time'] = time();
		$res = $this->save($admin,['id'=>$data['id']]);
		
		if($res){
			$access['group_id'] = $data['group_id'];
			$access['time'] = time();
			$result = db('auth_group_access')->where('uid',$data['id'])->update($access);
			if($result){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
		$user->save([
			    'name'  => 'thinkphp',
			    'email' => 'thinkphp@qq.com'
			],['id' => 1]);

	}
}