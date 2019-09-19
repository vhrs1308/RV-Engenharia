<?php
namespace models;

class Usuario {
    public $id_usuario;
    public $login;
    public $nome;
    public $email;
    public $celular;
    public $logado;

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
            $this->login = null;
            $this->nome = null;
            $this->email = null;
            $this->celular = null;
            $this->logado = false;
        }else{
            while($linha = $resultado->fetch_assoc()){
                $this->login = $linha['login'];
                $this->nome = $linha['nome'];
                $this->email = $linha['email'];
                $this->celular = $linha['celular'];
                $this->logado = true;
            }
        }
    }

    private function conectarBanco(){
        $conn = new \mysqli('localhost', 'host', '', 'mydb');
        return $conn;
    }

    }
?>