<?php

// Recibe la información enviada por Telegram al webhook
$input = file_get_contents("php://input");
$update = json_decode($input, true);

// Verifica que exista un mensaje de texto
if (!isset($update["message"]["text"])) {
    exit;
}

// Obtiene el mensaje y el chat_id
$mensaje = strtolower(trim($update["message"]["text"]));
$chat_id = $update["message"]["chat"]["id"];

// Token del bot obtenido desde variable de entorno en Railway
$token = getenv("TELEGRAM_BOT_TOKEN");

if (!$token) {
    exit("Token no configurado.");
}

// Lista de productos organizados por pasillo
$pasillos = [
    "Pasillo 1" => ["carne", "queso", "jamon", "jamón"],
    "Pasillo 2" => ["leche", "yogurth", "yogurt", "cereal"],
    "Pasillo 3" => ["bebidas", "bebida", "jugos", "jugo"],
    "Pasillo 4" => ["pan", "pasteles", "pastel", "tortas", "torta"],
    "Pasillo 5" => ["detergente", "lavaloza"]
];

// Respuesta por defecto
$respuesta = "No entiendo la pregunta.";

// Comandos principales
if ($mensaje === "/start") {
    $respuesta = "Hola, bienvenido al bot del supermercado.\n\nEscribe el nombre de un producto y te indicaré en qué pasillo se encuentra.\n\nEjemplos:\n- carne\n- leche\n- jugo\n- pan\n- detergente\n\nSi necesita ayuda, escriba /ayuda.";
} elseif ($mensaje === "/ayuda") {
    $respuesta = "Instrucciones de uso:\n\n1. Escriba el nombre de un producto.\n2. El bot le indicará en qué pasillo se encuentra.\n\nProductos disponibles:\n- carne\n- queso\n- jamón\n- leche\n- yogurth\n- cereal\n- bebidas\n- jugos\n- pan\n- pasteles\n- tortas\n- detergente\n- lavaloza";
} else {
    foreach ($pasillos as $pasillo => $productos) {
        foreach ($productos as $producto) {
            if (strpos($mensaje, $producto) !== false) {
                $respuesta = "El producto se encuentra en el $pasillo.";
                break 2;
            }
        }
    }
}

// URL de la API de Telegram para enviar mensajes
$url = "https://api.telegram.org/bot{$token}/sendMessage";

// Datos que se enviarán
$datos = [
    "chat_id" => $chat_id,
    "text" => $respuesta
];

// Envío de la respuesta
file_get_contents($url . "?" . http_build_query($datos));
?>