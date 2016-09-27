<?php  
         require_once './controller/userCntrl.php';
         $action = $_POST['action']; 
                  
         switch ($action) {
                  case 'insert':
                           $userCntrlObj = new userCntrl();
                           $result = $userCntrlObj->insertRecord($_POST);
                  break;

                  default:
                      header('Location: http://localhost/MVC/view/insert.php');
                  break;
        }
?>