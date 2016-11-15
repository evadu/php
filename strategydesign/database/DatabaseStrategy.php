<?php

/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/11/15
 * Time: 11:11
 */
namespace strategydesign\database;
interface DatabaseStrategy
{
    function process();
}