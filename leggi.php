<?php
$configPath = __DIR__ . '/config/config.txt';

if (!file_exists($configPath)) {
    echo json_encode(["esiste" => false]);
    exit;
}

$data = file_get_contents($configPath);
$righe = explode("\n", $data);

$riga1 = $righe[0] ?? "";
$riga2 = $righe[1] ?? "";
$altreRighe = implode("\n", array_slice($righe, 2));

echo json_encode([
    "esiste" => true,
    "riga1" => $riga1,
    "riga2" => $riga2,
    "altreRighe" => $altreRighe
]);
