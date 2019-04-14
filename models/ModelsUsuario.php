<?php

class ModelsUsuario{
    
    private $tabela;
    private $dados;
    private $msg;
    
    public function ExeCreate($tabela, $dados){
        $this->tabela = $tabela;
        $this->dados = $dados;
        
        $this->msg = "O nome do Cliente é {$this->dados['nome']} a tabela é {$this->tabela}"
        . "e o id do cliente é {$this->dados['id']}";
    }
    
    public function getMsg(){
        return $this->msg;
    }
}
