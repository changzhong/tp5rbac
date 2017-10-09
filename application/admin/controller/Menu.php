<?php 
namespace app\admin\controller;

use think\Controller;
use think\Db;

/**
 * 后台菜单控制器
 */
class Menu extends Controller{

	/**
	 * 菜单列表
	 */
	public function index()
	{
		$list = Db::name('menu')->paginate(20);
		$this->assign([
			'title' => '菜单列表',
			'list'	=> $list,
		]);
		return $this->fetch();
	}
	
	
	/**
	 * 添加菜单
	 */
	public function create(){
		if(request()->isPost()){
			$Menu = D('Menu');
			$data = $Menu->create();
			if($data){
				$id = $Menu->add();
				if($id){
					// S('DB_CONFIG_DATA',null);
					//记录行为
					action_log('update_menu', 'Menu', $id, UID);
					$this->success('新增成功', Cookie('__forward__'));
				} else {
					$this->error('新增失败');
				}
			} else {
				$this->error($Menu->getError());
			}
		} else {
			$menus = Db::name('Menu')->select();
			$this->assign([
				'title' => '新增后台菜单',
				'info' => input('get.pid'),
				'menus' => $menus,
			]);
			return $this->fetch('edit');
		}
	}
}