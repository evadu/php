<?php
/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/11/14
 * Time: 11:50
 */
header("Content-type:text/html;charset=utf-8");
function autoLoad($className)
{
    require_once dirname(dirname(__FILE__)) . '\\' . $className . ".php";
}

spl_autoload_register('autoLoad');

function main()
{
    $human = (new \factorydesign\YellowHumFactory())->createHume();
    $human->born();
    $human->sick();
    $human->death();
    $human = (new \factorydesign\BlackHumFactory())->createHume();
    $human->born();
    $human->sick();
}

main();