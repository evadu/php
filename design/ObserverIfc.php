<?php
/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/10/28
 * Time: 10:51
 */

namespace design;


interface ObserverIfc
{
    function getName();//获取观察者名称

    function addEvent($EVENT_TYPE, $function);//观察者添加需要观察的事件

    function hasEvent($EVENT_TYPE);//观察者判断有没有存在该事件

    function  dispatchEvent($EVENT_TYPE, $data);//观察者的派到事件到达 由观察者的抽象类去实现
}