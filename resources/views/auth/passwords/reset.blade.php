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
    <link href="{{ URL::asset('css/bootstrap.css')}}" rel="stylesheet" />
	<link href="{{ URL::asset('css/gsdk-bootstrap-wizard.css')}}" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{ URL::asset('css/demo.css')}}" rel="stylesheet" />
</head>

<body>
<div class="image-container set-full-height" style="background-image: {{ URL::asset('/images/wizard.jpg')}}">
    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card" data-color="orange" id="wizardProfile">
                    
                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                      	<div class="wizard-header">
                      	  <h3><strong>密码重置</strong></h3>
                      	</div>

            						<div class="wizard-navigation">
            							<ul>
            	                            <li><a href="#about" data-toggle="tab">PASSWORDRESET</a></li>
            	                            <li></li>
            	                            <li></li>
            	                        </ul>

            						</div>

                        <div class="tab-content">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                          <form  method="POST" action="{{ route('password.request') }}>
                              {{ csrf_field() }}

                                  <input type="hidden" name="token" value="{{ $token }}">

                            <div class="tab-pane" id="about">
                              <div class="row">
                                <h4 class="info-text">&nbsp;</h4>
                                    <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email">邮箱</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                          @if ($errors->has('email'))
                                              <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                              </span>
                                          @endif
                                      </div> 
                                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label  for="password">密码</label>
                                          <input id="password" type="password" class="form-control" name="password" required>

                                          @if ($errors->has('password'))
                                              <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                            <label  for="password-confirm">确认密码</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                            @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10 col-sm-offset-5">
                                                <button type="submit" class="btn btn-primary">
                                                    重置
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                              </div>
                            </div>
                          </form>
                        </div>
                </div>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->


</div>

</body>

	<!--   Core JS Files   -->
	<script src="{{ URL::asset('js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="{{ URL::asset('js/gsdk-bootstrap-wizard.js')}}"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="{{ URL::asset('js/jquery.validate.min.js')}}"></script>

</html>
