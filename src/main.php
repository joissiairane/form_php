<?php

include_once(__DIR__."/../vendor/autoload.php");

use App\model\Usuario;

if(!isset($_SESSION['uLogado'])){
    if( $_POST['nome']== 'admin' && $_POST['pass'] == 'admin'){
        $uAdminPadrao = new Usuario();
        $uAdminPadrao->setName('admin');
        $uAdminPadrao->setPass('admin');
        $_SESSION['uLogado'] = $uAdminPadrao->getName();
        echo 'login realizado com sucesso';
    }else{
        echo "Falha no Login";

    }//if( $_POST['nome] == 'admin' && $_POST['pass'] == 'admin')
}//if ($_SERVER['REQUEST_METHOD'] == 'POST') {