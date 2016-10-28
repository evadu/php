<?php
/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/10/28
 * Time: 11:54
 */
header("Content-type:text/html;charset=utf-8");
function autoLoad($className){
    require_once dirname(dirname(__FILE__)).'\\'.$className.".php";
}
spl_autoload_register('autoLoad');
(new \design\SubImp())->main();