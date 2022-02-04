<?php
    include 'config.php';
 
    class connDB{
        private $conexion;
        function __construct()
        {
            $this -> dbhost = _HOST_;
            $this -> dbuser = _USER_;
            $this -> dbpass = _PASS_;
            $this -> dbname = _NAMEDB_;
        }
        function openConn()
        {
            try
            {
                $this -> conexion = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname", $this->dbuser, $this->dbpass);
                //echo "Connection sucessfully";
            }
            catch(PDOException $e)
            {
                die($e -> getMessage());
            }
        }
        public function metQuery($que)
        {
             return $this-> conexion-> query($que)-> fetchAll(PDO::FETCH_ASSOC);
        }

        public function insertQuery($sql)
        {
            return $this-> conexion-> prepare($sql);
        }
    }
?>