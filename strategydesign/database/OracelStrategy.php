<?php
/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/11/15
 * Time: 11:13
 */

namespace strategydesign\database;


class OracelStrategy implements DatabaseStrategy
{

    function process()
    {
        echo "开始连接Oracel数据库。。。。。。。<br/>";
    }
}