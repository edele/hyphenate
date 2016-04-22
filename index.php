<?php

header('Content-Type: text/plain');
define('SOFT_HYPHEN', "\xAD");

$text = isset($_POST['text']) ? $_POST['text'] : '';

if ($text) {
	echo hyphenate($text);
}

function hyphenate($text = '') {
	require_once 'phphypher-0.1.2/hypher.php';
	$hypher = new phpHypher('phphypher-0.1.2/hyph_ru_RU.conf');
	echo $hypher->hyphenate($text, 'UTF-8', SOFT_HYPHEN);
}
