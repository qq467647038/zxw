<?php
//项目配置文件
return [
    // 默认模块名
    'default_module'        => 'index',
    // 默认控制器名
    'default_controller'    => 'Login',
    // 默认操作名
    'default_action'        => 'index',
    //更多配置参数
	
    // 应用调试模式
    'app_debug'              => true,
	
	 // 验证码配置
	'captcha'  => [
        // 验证码字符集合
        'codeSet'  => '2345678abcdefhijkmnpqrstuvwxyzABCDEFGHJKLMNPQRTUVWXY', 
        // 验证码字体大小(px)
        'fontSize' => 18, 
        // 是否画混淆曲线
        'useCurve' => true, 
         // 验证码图片高度
        'imageH'   => 40,
        // 验证码图片宽度
        'imageW'   => 120, 
        // 验证码位数
        'length'   => 4, 
        // 验证成功后是否重置        
        'reset'    => true
	],
	
	// +----------------------------------------------------------------------
    // | Cookie设置
    // +----------------------------------------------------------------------
    'cookie'                 => [
		// cookie 名称
        'name'    => 'usecookie',
		'expire'    => 3600,
    ],
	
    // +----------------------------------------------------------------------
    // | 会话设置
    // +----------------------------------------------------------------------
    'session'                => [
		// session 名称
        'name'    => 'usesession',
		// cookie 保存时间
        // 是否自动开启 SESSION
        'auto_start'     => true,
    ],
	
	'template'               => [
		// 模板引擎类型 支持 php think 支持扩展
		'type'         => 'Think',
		// 模板路径
		'view_path'    => '',
		// 模板后缀
		'view_suffix'  => 'html',
		// 模板文件名分隔符
		'view_depr'    => DS,
		// 模板引擎普通标签开始标记
		'tpl_begin'    => '{',
		// 模板引擎普通标签结束标记
		'tpl_end'      => '}',
		// 标签库标签开始标记
		'taglib_begin' => '{',
		// 标签库标签结束标记
		'taglib_end'   => '}',
	],
	
];