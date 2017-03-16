<?php
//椤圭洰閰嶇疆鏂囦欢
return [
    // 榛樿妯″潡鍚?
    'default_module'        => 'index',
    // 榛樿鎺у埗鍣ㄥ悕
    'default_controller'    => 'Login',
    // 榛樿鎿嶄綔鍚?
    'default_action'        => 'index',
    //鏇村閰嶇疆鍙傛暟
	
    // 搴旂敤璋冭瘯妯″紡
    'app_debug'              => true,
	
	 // 楠岃瘉鐮侀厤缃?
	'captcha'  => [
        // 楠岃瘉鐮佸瓧绗﹂泦鍚?
        'codeSet'  => '2345678abcdefhijkmnpqrstuvwxyzABCDEFGHJKLMNPQRTUVWXY', 
        // 楠岃瘉鐮佸瓧浣撳ぇ灏?px)
        'fontSize' => 18, 
        // 鏄惁鐢绘贩娣嗘洸绾?
        'useCurve' => true, 
         // 楠岃瘉鐮佸浘鐗囬珮搴?
        'imageH'   => 40,
        // 楠岃瘉鐮佸浘鐗囧搴?
        'imageW'   => 120, 
        // 楠岃瘉鐮佷綅鏁?
        'length'   => 4, 
        // 楠岃瘉鎴愬姛鍚庢槸鍚﹂噸缃?       
        'reset'    => true
	],
	
	// +----------------------------------------------------------------------
    // | Cookie璁剧疆
    // +----------------------------------------------------------------------
    'cookie'                 => [
		// cookie 鍚嶇О
        'name'    => 'usecookie',
		'expire'    => 3600,
    ],
	
    // +----------------------------------------------------------------------
    // | 浼氳瘽璁剧疆
    // +----------------------------------------------------------------------
    'session'                => [
		// session 鍚嶇О
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