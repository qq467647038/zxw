<?php
//��Ŀ�����ļ�
return [
    // Ĭ��ģ����
    'default_module'        => 'index',
    // Ĭ�Ͽ�������
    'default_controller'    => 'Login',
    // Ĭ�ϲ�����
    'default_action'        => 'index',
    //�������ò���
	
    // Ӧ�õ���ģʽ
    'app_debug'              => true,
	
	 // ��֤������
	'captcha'  => [
        // ��֤���ַ�����
        'codeSet'  => '2345678abcdefhijkmnpqrstuvwxyzABCDEFGHJKLMNPQRTUVWXY', 
        // ��֤�������С(px)
        'fontSize' => 18, 
        // �Ƿ񻭻�������
        'useCurve' => true, 
         // ��֤��ͼƬ�߶�
        'imageH'   => 40,
        // ��֤��ͼƬ���
        'imageW'   => 120, 
        // ��֤��λ��
        'length'   => 4, 
        // ��֤�ɹ����Ƿ�����        
        'reset'    => true
	],
	
	// +----------------------------------------------------------------------
    // | Cookie����
    // +----------------------------------------------------------------------
    'cookie'                 => [
		// cookie ����
        'name'    => 'usecookie',
		'expire'    => 3600,
    ],
	
    // +----------------------------------------------------------------------
    // | �Ự����
    // +----------------------------------------------------------------------
    'session'                => [
		// session ����
        'name'    => 'usesession',
		// cookie ����ʱ��
        // �Ƿ��Զ����� SESSION
        'auto_start'     => true,
    ],
	
	'template'               => [
		// ģ���������� ֧�� php think ֧����չ
		'type'         => 'Think',
		// ģ��·��
		'view_path'    => '',
		// ģ���׺
		'view_suffix'  => 'html',
		// ģ���ļ����ָ���
		'view_depr'    => DS,
		// ģ��������ͨ��ǩ��ʼ���
		'tpl_begin'    => '{',
		// ģ��������ͨ��ǩ�������
		'tpl_end'      => '}',
		// ��ǩ���ǩ��ʼ���
		'taglib_begin' => '{',
		// ��ǩ���ǩ�������
		'taglib_end'   => '}',
	],
	
];