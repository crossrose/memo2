<?php

    class DatabaseDriver {
        private $db_name;
        private $db_user_name;
        private $db_user_passwd;
        private $db_port;
        private $db_charset;
        private $db_type = 'mysql';
        private $db_host;
        private $dsn;
        private $pdo;

        public function __construct($database_host,$databse_name,$database_charset="utf8",$database_user,$database_passwd,$database_port = "3389") {
            $this->db_name = $database_name;
            $this->db_host = $database_host;
            $this->db_user_name = $database_user;
            $this->db_user_passwd = $database_passwd;
            $this->db_port = $database_port;
            $this->db_charset = $database_charset;
            $this->dsn = "$this->db_type:host=$this->db_host;dbname=$this->db_name;charset=$this->db_charset";
        }

        public function Dbopen(){
            $return_value = "";
            try{
                $this->pdo = new PDO($this->dsn,$this->db_user_name,$this->db_user_passwd);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
                $return_value = "성공입니다.";
            }catch(PDOException $exception) {
                die('접속오류 :'.$exception->getMessage());
                $return_value= "실패입니다.";
            }

            return $return_value;
        }

        public function setQuery($query) {
            // try{
            //     if ($this->pdo != null && $query !="") {
            //         $stmh = $this->pdo->prepare($query);
            //         return $stmh;
            //     }
            // }catch(PDOException $exception) {
            //     $this->pdo->rollBack();
            // }
        }

        public function DBclose() {
            if ($this->pdo != null) {
                $this->pdo->close();
            }
        }


    }

 ?>
