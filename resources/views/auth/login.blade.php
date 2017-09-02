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
                                <form role="form" class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-sm-2 control-label">
                                            Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email1" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus/>
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="password" class="col-sm-2 control-label">
                                            密码</label>
                                        <div class="col-sm-10">
                                            <input id="password" type="password" class="form-control" name="password" placeholder="password"  required/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                        </div>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                提交</button>
                                            <a href="" data-dismiss="modal"  data-toggle="modal" data-target="#myModalForget">忘记密码？</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @include('auth.register')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('auth.passwords.email')
@include('errors.LoginErrors')
@include('errors.RegisterErrors')