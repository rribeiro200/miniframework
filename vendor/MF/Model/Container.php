<?php
    namespace MF\Model;

    use App\Connection;

    /**
     * TEMOS UM CONTAINER, UMA CAMADA A MAIS QUE NOS PERMITE FAZER COM QUE O CONTROLLER
     * TRABALHE DE FORMA MAIS PRÁTICA COM A CAMADA 'MODEL'
     * A QUALQUER MOMENTO, EM QUALQUER AÇÃO DOS NOSSOS CONTROLADORES NÓS PODEMOS 
     * SIMPLESMENTE USAR O MÉTODO GETMODEL(estático da classe container)
     * PARA REFERENCIAR QUAL É O 'MODELO' QUE NÓS QUEREMOS RETORNAR JÁ INSTANCIADO
     * E COM A CONEXÃO COM O BANCO DE DADOS ESTABELECIDA
     */
    class Container {
        public static function getModel($model) {
            //instanciando o modelo
            $class = "\\App\\Models\\".ucfirst($model);//instancia do modelo desejado
            $conn = Connection::getDb();//conexão com o banco de dados

            /*
                Temos como retorno o MODELO instanciado com a CONEXÃO do banco de dados, encaminhada
                por parâmetro.
            */
            return new $class($conn);//instancia da classe
        }
    }
?>