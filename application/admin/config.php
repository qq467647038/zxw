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
	
];