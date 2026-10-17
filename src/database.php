<?php
declare(strict_types=1); // Restriction stricte sur les types 

function getPdo(): PDO 
{
    $path = __DIR__ . '/../data/baby-tracker.sqlite'; 

    $pdo = new PDO('sqlite:' . $path); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $pdo;
}