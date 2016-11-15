<?php
/**
 * Created by IntelliJ IDEA.
 * User: dudenglan
 * Date: 2016/11/14
 * Time: 16:42
 */

namespace factorydesign\human;


class BlackHuman implements HumanIfc{

    function born()
    {
        echo "出生在非洲<br/>";
    }

    function  old()
    {
        echo "非洲人老了，听说要去苦行僧！<br/>";
    }

    function  sick()
    {
        echo "苦行僧本身就是一个病态，你得忍受一切病痛，因为是上天赐予的<br/>";
    }

    function death()
    {
        echo "非洲人死了，森林或是草众亦或是沙漠！<br/>";
    }
}