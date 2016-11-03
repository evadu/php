<?php
/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/10/28
 * Time: 11:03
 */

namespace design;


use design\common\Event;
use design\observer\BankerObserver;
use design\observer\InvestorObserver;
use design\observer\InvestorObsever;
use design\observer\organizationObserver;

class SubImp implements SubIfc
{
    public $observerList = [];

    public $price = 0;

    function addObserver(ObserverIfc $observer)
    {
        $this->observerList[] = $observer;
    }

    function priceChange()
    {
        foreach ($this->observerList as $observer) {
            $observer->dispatchEvent(Event::EVENT_PRICE_CHANGE, $this);
        }
    }

    public function buy(ObserverIfc $observer)
    {
        echo $observer->getName() . "->开始买股票!<br/>";
    }

    public function sale(ObserverIfc $observer)
    {
        echo $observer->getName() . "->开始卖股票!<br/>";
    }


    //test
    public function main()
    {
        $this->addObserver(new InvestorObserver());
        $this->addObserver(new organizationObserver());
        $this->addObserver(new BankerObserver());
        $this->price = rand(2, 10);//价格变化了
        $this->priceChange();

    }
}