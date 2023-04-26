<?php
    namespace App;
    
    class Connection {
        
        public static function getDb(){
            try{ 
                $conn = new \PDO(
                    "mysql:host=localhost;dbname=restaurante_polla;charset=utf8",
                    "root",
                    ""
                );

                return $conn; //retornar a conexão para quem realizar a chamada desse método
            } catch(\PDOException $e) {
                //tratar o erro de alguma forma...
                echo $e;
            }
        }
    }
