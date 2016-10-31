<?php
/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/10/31
 * Time: 10:36
 */

namespace proxydesign\mask;


class NatureMaskImp implements MaskIfc
{

    function info()
    {
        echo <<<EOT
    自然堂，你值得拥有！<br/>
    美肌配方：
        天然芦荟和蜂蜜的融合<br/>
    生产地址：
        大自然<br/><br/>
EOT;

    }

    function buy($num = 1)
    {
        echo "自然堂卖货部。。一系列的操作过程，最后拿到数据为：$num<br/>";
    }

    function returns($product_no)
    {
        echo "自然堂不接受退货:$product_no<br/>";
    }
}