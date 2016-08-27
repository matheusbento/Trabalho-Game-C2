<?php
include_once"../loginmysql.php";
include_once"database.php";
class mysqlDAO extends database{

    public function __construct(){}
    private function __clone(){}   
    public function __destruct() {
        foreach ($this as $key => $value) {
            unset($this->$key); 
        }
        foreach(array_keys(get_defined_vars()) as $var) {
            unset(${"$var"});
        }
        unset($var);
    }

     

    public function carregar($campos="*",$funcao="", $tabela=""){
        //if(strlen($funcao)>0) $funcao = " ".$funcao;
        $sql = "SELECT ".$campos." FROM ".$tabela." ".$funcao."";
        return $this->selectDB($sql,null,'loginmysql');

    }


    public function inserir($campos,$parametro=null,$tabela=""){
        $numparams="";
        for($i=0; $i<count($parametro); $i++) $numparams.=",?";
        $numparams = substr($numparams,1);
        $sql = "INSERT INTO $tabela ($campos) VALUES ($numparams)";
        $t=$this->insertDB($sql,$parametro);
        return $t;

    }

     

    public function atualizar($campos,$parametro=null,$where=null,$tabela=""){
        $fields_T="";
        for($i=0; $i<count($campos); $i++) $fields_T.=", $campos[$i] = ?";
        $fields_T = substr($fields_T,2);
        $sql = "UPDATE $tabela SET $fields_T";
        if(isset($where)) $sql .= " WHERE $where";
        $t=$this->updateDB($sql,$parametro);
        return $t;
    }

     

    public function delete($where=null,$parametro=null, $tabela = ""){
        $sql = "DELETE FROM $tabela";
        if(isset($where)) $sql .= " WHERE $where";
        $t=$this->deleteDB($sql,$parametro);
        return $t;
    }

}

?>
