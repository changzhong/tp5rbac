<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/9
 * Time: 17:12
 * 管理员控制器
 */
namespace app\admin\controller;

class Admin extends Base{
	/**
	 * 管理员列表
	 */
	public function index(){
		$where = '1 = 1';
		$model = model('Admin');
		$username = input('get.username');
		$username && $where['username'] = ['LIKE', '%'.$username.'%'];
		
		$true_name = input('get.true_name');
		$true_name && $where['true_name'] = ['LIKE', '%'.$true_name.'%'];
		
		$status = input('get.status');
		strlen($status) > 0 ? $where['status'] = $status : '';
		
		$datas = $model->where($where)->order(['id' => 'DESC'])->paginate(20);
		return $this->fetch('index',[
			'title' => '管理员列表',
			'datas'	 => $datas,
			'status' => $model::$_status,
		]);
		
	}
	
	
}