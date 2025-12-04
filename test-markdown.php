<?php

// Teste de conversão Markdown
$url = 'http://localhost:8888/api/external/posts';
$apiKey = 'bcc3bb171099b7232aa06aa4cf6e8a9501b60ce4e70e7f043a4012fde6b62226';

$data = [
    'title' => 'Post com Markdown',
    'meta_description' => 'Testando conversão de Markdown para HTML',
    'content_md' => "# Título Principal\n\nEste é um parágrafo com **negrito** e *itálico*.\n\n## Subtítulo\n\n- Item 1\n- Item 2\n- Item 3\n\n[Link de exemplo](https://example.com)",
    'tags' => ['markdown', 'teste'],
    'status' => 'published',
    'external_id' => 'test-markdown-001'
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'X-Api-Key: ' . $apiKey
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

echo "HTTP Status: $httpCode\n";
echo "Response: $response\n";

if ($httpCode === 201) {
    $result = json_decode($response, true);
    echo "\n✅ Post com Markdown criado com sucesso!\n";
    echo "ID: {$result['id']}\n";
    echo "Slug: {$result['slug']}\n";
    echo "URL: {$result['url']}\n";
    echo "\nAcesse: {$result['url']}\n";
}
