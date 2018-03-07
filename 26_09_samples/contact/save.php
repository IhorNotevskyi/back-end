<?php

$name = array_key_exists('username', $_POST) ? $_POST['username'] : null;
$comment = array_key_exists('comment', $_POST) ? $_POST['comment'] : null;

if (empty($name) || empty($comment)) {
    die('Required parameters missing');
}

$data = json_encode([
    'name' => $name,
    'comment' => $comment
]);

$getAttr = '';
if (array_key_exists('file', $_GET)) {
    $fileName = __DIR__ . '/data/' . $_GET['file'];
    $getAttr = "?file={$_GET['file']}";
} else {
    $fileName = __DIR__ . '/data/' . uniqid() . '_' . time() . '.txt';
}
file_put_contents($fileName, $data);

header("Location: /contact{$getAttr}", true, 301);
