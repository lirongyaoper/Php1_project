<?php
$valArr = [ 'catid' => 6,  'type' => 0,  'catdir' => 'news', 'arrchildid' => '6,9,10,16' ];
$m = 'article';
$mapping = [];
$mapping['^'.str_replace('/', '\/', $valArr['catdir']).'$'] = $m.'/index/lists/catid/'.$valArr['catid'];

$pathinfo = 'news';
foreach ($mapping as $k => $v) {
    $reg = '/'.$k.'/i';
    if (preg_match($reg, $pathinfo)) {
        $res = preg_replace($reg, $v, $pathinfo);
        $_SERVER['PATH_INFO'] = '/'.$res;
        break;
    }
}

echo $_SERVER['PATH_INFO'];
