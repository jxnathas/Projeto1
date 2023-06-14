<?php

    session_start();
    date_default_timezone_set('America/Sao_Paulo');
    $autoload = function($class){
        if($class == 'Email'){
            include('classes/phpmailer/PHPMailerAutoload.php');
        }
      include('classes/'.$class.'.php');  
    };

    spl_autoload_register($autoload);


    define('INCLUDE_PATH','http://localhost/Projeto1/');
    define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

    define('BASE_DIR_PAINEL',__DIR__.'/painel');
    // DATABASE SH*T
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','projeto1');
    
    //Constantes para o painel de controle
    define('NOME_EMPRESA','Hackerman Society');

    function pegaCargo($cargo){
      $arr = [
        '0' => 'Normal',
        '1' => 'Sub Administrador',
        '2' => 'Administrador'
      ];
        return $arr[$cargo];
    }
?>
