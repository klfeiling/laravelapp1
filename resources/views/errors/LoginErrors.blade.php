@if ($errors->first('email') == 'These credentials do not match our records.')
    <div class="modal fade" id="myModalLoginErrors" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelLoginErrors"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"  data-toggle="modal" data-target="#myModal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLoginErrorsLabel">
                        登录遇到问题</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-10">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                <strong>账户不存在，或密码输入错误，请重新登录！</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $('#myModalLoginErrors').modal()
        });
    </script>
@endif
