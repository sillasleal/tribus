<?php
require_once __DIR__ . '/../src/tribus.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?= printCss() ?>
        <title>Document</title>
    </head>

    <body>
        <?= injectHtml("ok") ?>
        <div style="padding: 10px;">
            <?=
            injectPage([
                "home" => [
                    "origin" => "https://stackoverflow.com/questions/10542012/php-namespaces-and-use",
                    "route" => "/",
                    "timeout" => 6000, // tempo em milisegundos do timeout
                    "cachetime" => 3600, // tempo em milisegundos da validade da cache
                    "parent" => <<<HTML
                <div style="padding: 10px;">${children}</div>
                HTML, // Define se a página será injetado em algum elemento$key =>
                    "joinCss" => [], // Define se deve e quais os css importados que devem ser inseridos no head da página global
                    "joinJs" => [], // Define se deve e quais os js importados que devem ser inseridos após o body
                    "onlyContent" => true, // Define se deve ou não remover as tags html, head e body. o padrão é true
                    "ssr" => true, // Define se o html deve ser injetado no back. O padrão é true
                ],
                "git" => [
                    "origin" => "https://github.com/florinpop17/app-ideas",
                    "route" => "/git"
                ]
            ])
            ?>
        </div>
<?= printJs() ?>
    </body>

</html>