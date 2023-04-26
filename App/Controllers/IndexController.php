<?php

    namespace App\Controllers;

    /* usando a classe Action, que está dentro do diretório MF, 
    e no script(action.php) dentro da pasta/diretório Controller */

    //os recursos do miniframework
    use MF\Controller\Action;
    use MF\Model\Container;

    //os models

    class IndexController extends Action {

        //métodos do controller representam as Actions da especificação da arquitetura MVC
        public function index() {
            
        }
    }

?>