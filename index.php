<?php
require 'vendor/autload.php';

Flight::route('/', function(){
    echo'Hello world!';
});

Flight::start();
?>