<?php
/**
 * @file     ${NAME}
 * @author   lirongyao0916
 * @date     7/3/25
 * @version  1.0
 * @copyright  2025 lirongyaoper.com. All rights reserved.
 *
 * @description
 * 荣耀科技
 */

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

echo $cars[0][0]."：库存：".$cars[0][1]."，已售出：".$cars[0][2]."。</br>";
echo $cars[1][0]."：库存：".$cars[1][1]."，已售出：".$cars[1][2]."。</br>";
echo $cars[2][0]."：库存：".$cars[2][1]."，已售出：".$cars[2][2]."。</br>";
echo $cars[3][0]."：库存：".$cars[3][1]."，已售出：".$cars[3][2]."。</br>";