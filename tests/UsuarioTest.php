<?php
namespace tests;

require_once('../vendor/autoload.php');
require_once('../models/Usuario.php');

use PHPUnit\Framework\TestCase;
use models\Usuario;

class UsuarioTest extends TestCase{
    /** @teste */
    public function testLogar(){
        $usuario = new Usuario();
        $this->assertEquals(
            TRUE,
            $usuario->logar('Rocha', '123')
        );
     
        unset($usuario);
    }
     /** @teste */
    public function testIncluirUsuario(){
        $usuario = new Usuario();
        $this->assertEquals(
            TRUE,
            $usuario->incluirUsuario('raul','raul@gmail.com','raul','raul')
        );
        unset($usuario);
    }
}
?>