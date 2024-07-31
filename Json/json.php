<?php

define('DATA', __DIR__ . '/customers.json');
$customerArray = [
    [
        "firstName" => "Alice",
        "age" => 20,
        "available" => true,
        "gender" => "F"
    ],
    [
        "firstName" => "Bob",
        "age" => 32,
        "available" => false,
        "gender" => "M"
    ]
];

//encodage json: tableau =>json
$customerJSON = json_encode($customerArray, JSON_PRETTY_PRINT);

// stockage des données encodé en JSON dans un fischier customer.json
file_put_contents(DATA, $customerJSON, FILE_APPEND);

//On tente d'ajouter des données à la suite des données existantes dans le fichier
$newCustomer = ['firstName' => 'Charlie', 'age' => 29, 'available' => true, 'gender' => 'M'];

//Placer $newcustomer dans le tableau
# Lire le contenu du fichier existant
$existingData = file_get_contents(DATA);

// Décoder le contenu JSON en un tableau PHP
$existingCustomers = json_decode($existingData, true);

// Ajouter le nouveau client au tableau
$existingCustomers[] = $newCustomer;

// Encoder le tableau mis à jour en JSON
$updatedCustomerJSON = json_encode($existingCustomers, JSON_PRETTY_PRINT);

// Écrire le JSON mis à jour dans le fichier
file_put_contents(DATA, $updatedCustomerJSON);