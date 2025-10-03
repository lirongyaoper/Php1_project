<?php
include "./palry.php";
include "./pacmd.php";
$data = 'table="users" limit="10" order="id desc"';
preg_match_all("/([a-z]+)\=[\"]?([^\"]+)[\"]?/i", $data, $matches, PREG_SET_ORDER);

pacmd($matches);

