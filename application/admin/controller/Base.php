<?php 
/**
 * 后台基础控制器
 */

namespace app\admin\controller;

use think\Controller;

class Base extends Controller{
	public $title = '首页';
	
	public function _initialize()
	{
		define('UID',session('user_id'));
		if(!UID){
			$this->redirect('site/login');
		}
	}
}