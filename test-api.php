<?php

// Teste da API de Posts
$url = 'http://localhost:8888/api/external/posts';
$apiKey = 'bcc3bb171099b7232aa06aa4cf6e8a9501b60ce4e70e7f043a4012fde6b62226';

$data = [
    'title' => 'Post de Teste da API',
    'meta_description' => 'Testando a API REST de posts de blog',
    'content_html' => '<p>Este é um <strong>post de teste</strong> criado via API.</p><p>A API está funcionando perfeitamente!</p>',
    'tags' => ['teste', 'api', 'laravel'],
    'status' => 'published',
    'external_id' => 'test-api-001'
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

if ($httpCode === 201 || $httpCode === 200) {
    $result = json_decode($response, true);
    echo "\n✅ Sucesso!\n";
    echo "ID: {$result['id']}\n";
    echo "Slug: {$result['slug']}\n";
    echo "URL: {$result['url']}\n";

    if (isset($result['message'])) {
        echo "Mensagem: {$result['message']}\n";
    }
} else {
    echo "\n❌ Erro na requisição\n";
}
