<?php 
 
require_once __DIR__ . './../model/database.php';

class userCntrl {
          
         public function insertRecord ($data) { 
                  $result = new Database();
                  $newdata = array(
                           'fisrtname' => $data['name'],
                           'lastname' => $data['name'],
                           'email' => $data['email'],
                           'password' => $data['pswd'],
                           'contact' => $data['contact'],
                           'status' => 1
                  );  
                  $result->insertRecord($newdata);
         }
}