<?php

try {
    $obj = new phdfs("127.0.0.1","9000");
    $obj->connect();
    $log = $obj->read('/test.txt',1024);
} catch (Exception $ex) {
    var_dump($ex->getMessage());
}
?>
