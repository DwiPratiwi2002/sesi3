<?php
    //Model 1
    $cars = array("Volvo", "BMW", "Toyota");

    //Model 2
    $cars[0] = "Volvo";
    $cars[0] = "BMW";
    $cars[0] = "Toyota";

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($cars);
