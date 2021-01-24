<?php
$link = mysqli_connect("151.106.96.51", "u459531496_qcollection", "Q.collection007", "u459531496_qcollectionpk");

//For PDO Format 
class connect extends PDO{
    public function __construct(){
        parent::__construct("mysql:host=151.106.96.51;dbname=u459531496_qcollectionpk", "u459531496_qcollection", "Q.collection007",
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }
}

?>