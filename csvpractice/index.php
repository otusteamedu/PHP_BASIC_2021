<?php

/* 
1. Записать в файл нового клиента.
2. Удалить первого клиента.
*/

$clientsList = [];
$clientInfo = [
    "Name" => "",
    "Surname" => "",
    "Phone" => "",
    "Email" => "",
    "CreatedAt" => ""
];

$inputLine = "";
$fs = fopen("clients.csv", "r");

do {
    $inputLine = fgetcsv($fs,0, ";");
    if ($inputLine === false) break;
    array_push($clientsList, $inputLine);
} while (true);

fclose($fs);

array_splice($clientsList,1,1);

foreach ($clientInfo as $key => $value) {
    $prompt = "Please, enter " . $key . ": ";
    $clientInfo[$key] = readline($prompt);
}

array_push($clientsList, $clientInfo);
$fs = fopen("clients.csv", "w");
foreach ($clientsList as $key => $value) {
    $record = implode(";", $value) . PHP_EOL;
    fwrite($fs, $record);
}
fclose($fs);

