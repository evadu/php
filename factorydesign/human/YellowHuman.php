<?php
/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/11/14
 * Time: 16:42
 */

namespace factorydesign\human;


class YellowHuman implements HumanIfc{

    function born()
    {
        echo "我出生了，我的皮肤是黄色，我是亚洲人!<br/>";
    }

    function  old()
    {
        echo "岁月在流走~ 容颜已憔悴，廉波老矣,尚能饭否?<br/>";
    }

    function  sick()
    {
        echo "病了，不能自理。。。年事尚高！<br/>";
    }

    function death()
    {
        echo "黄种人，埋入黄土！<br/>";
    }
}