<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/9
 * Time: 17:05
 */
namespace app\admin\model;

use think\Model;

class Admin extends Model{
	const STATUS_N = 0;
	const STATUS_Y = 1;
	
	public static $_status = [
		self::STATUS_N => '禁用',
		self::STATUS_Y => '正常'
	];
}