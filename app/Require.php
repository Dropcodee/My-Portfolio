<?php 

// LOAD CONFIG
require_once 'config/config.php';

// AUTO LOAD CORE LIBRARIES FROM THE LIB FOLDER IT GETS THE FILES BY THEIR CLASS NAME
spl_autoload_register(function($className){
    require_once('lib/' . $className . '.php');
});