<?php
$arry=array (
    0 => 
    array (
      'modelid' => 1,
      'siteid' => 0,
      'name' => '文章模型',
      'tablename' => 'article',
      'alias' => 'article',
      'description' => '文章模型',
      'setting' => '',
      'inputtime' => 1466393786,
      'items' => 0,
      'disabled' => 0,
      'type' => 0,
      'sort' => 0,
      'issystem' => 1,
      'isdefault' => 1,
    ),
    1 => 
    array (
      'modelid' => 2,
      'siteid' => 0,
      'name' => '产品模型',
      'tablename' => 'product',
      'alias' => 'product',
      'description' => '产品模型',
      'setting' => '',
      'inputtime' => 1466393786,
      'items' => 0,
      'disabled' => 0,
      'type' => 0,
      'sort' => 0,
      'issystem' => 1,
      'isdefault' => 0,
    ),
    2 => 
    array (
      'modelid' => 3,
      'siteid' => 0,
      'name' => '下载模型',
      'tablename' => 'download',
      'alias' => 'download',
      'description' => '下载模型',
      'setting' => '',
      'inputtime' => 1466393786,
      'items' => 0,
      'disabled' => 0,
      'type' => 0,
      'sort' => 0,
      'issystem' => 1,
      'isdefault' => 0,
    ),
);
function yzm_array_column($array, $column_key, $index_key = null){
    $result = array();
	foreach ($array as $key => $value) {
		if(!is_array($value)) continue;
        if($column_key){
        	if(!isset($value[$column_key])) continue;
        	$tmp = $value[$column_key];
        }else{
        	$tmp = $value;
        }
        if ($index_key) {
        	$key = isset($value[$index_key]) ? $value[$index_key] : $key;
        }
        $result[$key] = $tmp;
    }
    return $result;
}

$result = yzm_array_column($arry,'tablename',0);
var_dump($result);


function Printarraylry($data, $level = 0, $isLast = true) {
    static $indent = 0; // 缩进计数器

    // HTML样式（自动内联，无需额外CSS）
    $styles = [
        'container' => 'margin-left: 15px; font-family: monospace;',
        'array' => 'color: #d63384;',
        'key' => 'color: #0066cc; font-weight: bold;',
        'string' => 'color: #28a745;',
        'number' => 'color: #fd7e14;',
        'boolean' => 'color: #6610f2;',
        'null' => 'color: #6c757d;'
    ];

    // 类型判断与颜色标记
    $type = gettype($data);
    switch ($type) {
        case 'array':
            $count = count($data);
            echo "<div style='{$styles['container']}'>";
            echo "<span style='{$styles['array']}'>Array(<span style='color:#6c757d'>$count</span>)</span> [";

            if ($count === 0) {
                echo " <span style='{$styles['null']}'>empty</span> ";
            } else {
                echo "<ul style='list-style-type: none; padding-left: 15px; margin: 0;'>";
                $i = 0;
                foreach ($data as $key => $value) {
                    $i++;
                    echo "<li>";
                    echo "<span style='{$styles['key']}'>" . htmlspecialchars($key) . "</span> => ";
                    Printarraylry($value, $level + 1, $i === $count);
                    echo "</li>";
                }
                echo "</ul>";
            }

            echo "]</div>";
            break;

        case 'string':
            echo "<span style='{$styles['string']}'>'" . htmlspecialchars($data) . "'</span>";
            break;

        case 'integer':
        case 'double':
            echo "<span style='{$styles['number']}'>$data</span>";
            break;

        case 'boolean':
            $val = $data ? 'true' : 'false';
            echo "<span style='{$styles['boolean']}'>$val</span>";
            break;

        case 'NULL':
            echo "<span style='{$styles['null']}'>null</span>";
            break;

        default:
            echo "<span>(unhandled type: $type)</span>";
    }
}

/**
 * 包裹函数：添加统一的HTML容器
 */
function Palry($data) {
    echo "<div style='background: #f8f9fa; border: 1px solid #ddd; padding: 15px; border-radius: 4px;'>";
    Printarraylry($data);
    echo "</div>";
}