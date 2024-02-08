<?php

class QueryBuilder{
    protected $pdo;
    public function __construct($pdo){
        $this->pdo=$pdo;
    }

    public function select($table){
        $statement=$this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($table,$parameters){
        $sql=sprintf(
            'insert into %s(%s) values(%s)',
            $table,
            implode(', ',array_keys($parameters)),
            ':'.implode(', :',array_keys($parameters))
        );

        // var_dump($sql);

        try{

            $statement=$this->pdo->prepare($sql);
            $statement->execute($parameters);            

        } catch(PDOException $e){

            die('Somthing is wrong');

        }
    }
}

