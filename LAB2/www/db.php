<?php

try{
$mysqli = new mysqli("localhost","root","1233","myDB");
}
catch(Exception $e){
    echo $e->getMessage();
    echo "Error !";
}