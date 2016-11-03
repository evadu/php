<?php
/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/10/31
 * Time: 10:38
 */

namespace proxydesign\mask;


class MikaleMaskImp implements MaskIfc
{

    function info()
    {
        echo <<<EOT
    Mikale面膜,滋润抗干躁！<br/>
    美肌配方：
        不知道<br/>
    生产地址：
        韩国<br/><br/>
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