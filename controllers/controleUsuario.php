<?php

class controleUsuario {
    
    const Entity = 'cadastros';

    public function index(){
        echo "Controller Usuario - Método Listar usuario<br>";
        include_once 'views/usuario/listarUsuario.php';
    }
    
    public function cadastrar(){
        echo "Controller Usuario - Método Cadastrar usuario<br>";
        include_once 'views/usuario/cadastrarUsuario.php';
        
        $dados = array(
            'id' => 2,
            'nome' => 'Philipe'
        );
        
        $cadUsuario = new ModelsUsuario();
        $cadUsuario->ExeCreate(self::Entity, $dados);
        echo $cadUsuario->getMsg();
    }
    
}
