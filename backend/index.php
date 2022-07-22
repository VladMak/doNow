<?php
header("Content-type: json/application");

$method = $_SERVER["REQUEST_METHOD"];
// Через switch case POST.GET.PUT и т.п.
// для пут и других file_get_contents('php://input')