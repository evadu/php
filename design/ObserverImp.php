<?php
/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/10/28
 * Time: 11:32
 */

namespace design;


class ObserverImp implements ObserverIfc
{
    public $event_list = [];


    function __construct()
    {

    }

    //添加事件
    function addEvent($EVENT_TYPE, $function)
    {
        $this->event_list[$EVENT_TYPE][] = $function;
    }

    //判断有没有事件
    function hasEvent($EVENT_TYPE)
    {
        return count($this->event_list[$EVENT_TYPE]) > 0;
    }

    function  dispatchEvent($EVENT_TYPE, $data)
    {
        if ($this->hasEvent($EVENT_TYPE)) {
            foreach ($this->event_list[$EVENT_TYPE] as $function) {
                $this->$function($data);
            }
        }
    }

    function getName()
    {
        echo "观察者";
    }
}