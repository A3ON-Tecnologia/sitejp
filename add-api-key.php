<?php

// Script para adicionar INBOUND_API_KEY ao .env
$envFile = __DIR__ . '/.env';
$apiKey = 'bcc3bb171099b7232aa06aa4cf6e8a9501b60ce4e70e7f043a4012fde6b62226';

if (!file_exists($envFile)) {
    die("Arquivo .env não encontrado!\n");
}

$envContent = file_get_contents($envFile);

// Verifica se a chave já existe
if (strpos($envContent, 'INBOUND_API_KEY=') !== false) {
    // Substitui a chave existente
    $envContent = preg_replace(
        '/INBOUND_API_KEY=.*/',
        'INBOUND_API_KEY=' . $apiKey,
        $envContent
    );
    echo "✅ INBOUND_API_KEY atualizada no .env\n";
} else {
    // Adiciona a chave no final do arquivo
    $envContent .= "\n# API Key para webhook externo\n";
    $envContent .= "INBOUND_API_KEY=" . $apiKey . "\n";
    echo "✅ INBOUND_API_KEY adicionada ao .env\n";
}

file_put_contents($envFile, $envContent);
echo "Chave: $apiKey\n";
