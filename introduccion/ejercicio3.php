<?php

echo "<h3>\$GLOBALS</h3>";
echo "<pre>";
print_r($GLOBALS);
echo "</pre>";

echo "<h3>\$_SERVER</h3>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo "<h3>\$_GET</h3>";
echo "<pre>";
print_r($_GET);
echo "</pre>";

echo "<h3>\$_POST</h3>";
echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<h3>\$_FILES</h3>";
echo "<pre>";
print_r($_FILES);
echo "</pre>";

echo "<h3>\$_COOKIE</h3>";
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

echo "<h3>\$_SESSION</h3>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "<h3>\$_REQUEST</h3>";
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

echo "<h3>\$_ENV</h3>";
echo "<pre>";
print_r($_ENV);
echo "</pre>";
?>