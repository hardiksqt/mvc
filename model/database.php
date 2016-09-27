<?php

require_once __DIR__ . './../configure.php';

class Database {
         
         public $connection;
          
         function __construct() {
                  $this->connection = mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME) or die("connection error"); 
         }
         
         public function insertRecord($data) {   
                  $query = "INSERT INTO register(`fisrtname`,`lastname`,`email`,`password`,`contact`,`status`) VALUES ( 'hardikp','hardoo@gm,ail.com','dfsdf','dsfdsf','122','active')";    
                  $results = mysqli_query($this->connection, $query) or die( $conn->error);
                  print_r($results);
         }
}