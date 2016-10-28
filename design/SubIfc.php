<?php
/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/10/28
 * Time: 10:51
 */

namespace design;


interface SubIfc
{
    //开户
    function addObserver(ObserverIfc $observer);

    //买股票
    function buy(ObserverIfc $observer);

    //卖股票
    function sale(ObserverIfc $observer);
}