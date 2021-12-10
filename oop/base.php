<?php
// 專門處理db

class DB{
    protected $table='';
    protected $dsn="mysql:host=localhost;charset=utf8;dbname=students";
    protected $pdo;

    public function __construct($table){
        $this->pdo=new PDO($this->dsn,'root','');
        $this->table=$table;
    }


    public function all(){
        $rows=$this->pdo->query("SELECT * FROM $this->table")->fetchAll(PDO::FETCH_ASSOC);

        return $rows;
    }
}

$db=new DB('students');
echo "<pre>";
print_r($db->all());
echo "</pre>";
?>