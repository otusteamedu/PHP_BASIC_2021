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

$pointer = 0;
$fs = fopen("clients.csv", "r+");
while (($clientsList[$pointer] = fgetcsv($fs,0, ";")) !== false) {
    $pointer += 1;
}
fclose($fs);

array_pop($clientsList);
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

