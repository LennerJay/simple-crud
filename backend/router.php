<?php 
  require 'backend.php';
    $method = $_POST['method'];
    if(function_exists($method)){
        call_user_func($method);
    }else{
        echo "Function not exist";
    }

    function register(){
        $backend = new Backend();
        echo $backend->register( $_POST['name'], $_POST['age'], $_POST['address'], $_POST['email'], $_POST['password']);
    }



