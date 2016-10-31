<?php
/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/10/31
 * Time: 10:12
 */

namespace proxydesign\mask;


interface MaskIfc
{
    function info();//基本信息

    function buy($num = 1);//卖货

    function returns($product_no);//退货
}