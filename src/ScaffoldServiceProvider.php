<?php

namespace Jack\Scaffold;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;

class ScaffoldServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/index.js',
    ];
	protected $css = [
		'css/index.css',
	];
    protected $menu = [
        [
            'title' => '代码生成器JACK',
            'uri'   => 'helpers/scaffold_jack',
            'icon'  => '', // 图标可以留空
        ],
    ];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

		//

	}

//	public function settingForm()
//	{
//		return new Setting($this);
//	}
}
