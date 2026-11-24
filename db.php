<?php

$conn = new mysqli("localhost", "root", "","product_management");

if(!$conn){
    echo "Database Not Connected";
}

?>