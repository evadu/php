<?php
/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/10/28
 * Time: 18:21
 */

namespace design\observer;


use design\common\Event;
use design\ObserverImp;

class BankerObserver extends ObserverImp
{
    function __construct()
    {
        $this->addEvent(Event::EVENT_PRICE_CHANGE, "priceChange");
    }

    function  priceChange($sub)
    {
        echo "我是庄家，收到价格变化:" . $sub->price . "<br/>";
        if ($sub->price < 4.5) {//价格小于5.8去买
            $sub->buy($this);
        }
        if($sub->price>5){
            $sub->sale($this);
        }
    }

    function getName()
    {
        return "庄家";
    }
}