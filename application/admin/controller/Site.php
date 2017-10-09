<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/26
 * Time: 14:28
 */
namespace app\admin\controller;

use think\Controller;

class Site extends Controller{
	
	/**
	 * 登录
	 */
	public function login(){
		if(input()){
			$username = input('username');
			$password = input('password');
			$validate = validate('Admin');
			if(!$validate->batch(false)->check(input('post.'))){
				$this->error($validate->getError());
			}
			
			$model = model('Admin');
			$data = $model->where(['username' => $username])->find();
			if($data && $data['password'] == $password){
				session('user_id', $data['id']);
				$this->success('登录成功', url('Index/index'));
			} else {
				$this->error('用户名或密码错误');
			}
		}
		return $this->fetch();
	}
}