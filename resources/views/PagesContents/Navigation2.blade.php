<div class="bootstrap_container">
    <nav class="navbar navbar-default w3_megamenu" role="navigation"><!-- 导航条开始 -->
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index.html" class="navbar-brand"><i class="fa fa-home"></i></a>
        </div><!-- end navbar-header -->

        <div id="defaultmenu" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="index">首页</a></li>
                <!-- Mega Menu -->
                <li class="dropdown w3_megamenu-fw"><a href="show" >电影估值<b class="caret"></b></a></li>

                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">关于我们<b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">

                        <li><a href="about">平台简介</a></li>
                        <li><a href="blog">技术梗概</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">联系我们<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <form id="contact" action="{{ route('contact') }}" name="contactform" method="post">
                                {{ csrf_field() }}
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input id="name" type="text" name="name" class="form-control" placeholder="姓名" required/>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required/>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="电话" required/>
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="主题" required/>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="内容 ..."></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="pull-right">
                                        <input type="submit" value="提交" id="submit" class="btn btn-primary small">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul><!-- end nav navbar-nav navbar-right -->
        </div><!-- end navbar-collapse collapse -->

    </nav><!-- end navbar navbar-default w3_megamenu --><!-- 导航条结束 -->
</div><!-- end bootstrap_container -->