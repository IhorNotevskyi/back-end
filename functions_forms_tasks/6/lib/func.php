<?php

/**
 * @return bool
 */
function getIsPost()
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

/**
 * Upload files
 * @param array $files
 * @param string $storage
 * @param array|null $mimes
 * @return int
 */
function uploadFile(array $files, $storage, array $mimes = null)
{
    $uploaded = 0;
    $storage = rtrim($storage, '/\\') . '/';
    if (isset($files['name'])) {
        for ($i = 0; $i < count($files['name']); $i++) {
            if ($files['size'][$i] <= 0 || (!is_null($mimes) && !in_array($files['type'][$i], $mimes))) {
                continue;
            }

            $newFileName = getUniqueName($storage, pathinfo($files['name'][$i], PATHINFO_EXTENSION));
            if (move_uploaded_file($files['tmp_name'][$i], "{$storage}/{$newFileName}")) {
                $uploaded++;
            }
        }
    }

    return $uploaded;
}

/**
 * @param string $dir
 * @param string $ext
 * @return string
 */
function getUniqueName($dir, $ext)
{
    $dir = rtrim($dir, '/\\') . '/';
    do {
        $name = time() . '_' . uniqid() . ".{$ext}";
    } while (file_exists("{$dir}/{$name}"));

    return $name;
}