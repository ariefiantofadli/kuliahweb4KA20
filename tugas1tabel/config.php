<?php

define (DB_USER, "root");
define (DB_PASSWORD, "");
define (DB_DATABASE, "db_kuliahweb");
define (DB_HOST, "localhost");

$koneksi = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

?>