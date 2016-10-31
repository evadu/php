一. design 观察者模式设计

        subImp股票 观察者的加入，买，卖 行为

        ObserverImp实现观察者事物变动具体派发等

        observer目录下 股民，庄家，机构 各自添加了观察事件~ 各种写入逻辑


二.proxydesign 代理模式

        MaskIfc面膜厂商接口

        各大面膜厂商 MgMaskImp,MikaleMaskImp,NatureMaskImp

        AgentMaskImp 代理商

        购买者能过去AgentMaskImp去买面膜 通过$_GET['name']告诉代理商要哪一种面膜，默认为mg
