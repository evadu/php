<?php
/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/10/31
 * Time: 10:43
 */

namespace proxydesign;


use proxydesign\mask\MaskIfc;
use proxydesign\mask\MgMaskImp;
use proxydesign\mask\MikaleMaskImp;
use proxydesign\mask\NatureMaskImp;

class AgentMaskImp implements MaskIfc
{
    private $mask;

    function  setMask(MaskIfc $mask)
    {
        $this->mask = $mask;
    }

    function info()
    {
        $this->mask->info();
    }

    function buy($num = 1)
    {
        $this->mask->buy($num);
    }

    function returns($product_no)
    {
        $this->mask->returns($product_no);
    }

    //测试
    function main()
    {
        $maskSell = new AgentMaskImp();

        $name = isset($_GET['name']) ? $_GET['name'] : "";
        switch ($name) {
            case "Nature":
                $mask = new NatureMaskImp();
                break;
            case "Mikale":
                $mask = new MikaleMaskImp();
                break;
            default:
                $mask = new MgMaskImp();
                break;
        }

        $maskSell->setMask($mask);
        $maskSell->info();
        $maskSell->buy();
    }
}