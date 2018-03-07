<?php

ob_start();
require_once __DIR__ . '/views/comments/index.php';
$content = ob_get_clean();

require_once __DIR__ . '/views/layouts/main.php';
