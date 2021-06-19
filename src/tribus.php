<?php

require_once __DIR__ . "/../vendor/autoload.php";

function tribus() {
    return [];
}

function injectHtml(string $url) {
    return $url;
}

function injectPage(array $origins) {
    foreach ($origins as $value) {
        if ($value["route"] === $_SERVER['REQUEST_URI']) {
            return file_get_contents($value["origin"]);
        }
    }
    return "";
}

function printCss() {
    return "";
}

function printJs() {
    return "";
}
