<?php
       /* Headers */
       header("Content-Type: application/json; charset=UTF-8");
       $numbers_values = json_decode(file_get_contents('php://input'), true);
       /* Method */
       $method = $_SERVER['REQUEST_METHOD'];
       /* Functions */
       function autoLoad() {
           $path = dirname(__DIR__);
           require $path . '/config/functions.php';
       }
       spl_autoload_register('autoLoad');
   
       echo json_encode($numbers_values, JSON_PRETTY_PRINT);
   
       switch($method) {
           case 'POST':
               
               break;
           default:
               echo "ERROR";
       }
?>