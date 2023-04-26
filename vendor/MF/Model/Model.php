<?php
    namespace MF\Model;

    /**
     * DESTA FORMA, QUALQUER RECURSO RELATIVO A CAMADA DE 'MODEL' DA NOSSA APLICAÇÃO
     * QUE FOR COMUM PARA TODOS OS MODELOS DE DADOS, PODEM SER IMPLEMENTADOS NA 
     * CLASSE ABSTRATA, DE MODO QUE ESSES RECURSOS SERÃO HERDADOS NOS SEUS RESPECTIVOS 'MODELOS/FILHOS'
     * E PODERÃO SER UTILIZADOS NORMALMENTE, A PARTIR DA INSTANCIA DO MODELO DESEJADO
     */
    abstract class Model {
        protected $db; //recebe a conexão com o banco

        public function __construct(\PDO $db) {
            $this->db = $db;
        }
    }
?>