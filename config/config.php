<?php
define("ROOT_PATH", __DIR__ . "/../");

define("DATABASE_FILE", ROOT_PATH . 'database.json');

 
require_once ROOT_PATH . "/Controller/api/BaseControler.php";
 
require_once ROOT_PATH . "/Model/UserModel.php";
?>