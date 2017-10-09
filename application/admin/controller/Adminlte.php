<?php 
namespace app\admin\controller;

use think\Controller;

class Adminlte extends Controller
{
	public function uiButtons()
	{
		return $this->fetch('adminlte/UI/buttons');
	}

	public function uiGeneral()
	{
		return $this->fetch('adminlte/UI/general');
	}

	public function uiIcons()
	{
		return $this->fetch('adminlte/UI/icons');
	}

	public function uiModals()
	{
		return $this->fetch('adminlte/UI/modals');
	}

	public function uiSliders()
	{
		return $this->fetch('adminlte/UI/sliders');
	}

	public function uiTimeline()
	{
		return $this->fetch('adminlte/UI/timeline');
	}


}