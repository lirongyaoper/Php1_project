<?php
/**
 * 多维数组打印函数
 * 能够清晰地展示数组的层次结构
 */

/**
 * 打印多维数组
 * @param mixed $data 要打印的数据
 * @param string $title 标题
 * @param int $level 当前层级（内部使用）
 * @param array $visited 已访问的引用（防止循环引用）
 */
function printArray($data, $title = 'Array', $level = 0, $visited = []) {
    $indent = str_repeat('  ', $level); // 缩进
    $prefix = $level === 0 ? '┌─ ' : '├─ '; // 前缀符号
    
    // 检查循环引用
    if (is_object($data)) {
        $hash = spl_object_hash($data);
        if (in_array($hash, $visited)) {
            echo $indent . $prefix . $title . " => [循环引用]\n";
            return;
        }
        $visited[] = $hash;
    } elseif (is_array($data)) {
        // 对于数组，使用序列化后的字符串作为标识
        $arrayHash = serialize($data);
        if (in_array($arrayHash, $visited)) {
            echo $indent . $prefix . $title . " => [循环引用]\n";
            return;
        }
        $visited[] = $arrayHash;
    }
    
    // 打印标题
    if ($level === 0) {
        echo "\n" . str_repeat('=', 50) . "\n";
        echo "  " . strtoupper($title) . "\n";
        echo str_repeat('=', 50) . "\n";
    }
    
    // 根据数据类型进行不同的处理
    if (is_array($data)) {
        if (empty($data)) {
            echo $indent . $prefix . $title . " => [] (空数组)\n";
        } else {
            echo $indent . $prefix . $title . " => [\n";
            $count = count($data);
            $index = 0;
            
            foreach ($data as $key => $value) {
                $index++;
                $isLast = ($index === $count);
                $nextPrefix = $isLast ? '└─ ' : '├─ ';
                $nextIndent = str_repeat('  ', $level + 1);
                
                if (is_array($value) || is_object($value)) {
                    printArray($value, $key, $level + 1, $visited);
                } else {
                    $type = gettype($value);
                    $formattedValue = formatValue($value, $type);
                    echo $nextIndent . $nextPrefix . $key . " => " . $formattedValue . "\n";
                }
            }
            echo $indent . "  ]\n";
        }
    } elseif (is_object($data)) {
        echo $indent . $prefix . $title . " => " . get_class($data) . " {\n";
        $reflection = new ReflectionObject($data);
        $properties = $reflection->getProperties();
        
        foreach ($properties as $property) {
            $property->setAccessible(true);
            $value = $property->getValue($data);
            $propertyName = $property->getName();
            
            if (is_array($value) || is_object($value)) {
                printArray($value, $propertyName, $level + 1, $visited);
            } else {
                $type = gettype($value);
                $formattedValue = formatValue($value, $type);
                $nextIndent = str_repeat('  ', $level + 1);
                echo $nextIndent . "├─ " . $propertyName . " => " . $formattedValue . "\n";
            }
        }
        echo $indent . "  }\n";
    } else {
        $type = gettype($data);
        $formattedValue = formatValue($data, $type);
        echo $indent . $prefix . $title . " => " . $formattedValue . "\n";
    }
    
    // 如果是顶层，添加结束分隔符
    if ($level === 0) {
        echo str_repeat('=', 50) . "\n\n";
    }
}

/**
 * 格式化值的显示
 * @param mixed $value 值
 * @param string $type 类型
 * @return string 格式化后的字符串
 */
function formatValue($value, $type) {
    switch ($type) {
        case 'string':
            return '"' . addslashes($value) . '" (' . strlen($value) . ' chars)';
        case 'integer':
            return $value . ' (int)';
        case 'double':
            return $value . ' (float)';
        case 'boolean':
            return ($value ? 'true' : 'false') . ' (bool)';
        case 'NULL':
            return 'null';
        case 'resource':
            return 'resource (' . get_resource_type($value) . ')';
        default:
            return var_export($value, true);
    }
}

/**
 * 简化版打印函数（用于快速调试）
 * @param mixed $data 要打印的数据
 * @param string $title 标题
 */
function pacmd($data, $title = 'Debug') {
    printArray($data, $title);
}

?>