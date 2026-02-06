<?php

function base_path($path): string
{
    return __DIR__ . "/../" . $path;
}

function dd(...$dump)
{
    echo "<pre>";
    var_dump($dump);
    echo "</pre>";
    die;
}

function simplesData($annex = "annex_i"): array
{
    require_once(base_path("Core/Data/annex.php"));

    return $grossRevenueLast12Months[$annex];
}

function jsonResponse(int $status, array $data): void
{
    http_response_code($status);
    echo json_encode($data);
    exit;
}

function getData()
{
    $rawBody = file_get_contents('php://input');
    $json = json_decode($rawBody, true);
    $data = is_array($json) ? $json : $_POST;

    return $data;
}
