﻿一. design 观察者模式设计

        subImp股票 观察者的加入，买，卖 行为

        ObserverImp实现观察者事物变动具体派发等

        observer目录下 股民，庄家，机构 各自添加了观察事件~ 各种写入逻辑


二.proxydesign 代理模式

        MaskIfc面膜厂商接口

        各大面膜厂商 MgMaskImp,MikaleMaskImp,NatureMaskImp

        AgentMaskImp 代理商

        购买者能过去AgentMaskImp去买面膜 通过$_GET['name']告诉代理商要哪一种面膜，默认为mg


三.singledesign 单例模式

        查询连接池的共用及池的计算

        数据库连接池的消耗比较大，为了减少不必要的连接。可通过单例模去实现！


四.factorydesign 工厂模式

        主体HUMANIFC定义 生老病死
                |  |
                |  |
                  V
              实际主体是
        黑种人BlackHuman 和 黄种人 YellowHuman

        开不同的工厂
              BlackFactory ,YellowFactory
         里面主要就是造人 createHuman();

         Main调用，想造一个黑人去工厂 (new BlackFactory())->createHuman() 黑人造出来了。。。不用管生死病死!
        ...............

        ！



五.简单工厂模式，文字述序(如上面的工厂都是createHuman 这时，我们可以把这个方法抽象出来，作个接口，在客户端用这个抽象的类去createHuman).我认为是这样！



六.Strategydesign 策略模式
       数据库策略接口 只有一个process方法
       MYSQL策略实现  process();
       ORACEL策略实现 process();
       MONGO策略实现 process();

       DatabaseManager数据管理器
       process (根据不同的策略去处理)

       Client拿到数据库的管理器,客户端知道我的是MONGO，还是ORACEL,或是MYSQL，传入策略!

       代理是通过代理去拿到对应的东西

       策略是通过不同的策略去处理事情






