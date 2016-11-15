<?php
/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/11/15
 * Time: 11:14
 */

namespace strategydesign\database;


class DatabaseManager
{
    //通过传入不同的策略方案去执行
    function process(DatabaseStrategy $database)
    {
        $database->process();
    }
}