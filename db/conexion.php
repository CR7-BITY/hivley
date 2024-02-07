<?php
    $conn = new mysqli("localhost","root","","aprendices");
    if ($conn->connect_error) {
        echo "hubo un error". $conn->connect_error;
    }
?>