<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/9
 * Time: 16:57
 */
namespace app\admin\validate;

use think\Validate;

class Admin extends Validate{
	protected $rule = [
		['username', 'require'],
		['password', 'require'],
	];
	
	protected $message = [
		'username.require' => '用户名不能为空',
		'password.require' => '密码不能为空',
	];
}