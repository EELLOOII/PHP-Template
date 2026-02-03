<?php

function view($path, $data = [])
{
    extract($data);

    ob_start();
    require __DIR__ . "/../resources/views/$path.php";
    $content = ob_get_clean();

    require __DIR__ . "/../resources/views/layouts/main.php";
}

function current_path()
{
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
}

function active($path)
{
    return current_path() === $path ? 'active' : '';
}
