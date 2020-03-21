<?php  

require "rb.php";
 R::setup( 'mysql:host=localhost;dbname=chat',
        'root', '' );

session_start();
