<?php

$wordlist = [
    "we", "the", "people", "in", "order", "to", "form", "a", "more", "perfect", "union", "establish", "justice", "ensure", "domestic", "tranquility", "provide", "for", "common", "defense", "promote", "general", "welfare", "and", "blessings", "of", "liberty", "ourselves", "our", "posterity", "do", "ordain", "this", "Constitution", "United", "States", "America"
];

$wordlistLength = count($wordlist);

$passwordLength = 0;
if (isset($_POST["passwordLength"])) {
    $passwordLength = $_POST["passwordLength"];
}
$passwordGenerated = [];

for($i = 1; $i <= $passwordLength; $i++) {
    $passwordGenerated[] = $wordlist[mt_rand(0,$wordlistLength-1)];
};