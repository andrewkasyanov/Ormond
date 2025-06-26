<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "client@reach-stacker-parts.ru";
    $subject = rawurlencode("Запрос с сайта Reach-stacker-parts.ru");
    $mailtoLink = "mailto:" . $to . "?subject=" . $subject;

    echo $mailtoLink;
}
?>
