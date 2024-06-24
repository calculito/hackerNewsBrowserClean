<?php
$request = $_SERVER['REQUEST_URI'];
switch ($request) {
    case '/' :
        require __DIR__ . '/hackernews.html';
        break;
    case '/top' :
        require __DIR__ . '/hackernews.html';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/hackernews.html';
        break;
}
