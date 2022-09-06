<?php 
$inputJSON = file_get_contents('https://script.google.com/macros/s/AKfycbzWM5yiycqTnnAc9bqHZPDuKdy4-ZcQ8NgCShhFP2vAhtJrQ4Kw8D1Uh8wHE30tt0ju/exec');
$data = json_decode($inputJSON,TRUE);
$datoss=$data[0]["data"];



