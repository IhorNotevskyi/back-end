<?php

if (isset($_GET['file']) && !empty($_GET['file'])) {
    $fileDelete = __DIR__ . '/data/' . $_GET['file'];
    if (file_exists($fileDelete)) {
        unlink($fileDelete);
        header("Location: /contactform_style_buttondelete", true, 301);
    }
}
