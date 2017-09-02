<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>PersonalInformation</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

	<!-- CSS Files -->
    <link href="css/bootstrap.css" rel="stylesheet" />
	<link href="css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="css/demo.css" rel="stylesheet" />
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('images/wizard.jpg')">
    <!--   Creative Tim Branding   -->
    <a href="#">
         <div class="logo-container">
            <div class="logo">
                <img src="images/new_logo.png">
            </div>
            <div class="brand"> XXX</div>
        </div>
    </a>

	<!--  Made With Get Shit Done Kit  -->
		

    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card" data-color="orange" id="wizardProfile">
                    
                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                      	<div class="wizard-header">
                      	  <h3><strong>个人信息</strong></h3>
                      	</div>

            						<div class="wizard-navigation">
            							<ul>
            	                            <li><a href="#about" data-toggle="tab">Information</a></li>
            	                            <li><a href="#reset" data-toggle="tab">PasswordReset</a></li>
            	                            <li></li>
            	                        </ul>

            						</div>

                        <div class="tab-content">

                            <div class="tab-pane" id="about">
                              <div class="row">
                                  <form role="form" action="{{ route('infoUpdate') }}" method="post">
                                      {{ csrf_field() }}
                                <h4 class="info-text">&nbsp;</h4>
                                    <div class="col-sm-4 col-sm-offset-1">
                                         <div class="picture-container">
                                              <div class="picture">
                                                  <img src="images/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                                  <input type="file" id="wizard-picture">
                                              </div>
                                              <h6>Choose Picture</h6>
                                          </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>姓名</label>
                                        <input name="name" type="text" class="form-control" value="{{ Auth::user()->name }}">
                                      </div> 
                                      <div class="form-group">
                                        <label>性别</label>
                                        <select id="sex" name="sex" class="form-control">
                                                <option {{$s1}}>Mr.</option>
                                                <option {{$s2}}>Ms.</option>
                                                <option {{$s3}}>Mrs.</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                        <input name="email" type="hidden" class="form-control" value="{{ Auth::user()->email }}">
                                      </div>
                                      <div class="form-group">
                                        <label>电话</label>
                                        <input name="phone" type="text" class="form-control" value="{{ Auth::user()->phone }}">
                                      </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-5">
                                     <div class="form-group">
                                           <input type="submit" value="修改信息" class="btn btn-primary">
                                     </div>
                                    </div>
                                  </form>
                              </div>
                            </div>

                                <div class="tab-pane" id="reset">
                                    <div class="row">
                                        <form role="form" action="{{ route('PwReset') }}" method="post">
                                            {{ csrf_field() }}
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>原始密码</label>
                                                <input name="oldpassword" type="password" class="form-control" value="" placeholder="Old Password" >
                                            </div>
                                            <div class="form-group">
                                                <label>新密码</label>
                                                <input name="password" type="password" class="form-control" value="" placeholder="New password" >
                                            </div>
                                            <div class="form-group">
                                                <label>重复密码</label>
                                                <input name="password_confirmation" type="password" class="form-control"  value="" placeholder="Repeat password">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-5">
                                            <div class="form-group">
                                                <input type="submit" value="修改密码" class="btn btn-primary">
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    @include('errors.PasswordResetErrors')
                </div>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->

</div>

</body>

	<!--   Core JS Files   -->
	<script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="js/gsdk-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="js/jquery.validate.min.js"></script>

</html>
