<?php
// Lista de licenças válidas no formato "IP:PORTA" => "NOME_DO_SISTEMA"
$licencas = [
    "189.72.42.55:2302" => "OnlyGateRaid",
    "191.102.56.11:2302" => "OnlyGateRaid",
    "127.0.0.1:2302" => "OnlyGateRaid", // exemplo local
];

// Pega os parâmetros da URL
$endereco = $_GET['endereco'] ?? '';
$sistema  = $_GET['sistema'] ?? '';

// Verifica se o endereço está autorizado para esse sistema
if (isset($licencas[$endereco]) && $licencas[$endereco] === $sistema) {
    echo 1;
} else {
    echo 0;
}
?>
