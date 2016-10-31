<?php
/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/10/31
 * Time: 10:38
 */

namespace proxydesign\mask;


class MgMaskImp implements MaskIfc
{

    function info()
    {
        echo <<<EOT
    MG面膜，清洁肌肤，天天MG！<br/>
    美肌配方：
        天然芦荟和蜂蜜的融合<br/>
    生产地址：
        MG工厂<br/><br/>
EOT;

    }

    function buy($num = 1)
    {
        echo "你购买了MG面膜:$num<br/>";
    }

    function returns($product_no)
    {
        echo "你退货MG面膜产品编号:$product_no<br/>";
    }
}