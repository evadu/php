<?php
/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/10/28
 * Time: 10:53
 */

namespace design\observer;


use design\common\Event;
use design\ObserverImp;

class InvestorObserver extends ObserverImp
{
    function __construct()
    {
        $this->addEvent(Event::EVENT_PRICE_CHANGE, "priceChange");
    }

    function  priceChange($sub)
    {
        echo "我是股民，收到价格变化：" .  $sub->price. "<br/>";
        if ($sub->price < 5.8) {//价格小于5.8去买
            $sub->buy($this);
        }
        if($sub->price>6){
            $sub->sale($this);
        }
    }

    function getName()
    {
        return "股民";
    }
}