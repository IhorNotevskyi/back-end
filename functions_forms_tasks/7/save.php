<?php

$name = array_key_exists('username', $_POST) ? $_POST['username'] : null;
$comment = array_key_exists('comment', $_POST) ? $_POST['comment'] : null;

if (empty($name) || empty($comment)) {
    die('Необходимые параметры отсутствуют');
}

$data = json_encode([
    'name' => $name,
    'comment' => $comment
]);
$fileName = __DIR__ . '/data/' . uniqid() . '_' . time() . '.txt';
file_put_contents($fileName, $data);

header('Location: /7', true, 301);