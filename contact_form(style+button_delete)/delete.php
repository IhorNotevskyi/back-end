<?php

if (array_key_exists('file', $_GET)) {
    $fileDelete = __DIR__ . '/data/' . $_GET['file'];
    unlink($fileDelete);
    header("Location: /contact_form-button_delete", true, 301);
}