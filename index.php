<?php

// set the base dir
define("BASE_DIR", dirname(__FILE__) . DIRECTORY_SEPARATOR);

// globally add configurations, database connections and global helpers
require_once "./config/config.php";
require_once "./config/db.php";
require_once "./includes/helpers.php";

// include header of the site here, so it's automatically applied on the other pages
include_once BASE_DIR."includes/header.php";


/**
 * Simple routing system based on the Query string page parameter
 * check if the page parameter is equal to the page string will include that page
 *
 * Example
 * page=products =>  will include the pages have all the products in the table
 *
 * if url is for home page or someone try to change the page parameter, so it will be always
 * go the default page or home page
 *
 */
if(!empty($_GET['page'])){
    $page = $_GET['page'];
    if($page === 'products'){
        include_once BASE_DIR."pages/products/all.php";
    }
}else{
    include_once BASE_DIR."pages/products/all.php";
}

// include footer of the site here, so it's automatically applied on the other pages
include_once BASE_DIR."includes/footer.php";