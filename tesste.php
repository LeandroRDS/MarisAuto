<?php

$conn = new mysqli("localhost","root","","teste");

if($conn){
    echo "mysqli funcionando";
}