<?php

$db_conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($db_conn->connect_error){
    die("Database connection failed: ".$db_conn->connect_error);
}