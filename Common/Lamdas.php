<?php
    define("DEBUG_LOG_OUT",true);//���O�o�͂�ON/OFF
    define("S_TOKEN_TEST",false);//ServerToken�擾�e�X�g�����s����ꍇ��true
    define("RCV_TEST",true);//��M�e�X�g����ꍇ��true
    define("RCV_TEST_DATA",false);//���[�J���Ŏ�M�e�X�g����ꍇ��true�ɐݒ�.Heroku�Ńe�X�g����ꍇ��false
    
    $RCV_DATA = Array(//���[�J���Ŏ�M�e�X�g����ꍇ�͂�����ύX�i��M�f�[�^��ݒ�ł��܂��j
        "type" => "message",
        "source" => Array(
            "accountId" => "admin@example.com",
            "roomId" => "12345",
            
        ),
        "createdTime" => "1470902041851",
        "content" => Array(
            "type" => "text",
            "text" => "hellow",
            
        )
    );
    
    
    
    
    
	$DEF = function($defName){return $defName;};

	function DEBUG_LOG(string $file, string $func, string $line, string $str,$ary = NULL){
	    if(DEBUG_LOG_OUT){
	        if($ary == NULL){
	            echo $file."::".$func."()::".$line."::".$str."\n";
	        }else{
	            echo $file."::".$func."()::".$line."::".$str."\n";
	           print_r($ary);
	           echo "\n";
	        }
	    }
	}
	
	//PHP��getallheaders()�������Ȃ����p�̊֐�
	if (!function_exists('getallheaders')) {
	    function getallheaders() {
	        $headers = array();
	        DEBUG_LOG(basename(__FILE__),__FUNCTION__,__LINE__,"_SERVER=",$_SERVER);
	        foreach ($_SERVER as $name => $value) {
	            if (substr($name, 0, 5) == 'HTTP_') {
	                $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
	            }
	        }
	        return $headers;
	    }
	}
