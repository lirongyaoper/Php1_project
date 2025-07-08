<?php
$data = [
    ['catid' => 6, 'type' => 0, 'catdir' => 'yixueyuandi', 'arrchildid' => '6,9,10,16'],
    ['catid' => 7, 'type' => 0, 'catdir' => 'xianyansuiyu', 'arrchildid' => '7'],
    ['catid' => 8, 'type' => 1, 'catdir' => 'guanyuziji', 'arrchildid' => '8'],
    ['catid' => 9, 'type' => 0, 'catdir' => 'yixinyiyi', 'arrchildid' => '9'],
    ['catid' => 10, 'type' => 0, 'catdir' => 'xuewuzhijing', 'arrchildid' => '10'],
    ['catid' => 11, 'type' => 0, 'catdir' => 'zhiqurensheng', 'arrchildid' => '11,17,18,19,20'],
    ['catid' => 12, 'type' => 0, 'catdir' => 'diandishenghuo', 'arrchildid' => '12,13,14,21,22'],
    ['catid' => 13, 'type' => 0, 'catdir' => 'babaizhijiao', 'arrchildid' => '13'],
    ['catid' => 14, 'type' => 0, 'catdir' => 'fengyunbianhuan', 'arrchildid' => '14'],
    ['catid' => 16, 'type' => 0, 'catdir' => 'yixuejiankang', 'arrchildid' => '16'],
    ['catid' => 17, 'type' => 0, 'catdir' => 'phpxiangguan', 'arrchildid' => '17'],
    ['catid' => 18, 'type' => 0, 'catdir' => 'suanfashuju', 'arrchildid' => '18'],
    ['catid' => 19, 'type' => 0, 'catdir' => 'caozuoxitong', 'arrchildid' => '19'],
    ['catid' => 20, 'type' => 0, 'catdir' => 'shiyonggongju', 'arrchildid' => '20'],
    ['catid' => 21, 'type' => 0, 'catdir' => 'gujianqingshen', 'arrchildid' => '21'],
    ['catid' => 22, 'type' => 0, 'catdir' => 'yangyuzhien', 'arrchildid' => '22']
];

$m = 'index';
function set_mapping($data,$m) {
    $mapping = array();
    foreach($data as $val){
        $mapping['^'.str_replace('/', '\/', $val['catdir']).'$'] = $m.'/index/lists/catid/'.$val['catid'];
        if($val['type']) continue;
        $mapping['^'.str_replace('/', '\/', $val['catdir']).'\/list_(\d+)$'] = $m.'/index/lists/catid/'.$val['catid'].'/page/$1';
        if(strpos($val['arrchildid'], ',')) continue;
        $mapping['^'.str_replace('/', '\/', $val['catdir']).'\/(\d+)$'] = $m.'/index/show/catid/'.$val['catid'].'/id/$1';
    }
    //结合自定义URL规则
    print_r($mapping);
}

set_mapping($data,$m);



//
//$m = 'article';
//$mapping = [];
//$mapping['^'.str_replace('/', '\/', $valArr['catdir']).'$'] = $m.'/index/lists/catid/'.$valArr['catid'];
//
//$pathinfo = 'news';
//foreach ($mapping as $k => $v) {
//    $reg = '/'.$k.'/i';
//    if (preg_match($reg, $pathinfo)) {
//        $res = preg_replace($reg, $v, $pathinfo);
//        $_SERVER['PATH_INFO'] = '/'.$res;
//        break;
//    }
//}
//
//echo $_SERVER['PATH_INFO'];
