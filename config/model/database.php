<?php 
class Database extends mysqli{
    private $DB_HOST = 'localhost/127.0.0.1';
    private $DB_USER = 'root';
    private $DB_PASS = '';
    private $DB_NAME = '';

    public function __construct(){
        parent::__construct($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME);
        if($this->connect_errno){
            die('Error en la conexión '. mysqli_connect_errno());
        }
    }
}
?>