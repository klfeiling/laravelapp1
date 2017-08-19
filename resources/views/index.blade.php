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
			
		  <div class="main-banner">
			 <div class="banner col-md-8">
				<section class="slider">
					<div class="flexslider">
							<ul class="slides">
							<li>
								<img src="images/pic1.jpg" class="img-responsive" alt="" />
							</li>
							<li>
								<img src="images/pic2.jpg" class="img-responsive" alt="" />
							</li>
							<li>
								<img src="images/pic3.jpg" class="img-responsive" alt="" />
							</li>
							<li>
								<img src="images/pic4.jpg" class="img-responsive" alt="" />
							</li>
					  </ul>
					</div>
			   </section>
					 <!-- FlexSlider -->
					 <script defer src="js/jquery.flexslider.js"></script>
					 <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
						<script type="text/javascript">
					$(function(){
					 SyntaxHighlighter.all();
					});
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					 });
					});
				 </script>
			 </div>
			 
			 <div class="col-md-4 banner-right">
				<h4>快速搜索</h4>
				<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
				  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Movies</a></li>
				  <li role="presentation"></li>
				  <li role="presentation"></li>
				  <li role="presentation"></li>
				</ul>
				<div id="myTabContent" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">				  
					<div class="fleft">
					  <label></label>
					</div>
						<select class="list_of_movies"><option value="">Select Movie</option><optgroup label="Telugu"><option style="padding-left: 10px;" value="ANAN">Asura (U/A)</option><option style="padding-left: 10px;" value="CHDM">Jurassic World (2D Telugu) (U/A)</option><option style="padding-left: 10px;" value="GUDR">Jurassic World (3D Telugu) (U/A)</option><option style="padding-left: 10px;" value="GUNT">Jyothi Lakshmi (U/A)</option><option style="padding-left: 10px;" value="JANG">Kerintha (U)</option><option style="padding-left: 10px;" value="KAKI">Krishnamma Kalipindi Iddarini (U/A)</option><option style="padding-left: 10px;" value="KURN">Lava Kusa (A)</option><option style="padding-left: 10px;" value="MART">Pandaga Chesko (U/A)</option><option style="padding-left: 10px;" value="PRVT">Tippu (A)</option><option style="padding-left: 10px;" value="RAJA">Vinavayya Ramayya (U/A)</option></optgroup><optgroup label="Hindi"><option style="padding-left: 10px;" value="TAWA">ABCD 2 (3D) (U)</option><option style="padding-left: 10px;" value="ZIRO">ABCD 2 (2D) (U)</option></optgroup><optgroup label="English"><option style="padding-left: 10px;" value="DIB">Jurassic World (3D) (U/A)</option><option style="padding-left: 10px;" value="GUW">Guwahati</option></optgroup></select>
				  </div>
				</div>
			 </div>
				</div>
	 		</div>
	 
		 	<div class="clearfix"></div>
		   </div>
		   
		 <div class="review-slider">
			<ul id="flexiselDemo1">
			<li>
				<a ><img src="images/r1.jpg" alt=""/></a>
				<div class="slide-title"><h4>Ted</h4> </div>
				<div class="date-city">
					<h5>Dec 12-15</h5>
					<h6>Multi-city</h6>
					<div class="buy-tickets">
						<a href="show">版权评估</a>
					</div>
				</div>
			</li>
			<li>
				<a ><img src="images/r2.jpg" alt=""/></a>
				<div class="slide-title"><h4>Vitican Tapes</h4></div>
				<div class="date-city">
					<h5>Dec 12-15</h5>
					<h6>Multi-city</h6>
					<div class="buy-tickets">
						<a href="show">版权评估</a>
					</div>
				</div>
			</li>
			<li>
				<a ><img src="images/r3.jpg" alt=""/></a>
				<div class="slide-title"><h4>Iron Man</h4></div>
				<div class="date-city">
					<h5>Dec 12-15</h5>
					<h6>Multi-city</h6>
					<div class="buy-tickets">
						<a href="show">版权评估</a>
					</div>
				</div>
			</li>
			<li>
				<a ><img src="images/r4.jpg" alt=""/></a>
				<div class="slide-title"><h4>The Terminator</h4></div>
				<div class="date-city">
					<h5>Dec 12-15</h5>
					<h6>Multi-city</h6>
					<div class="buy-tickets">
						<a href="show">版权评估</a>
					</div>
				</div>
			</li>
			<li>
				<a ><img src="images/r5.jpg" alt=""/></a>
				<div class="slide-title"><h4>Insidious 3</h4></div>
				<div class="date-city">
					<h5>Dec 12-15</h5>
					<h6>Multi-city</h6>
					<div class="buy-tickets">
						<a href="show">版权评估</a>
					</div>
				</div>
			</li>
			<li>
				<a ><img src="images/r6.jpg" alt=""/></a>
				<div class="slide-title"><h4>Inside Out</h4></div>
				<div class="date-city">
					<h5>Dec 12-15</h5>
					<h6>Multi-city</h6>
					<div class="buy-tickets">
						<a href="show">版权评估</a>
					</div>
				</div>
			</li>
			</ul>
			<script type="text/javascript">
		$(window).load(function() {
			
		  $("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:800,
						visibleItems: 4
					}
				}
			});
			});
		</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
		 </div>
		<div class="footer-top-grid">
			<div class="list-of-movies col-md-8">
				<div class="tabs">
				<div class="sap_tabs">	
						 <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>正在热映</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>本周开播</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>即将上映</span></li>
							  <div class="clearfix"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<ul class="tab_img">
									  <li>
										<div class="view view-first">
					   		  			  <a > <img src="images/pic-1.jpg" class="img-responsive" alt=""/></a>
										   <div class="info1"> </div>
											 <div class="mask"></div>
								              <div class="tab_desc">
													<a href="show">版权评估</a>
													<div class="percentage-w-t-s">
														<h5>97</h5>
														<p>% <br> Want to see</p>
														<div class="clearfix"></div>
													</div>
											  </div>
									    </div>
									  </li>
									  <li>
										<div class="view view-first">
					   		  			   <a ><img src="images/pic-2.jpg" class="img-responsive" alt=""/></a>
										   <div class="info1"> </div>
											 <div class="mask">
						                     </div>
								              <div class="tab_desc">
													<a href="show">版权评估</a>
													<div class="percentage-w-t-s">
														<h5>98</h5>
														<p>% <br> Want to see</p>
														<div class="clearfix"></div>
													</div>
											  </div>
									    </div>
									  </li>
									  <li>
										<div class="view view-first">
					   		  			   <a ><img src="images/pic-10.jpg" class="img-responsive" alt=""/></a>
											 <div class="mask">
						                        <div class="info1"> </div>
							              </div>
								                <div class="tab_desc">
													<a href="show">版权评估</a>
													<div class="percentage-w-t-s">
														<h5>100</h5>
														<p>% <br> Want to see</p>
														<div class="clearfix"></div>
													</div>
											  </div>
									    </div>
									  </li>
										<div class="clearfix"></div>
									</ul>
						        </div>	
							     <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<ul class="tab_img">
									  <li>
										<div class="view view-first">
					   		  			   <a ><img src="images/pic-8.jpg" class="img-responsive" alt=""/></a>
											 <div class="mask">
						                        <div class="info1"> </div>
							              	</div>
								                <div class="tab_desc">
													<a href="show">版权评估</a>
													<div class="percentage-w-t-s">
														<h5>92</h5>
														<p>% <br> Want to see</p>
														<div class="clearfix"></div>
													</div>
											  </div>
									    </div>
									  </li>
									  <li>
										<div class="view view-first">
					   		  			  <a > <img src="images/pic-3.jpg" class="img-responsive" alt=""/></a>
											 <div class="mask">
						                        <div class="info1"> </div>
							              </div>
								                <div class="tab_desc">
													<a href="show">版权评估</a>
													<div class="percentage-w-t-s">
														<h5>100</h5>
														<p>% <br> Want to see</p>
														<div class="clearfix"></div>
													</div>
											  </div>
									    </div>
									  </li>
										<li class="last">
										  <div class="view view-first">
					   		  			   <a ><img src="images/pic-9.jpg" class="img-responsive" alt=""/></a>
											 <div class="mask">
						                        <div class="info1"> </div>
							                </div>
								               <div class="tab_desc">
													<a href="show">版权评估</a>
													<div class="percentage-w-t-s">
														<h5>74</h5>
														<p>% <br> Want to see</p>
														<div class="clearfix"></div>
													</div>
											  </div>
										  </div>
										</li>
										<div class="clearfix"></div>
									</ul>
							     </div>	
							     <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<ul class="tab_img">
										<li>
										  <div class="view view-first">
					   		  			  <a "> <img src="images/pic-4.jpg" class="img-responsive" alt=""/></a>
											 <div class="mask">
						                        <div class="info1"> </div>
							                </div>
								                <div class="tab_desc">
													<a href="show">版权评估</a>
													<div class="percentage-w-t-s">
														<h5>88</h5>
														<p>% <br> Want to see</p>
														<div class="clearfix"></div>
													</div>
											  </div>
										  </div>
										</li>
										<li>
										  <div class="view view-first">
					   		  			  <a > <img src="images/pic-12.jpg" class="img-responsive" alt=""/></a>
											 <div class="mask">
						                        <div class="info1"> </div>
							                </div>
								                <div class="tab_desc">
													<a href="show">版权评估</a>
													<div class="percentage-w-t-s">
														<h5>100</h5>
														<p>% <br> Want to see</p>
														<div class="clearfix"></div>
													</div>
											  </div>
										  </div>
										</li>
										<li class="last">
										  <div class="view view-first">
					   		  			   <a ><img src="images/pic-5.jpg" class="img-responsive" alt=""/></a>
											 <div class="mask">
						                        <div class="info1"> </div>
							                </div>
								                <div class="tab_desc">
													<a href="show">版权评估</a>
													<div class="percentage-w-t-s">
														<h5>90</h5>
														<p>% <br> Want to see</p>
														<div class="clearfix"></div>
													</div>
											  </div>
										  </div>
										</li>
										<div class="clearfix"></div>
									</ul>
							     </div>	
							     	        					 	        					 
			     		    </div>	
                        </div>
			    </div>
		    	</div>	
				<div class="clearfix"></div>
				<div class="featured">
					<h4>近期热映</h4>
					<ul>
						<li>
							<div class="f-movie">
								<div class="f-movie-img">
									<a ><img src="images/f4.jpg" alt="" /></a>
								</div>
									<div class="f-movie-name">
										<a >Train Wreck</a>
										<p>Multi city</p>
									</div>
								<div class="f-buy-tickets">
									<a href="show">版权评估</a>
								</div>
							</div>
						</li>
						<li>
							<div class="f-movie">
								<div class="f-movie-img">
									<img src="images/f5.jpg" alt="" /></a>
								</div>
									<div class="f-movie-name">
										<a >Ant Man</a>
										<p>Multi city</p>
									</div>
								<div class="f-buy-tickets">
									<a href="show">版权评估</a>
								</div>
							</div>
						</li>
						<li>
							<div class="f-movie">
								<div class="f-movie-img">
									<a ><img src="images/f6.jpg" alt="" /></a>
								</div>
									<div class="f-movie-name">
										<a >Mr.R </a>
										<p>Mumbai</p>
									</div>
								<div class="f-buy-tickets">
									<a href="show">版权评估</a>
								</div>
							</div>
						</li>
						<li>
							<div class="f-movie">
								<div class="f-movie-img">
									<a ><img src="images/f1.jpg" alt=""></a>
								</div>
									<div class="f-movie-name">
										<a >The standard chunk</a>
										<p>Multi city</p>
									</div>
								<div class="f-buy-tickets">
									<a href="show">版权评估</a>
								</div>
							</div>
						</li>
						<li>
							<div class="f-movie">
								<div class="f-movie-img">
									<a ><img src="images/f2.jpg" alt=""></a>
								</div>
									<div class="f-movie-name">
										<a >There are many 'variations'</a>
										<p>Multi city</p>
									</div>
								<div class="f-buy-tickets">
									<a href="show">版权评估</a>
								</div>
							</div>
						</li>
						<li>
							<div class="f-movie">
								<div class="f-movie-img">
									<a ><img src="images/f3.jpg" alt=""></a>
								</div>
									<div class="f-movie-name">
										<a >The Live Tribute Show</a>
										<p>Mumbai</p>
									</div>								 
								<div class="f-buy-tickets">
									<a href="show">版权评估</a>
								</div>
							</div>
						</li>
						<div class="clearfix"></div>
					</ul>
				</div>
		   </div>
			<div class="right-side-bar">
				<div class="top-movies-in-india">
					<h4>热门排行榜</h4>
					<ul class="mov_list">
						<li><i class="fa fa-star"></i></li>
						<li>77%</li>
						<li><a href="show">Jurassic World (3D) (U/A)</a></li>
					</ul>
					<ul class="mov_list">
						<li><i class="fa fa-star"></i></li>
						<li>80%</li>
						<li><a href="show">Jurassic World (3D Hindi) (U/A)</a></li>
					</ul>
					<ul class="mov_list">
						<li><i class="fa fa-star"></i></li>
						<li>69%</li>
						<li><a href="show">Dil Dhadakne Do (U/A)</a></li>
					</ul>
					<ul class="mov_list">
						<li><i class="fa fa-star"></i></li>
						<li>65%</li>
						<li><a href="show">Hamari Adhuri Kahani (U)</a></li>
					</ul>
					<ul class="mov_list">
						<li><i class="fa fa-star"></i></li>
						<li>83%</li>
						<li><a href="show">Premam (U)</a></li>
					</ul>
					<ul class="mov_list">
						<li><i class="fa fa-star"></i></li>
						<li>87%</li>
						<li><a href="show">Tanu Weds Manu Returns (U/A)</a></li>
					</ul>
					<ul class="mov_list">
						<li><i class="fa fa-star"></i></li>
						<li>71%</li>
						<li><a href="show">Romeo Juliet (U)</a></li>
					</ul>
					<ul class="mov_list">
						<li><i class="fa fa-star"></i></li>
						<li>81%</li>
						<li><a href="show">Jurassic World (IMAX 3D) (U/A)</a></li>
					</ul>
					<ul class="mov_list">
						<li><i class="fa fa-star"></i></li>
						<li>80%</li>
						<li><a href="show">Jurassic World (2D Hindi) (U/A)</a></li>
					</ul>
					<ul class="mov_list">
						<li><i class="fa fa-star"></i></li>
						<li>89%</li>
						<li><a href="show">Kaaka Muttai (U)</a></li>
					</ul>
				</div>
				<div class="quick-pay">
					<h3>Quick Pay</h3>
					<p class="payText">Make your online payments a breeze. Save your Credit, Debit card and Netbanking in your BookMyShow profile.. <a href="blog">Read more</a></p>
				</div>
				<div class="our-blog">
					<h5>Our Blog</h5>
					<div class="post-article">
						<a href="blog" class="post-title">Lorem Ipsum is simply dummy text of the printing</a>
						<i>Posted on June 15, 2015</i>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old...<br> <a href="blog">Read more</a></p>
					</div>
					<div class="post-article">
						<a href="blog" class="post-title">Sed ut perspiciatis unde</a>
						<i>Posted on June 15, 2015</i>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old...<br> <a href="blog">Read more</a></p>
					</div>
					<div class="post-article">
						<a href="blog" class="post-title">Sed ut perspiciatis unde</a>
						<i>Posted on June 15, 2015</i>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old...<br> <a href="blog">Read more</a></p>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>			
		</div>
		<div class="footer-top-strip">
			<p><span>下轮热播 <i>(Friday, 19 Jun) </i>: </span><a href="show">Disney's ABCD 2 (3D) (U)</a>, <a href="show"> 2 Premi Premache</a> , <a href="show">Dekh Ke (Bhojpuri)</a> , <a href="show">Disney's ABCD 2 (2D) (U)</a>, <a href="show">Dekh Ke (Bhojpuri)</a></p>
			<p><span>即将上映 :</span><a href="show"> 2 Premi Premache</a>, <a href="show">Acharam, Dekh Ke (Bhojpuri)</a>, <a href="show">Entourage</a>, <a href="show">Kuttram Kadithal</a></p>
	   </div>
		<div class="clearfix"></div>
			<div class="copy-rights text-center">
				<p>&nbsp;</p>
			</div>
		</div>	
	</div>
</div>	
</body>
</html>