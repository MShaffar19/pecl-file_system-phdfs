<?php

try {
    $obj = new phdfs();
    $obj->port = "9000";
    $obj->ip = "127.0.0.1";
    $obj->connect();
    $log = $obj->copy('/test.txt','/test1.txt');
} catch (Exception $ex) {
    var_dump($ex->getMessage());
}
?> 