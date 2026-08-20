<?php
header('Content-Type: application/json');

// ==========================================
// CONFIGURATION: Paste your Groq API key here
// ==========================================
define('GROQ_API_KEY', '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');

// Read input message
$inputData = json_decode(file_get_contents('php://input'), true);
$userMessage = isset($inputData['message']) ? trim($inputData['message']) : '';

if (empty($userMessage)) {
    echo json_encode(['reply' => 'No message received. How can JIG CLAMPS help you today?']);
    exit;
}

// Check if API key has been configured
if (GROQ_API_KEY === 'YOUR_GROQ_API_KEY' || empty(GROQ_API_KEY)) {
    echo json_encode([
        'reply' => 'Chatbot API is ready! To activate real AI responses, please open `chatbot-api.php` in your project folder and paste your Groq API key in the `GROQ_API_KEY` constant definition at the top.',
        'config_required' => true
    ]);
    exit;
}

// Set up System prompt for context
$systemPrompt = "You are the official JIG CLAMPS AI assistant. JIG CLAMPS is a premium technology-driven manufacturer of Skid Steer Loader attachments based in GIDC, Halol, Gujarat, India.
Our attachment portfolio includes:
1. Backhoe Attachment (Model No. JBH650) - high breakout force, digging operations.
2. Sweeper Collector (Model No. SW1600) - site cleaning, debris collection.
3. Pallet Fork Attachment (Model No. JPF600) - material handling, warehouse/site lifting.
4. Industrial Grapple Bucket (Model No. JIGB2X2) - secure handling of uneven, bulky recycling materials.
5. Multi-purpose Bucket 6-in-1 (Model No. JMP6IN1) - multi-utility grading, grabbing, scraping, loader bucket.

Our manufacturing facility is 15,000 sq.ft., utilizing CNC laser cutting, press brake, MIG and laser welding. We are strategically located near Mundra, Hazira, and JNPT ports for easy export.
Contact Email: info@jigclamps.com.
Be extremely professional, concise, direct, and helpful to construction managers, agricultural coordinators, and procurement officers. Avoid fluff.";

$payload = [
    'model' => 'llama-3.1-8b-instant',
    'messages' => [
        ['role' => 'system', 'content' => $systemPrompt],
        ['role' => 'user', 'content' => $userMessage]
    ],
    'temperature' => 0.7,
    'max_tokens' => 400
];

$ch = curl_init('https://api.groq.com/openai/v1/chat/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . GROQ_API_KEY
]);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);
curl_close($ch);

if ($error) {
    echo json_encode(['reply' => 'Connection error: Unable to contact Groq API. Please try again.']);
    exit;
}

if ($httpCode !== 200) {
    $errorData = json_decode($response, true);
    $errorMessage = isset($errorData['error']['message']) ? $errorData['error']['message'] : 'Unknown Groq API error.';
    echo json_encode(['reply' => 'API Error (' . $httpCode . '): ' . $errorMessage]);
    exit;
}

$responseData = json_decode($response, true);
$reply = isset($responseData['choices'][0]['message']['content']) ? trim($responseData['choices'][0]['message']['content']) : 'I received an empty response. How else can I assist you?';

echo json_encode(['reply' => $reply]);
exit;
