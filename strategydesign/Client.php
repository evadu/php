<?php
/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/11/15
 * Time: 11:16
 */
namespace strategydesign;

use strategydesign\database\DatabaseManager;
use strategydesign\database\MongoStrategy;
use strategydesign\database\MysqlStrategy;

class Client
{
    function Main()
    {
        $databaseMgn = new DatabaseManager();
        //现在进入 数据的处理
        $databaseMgn->process(new MysqlStrategy());//MYSQL的策略处理

        $databaseMgn->process(new MongoStrategy());//Mongo的策略处理
    }
}