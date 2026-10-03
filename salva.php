<?php
// Percorso del file di configurazione
$configPath = __DIR__ . '/config/config.txt';

// Legge il JSON inviato dal client
$input = json_decode(file_get_contents('php://input'), true);

$p1 = $input['p1'] ?? '';
$p2 = $input['p2'] ?? '';
$p3 = $input['p3'] ?? '';
$p4 = $input['p4'] ?? '';
$p5 = $input['p5'] ?? '';
$p6 = $input['p6'] ?? '';
$p7 = $input['p7'] ?? '';

// minuti opzionali
$minuti = ($p5 === "00") ? "" : ":" . $p5;

// prima riga del file
$riga1 = $p1 . " " . strtolower($p2) . " " . $p3 . " ore " . $p4 . $minuti;

// contenuto finale
$contenuto = $riga1 . "\n" . $p6 . "\n" . $p7;

// scrittura file
file_put_contents($configPath, $contenuto);

// risposta JSON
echo json_encode([
    "status" => "ok",
    "scritto" => $contenuto
]);
