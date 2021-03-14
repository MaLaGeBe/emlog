<?php
/**
 * 数据库操作路由
 *
 * @package EMLOG (www.emlog.net)
 */

class Database
{

    public static function getInstance()
    {
        if (class_exists('mysqli', false)) {
            return MySqlii::getInstance();
        } else {
            emMsg('服务器空间PHP不支持MySql数据库');
        }
    }

}
