<?php
header('content-type:text/html;charset=utf-8');
include './vendor/autoload.php';

//\CoolFeng\app::test();

 $res = (new \CoolFeng\Verify)->isValidEmail("coolfeng2200@#qq.com");
 var_dump($res);