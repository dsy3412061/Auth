<?php 
namespace app\admin\model;
use think\Model;
class AuthRule extends Model
{
	public function getRules()
	{
		$data = $this->where('status',1)->select();
		$info = $this->sort($data);
	
		return $info;
	}

	public function sort($arr,$pid=0)
	{
		static $data = array();		// 静态 使其不断插入数据
		foreach($arr as $k=>$v){
			if($v['pid'] == $pid){
				$v['dataid'] = $this->_getParentid($arr,$v['id'],true);
				$data[] = $v;
				$this->sort($arr,$v['id']);
			}
		}
		return $data;
	}

	public function doDel($id)
	{
		$rule = $this::where('id',$id)->delete();		// 先删除本条数据
		if($rule){	
			$res = $this->getChildren($id);				
			if($res){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	/**
	 * 获取子菜单
	 */
	public function getChildren($id)
	{
		$res = $this::where('pid',$id)->select();
		if($res){
			$result = $this::destroy(['pid' => $id]);
			if($result){
				return true;
			}else{
				return false;
			}
		}
		return true;
	}
	/**
	 * $data array
	 * $id 菜单id
	 */

	public function _getParentid($data,$id,$level = false)
	{
		static $arr = array();
		if($level){
			$arr = array();
		}
		foreach($data as $key=>$value){
			if($value['id'] == $id){
				$arr[] = $value['id'];
				$this->_getParentid($data,$value['pid'],false);
			}
		}
		asort($arr);
        $arrStr=implode('-', $arr);
		return $arrStr;
	}

}