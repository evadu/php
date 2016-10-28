<?php
/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/10/28
 * Time: 11:48
 */

namespace design\observer;


use design\common\Event;
use design\ObserverImp;

class organizationObserver extends ObserverImp
{
    function __construct()
    {
        $this->addEvent(Event::EVENT_PRICE_CHANGE, "priceChange");
    }

    function getName()
    {
        echo "机构";
    }

    function priceChange($sub)
    {
        echo "我是机构，收到价格变化：" . $sub->price . "<br/>";
        if ($sub->price < 5) {//机构小于5元就买入
            $sub->buy($this);
        }
        if ($sub->price > 5.8) {
            $sub->sale($this);
        }
    }
}