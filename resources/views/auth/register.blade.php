<div class="tab-pane" id="Registration">
    <form role="form" class="form-horizontal" method="post" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">
                姓名</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-3">
                        <select id="sex" name="sex" class="form-control">
                            <option>Mr.</option>
                            <option>Ms.</option>
                            <option>Mrs.</option>
                        </select>
                    </div>
                    <div class="col-md-9">
                        <input id="name" type="text" name="name" class="form-control" placeholder="name" required autofocus />

                        @if ($errors->has('name'))
                            <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">
                Email</label>
            <div class="col-sm-10">
                <input  type="email" name="email" class="form-control" id="email" placeholder="Email" required />

                @if ($errors->has('email'))
                    <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-2 control-label">
                联系方式</label>
            <div class="col-sm-10">
                <input type="text" name="phone" class="form-control" id="phone" placeholder="phone" required />
                @if ($errors->has('phone'))
                    <span class="help-block">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">
                密码</label>
            <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="password" placeholder="password" required />
                @if ($errors->has('password'))
                    <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="password-confirm" class="col-sm-2 control-label">
                确认密码</label>
            <div class="col-sm-10">
                <input type="password" name="password_confirmation" class="form-control" id="password-confirm" placeholder="password" required />
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary btn-sm">
                    保存并继续</button>
                <button type="reset" class="btn btn-default btn-sm">
                    取消</button>
            </div>
        </div>
    </form>
</div>