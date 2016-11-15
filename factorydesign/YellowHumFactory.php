<?php

/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/11/14
 * Time: 17:36
 */
namespace factorydesign;

use factorydesign\human\YellowHuman;

class YellowHumFactory
{
    public function createHume()
    {
        return new YellowHuman();
    }
}
