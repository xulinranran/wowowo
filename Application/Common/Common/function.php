<?php

function filterXSS($string){
    //相对index.php入口文件，引入HTMLPurifier.auto.php核心文件
    require_once './Public/Admin/htmlpurifier/HTMLPurifier.auto.php';
    // 生成配置对象
    $cfg = HTMLPurifier_Config::createDefault();
    // 以下就是配置：
    $cfg -> set('Core.Encoding', 'UTF-8');
    // 设置允许使用的HTML标签
    $cfg -> set('HTML.Allowed','div,b,strong,i,em,a[href|title],ul,ol,li,br,p[style],span[style],img[width|height|alt|src]');
    // 设置允许出现的CSS样式属性
    $cfg -> set('CSS.AllowedProperties', 'font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align');
    // 设置a标签上是否允许使用target="_blank"
    $cfg -> set('HTML.TargetBlank', TRUE);
    // 使用配置生成过滤用的对象
    $obj = new HTMLPurifier($cfg);
    // 过滤字符串
    return $obj -> purify($string);
}

/**
 * @Author   LaoYang
 * @DateTime 2017-05-07
 * @param    [string]     $pwd [原文密码]
 * @return   [string]          [加密结果]
 */
function getPwd($pwd){
    $key = substr(sha1('phpBJ56'),9,10);
    $pwd = substr(sha1($pwd),19,10);
    return sha1($key . $pwd);
}

function getTree($list,$pid=0,$level=0) {
    static $tree = array();
    foreach($list as $row) {
        if($row['auth_pid']==$pid) {
            $row['level'] = $level;
            $tree[] = $row;
            getTree($list, $row['auth_id'], $level + 1);
        }
    }
    return $tree;
}
