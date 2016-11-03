<?php
/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/11/1
 * Time: 11:13
 */

namespace singledesign;


class SingleMain
{
    private static $sigle = null;

    private $conn = [];

    function __construct()
    {
        echo "创建连接池!";
        $this->conn = [];
    }

    public static function getInstance()
    {
        if (SingleMain::$sigle) {
            return SingleMain::$sigle;
        }
        SingleMain::$sigle = new SingleMain();
        return SingleMain::$sigle;
    }

    public function getConn($name)
    {
        if (isset($this->conn[$name])) {
            $this->conn[$name] = $this->conn[$name] + 1;//将连接池加1;
            echo "获取连接池:$name<br/>";
        } else {
            $this->conn[$name] = 1;
            echo "创建连接池:$name<br/>";
        }
    }

    public function getConnCount($name)
    {
        echo $name . "：有" . (isset($this->conn[$name]) ? $this->conn[$name] : 0) . "个连接！";
    }

    public function query($sql)
    {
        echo "开始查询语句:$sql.<br/>";
    }
}

function test()
{
    $single = SingleMain::getInstance();
    $single->getConn("连接1");
    $single->query("SHOW tables");
    echo "<br/><br/>";
    $single = SingleMain::getInstance();
    $single->getConn("连接1");
    $single->query("SHOW tables");
    $single->getConnCount("连接1");
    echo "<br/><br/>";
    $single = SingleMain::getInstance();
    $single->getConn("连接2");
    $single->query("SHOW tables");
    $single->getConnCount("连接2");
    echo "<br/><br/>";
    $single = SingleMain::getInstance();
    $single->getConn("连接1");
    $single->query("SHOW tables");
    $single->getConnCount("连接1");
    echo "<br/><br/>";
}

test();