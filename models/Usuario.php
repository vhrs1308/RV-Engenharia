<?php
namespace models;

class Usuario {
    public $id_usuario;
    public $login;
    public $nome;
    public $email;
    public $celular;

    public function logar($login, $senha){
        $conexaoDB = $this->conectarBanco();
        $sql = $conexaoDB->preparE("select login, nome, email, celular from usuairo
                                    where
                                    login = ?
                                    and
                                    senha = ?");
        $sql->bind_param("ss", $login, $senha);
        $sql->execute();

        $resultado = $sql->get_result();
        if($reultado->num_rows() === 0){
            
        }else{

        }
    }

    private function conectarBanco(){
        $conn = new \mysqli('localhost', 'host', '', 'mydb');
        return $conn;
    }

    }
?>