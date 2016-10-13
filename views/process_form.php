<?php
$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_STRING);
$type = filter_input(INPUT_POST, 'searchType', FILTER_SANITIZE_STRING);
$text_value = filter_input(INPUT_POST, 'searchText', FILTER_SANITIZE_STRING);


$parser = new Parser();
$results = $parser->parse($url, $type, $text_value);

$res = '';

foreach ($results['results'] as $value) {
    $res = $res.$value.", ";
}

require_once (ROOT.'/views/menu.php');

echo("<h3>Results for $url</h3>");
echo ("<ul>".
        "<li>Url: $url </li>".
        "<li>Type: $type </li>".
        "<li>Result: $res </li>".
        "<li>Count: ".count($results['results'])."</li>".
      "</ul>");


// Фиксим в базе
if ($url && !$results['errors']) {
    Results::processResults($url, $res, $type);
}

