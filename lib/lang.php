<?php
function t($token) {
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $acceptLang = ['de', 'en']; 
    $lang = in_array($lang, $acceptLang) ? $lang : 'en';
    require "i18n/l_{$lang}.php"; 
    return $_l[$token] ?? $token;
 }
?>