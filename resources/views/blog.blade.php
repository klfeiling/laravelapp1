<!DOCTYPE html>
<html>
<head>
<title>首页-智能电影版权估值平台</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link rel="stylesheet" href="css/menu.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- start menu -->

<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="css/font-awesome.min.css" />
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
</script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
<!---- start-smoth-scrolling---->

</head>
<body>
	<!-- header-section-starts -->
		<div class="header-top-strip">
			<div class="container">
				<div class="header-top-left">
					<p><a href="#">24/7 Customer Care</a> | <a class="play-icon popup-with-zoom-anim" href="#"> Resend 		Booking Confirmation</a> </p>
				</div>
				<div class="header-top-right">
				
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    登陆</button>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
			aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;</button>
						<h4 class="modal-title" id="myModalLabel">
						   登录/注册</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs">
									<li class="active"><a href="#Login" data-toggle="tab">登录</a></li>
									<li><a href="#Registration" data-toggle="tab">注册</a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane active" id="Login">
										<form role="form" class="form-horizontal">
										<div class="form-group">
											<label for="email" class="col-sm-2 control-label">
												Email</label>
											<div class="col-sm-10">
												<input type="email" class="form-control" id="email1" placeholder="Email" />
											</div>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1" class="col-sm-2 control-label">
												密码</label>
											<div class="col-sm-10">
												<input type="密码" class="form-control" id="exampleInputPassword1" placeholder="密码" />
											</div>
										</div>
										<div class="row">
											<div class="col-sm-2">
											</div>
											<div class="col-sm-10">
												<button type="submit" class="btn btn-primary btn-sm">
													提交</button>
												<a href="javascript:;">忘记密码？</a>
											</div>
										</div>
										</form>
									</div>
									<div class="tab-pane" id="Registration">
										<form role="form" class="form-horizontal">
										<div class="form-group">
											<label for="email" class="col-sm-2 control-label">
												姓名</label>
											<div class="col-sm-10">
												<div class="row">
													<div class="col-md-3">
														<select class="form-control">
															<option>Mr.</option>
															<option>Ms.</option>
															<option>Mrs.</option>
														</select>
													</div>
													<div class="col-md-9">
														<input type="姓名" class="form-control" placeholder="姓名" />
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="email" class="col-sm-2 control-label">
												Email</label>
											<div class="col-sm-10">
												<input type="email" class="form-control" id="email" placeholder="Email" />
											</div>
										</div>
										<div class="form-group">
											<label for="mobile" class="col-sm-2 control-label">
												联系方式</label>
											<div class="col-sm-10">
												<input type="联系方式" class="form-control" id="联系方式" placeholder="联系方式" />
											</div>
										</div>
										<div class="form-group">
											<label for="password" class="col-sm-2 control-label">
												密码</label>
											<div class="col-sm-10">
												<input type="密码" class="form-control" id="密码" placeholder="密码" />
											</div>
										</div>
										<div class="row">
											<div class="col-sm-2">
											</div>
											<div class="col-sm-10">
												<button type="button" class="btn btn-primary btn-sm">
													保存并继续</button>
												<button type="button" class="btn btn-default btn-sm">
													取消</button>
											</div>
										</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="clearfix"></div>
		<div class="container">
		  <div class="main-content">
			<div class="header">
				<div class="logo">
					<a href="index">
					<h1>Copyright Valuation——电影版权估值平台 </h1>
					</a>
				</div>
				<div class="search">
					<div class="search2">
					  <form>
						<i class="fa fa-search"></i>
						 <input type="text" value="搜索电影" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '搜索电影';}"/>
					  </form>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			
			<div class="bootstrap_container">
            <nav class="navbar navbar-default w3_megamenu" role="navigation"><!-- 导航条开始 -->
                <div class="navbar-header">
          			<button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index" class="navbar-brand"><i class="fa fa-home"></i></a>
				</div><!-- end navbar-header -->
        
            <div id="defaultmenu" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index">首页</a></li>	
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
                                <form id="contact1" action="#" name="contactform" method="post">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input type="text" name="姓名" id="name1" class="form-control" placeholder="姓名"> 
                                        <input type="text" name="email" id="email1" class="form-control" placeholder="Email"> 
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input type="text" name="联系方式" id="phone1" class="form-control" placeholder="联系方式">
                                        <input type="text" name="主题" id="subject1" class="form-control" placeholder="主题"> 
                                    </div>                 
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <textarea class="form-control" name="comments" id="comments1" rows="6" placeholder="内容 ..."></textarea>
                                    </div>   
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="pull-right">
                                            <input type="提交" value="提交" id="submit1" class="btn btn-primary small">
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
			
</body>
</html>