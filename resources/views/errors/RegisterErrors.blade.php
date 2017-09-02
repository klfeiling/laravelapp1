@if ($errors->has('name') || $errors->has('phone') || $errors->has('password'))
    <div class="modal fade" id="myModalRegisterErrors" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabelRegisterErrors"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" data-toggle="modal" data-target="#myModal"
                            aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalRegisterErrorsLabel">
                        注册遇到问题</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-10">
                            @if ($errors->has('name'))
                                <p>
                                <span class="help-block">
                                <strong>请输入有效的用户名</strong>
                                </span>
                                </p>
                            @endif
                            @if ($errors->has('phone'))
                                <p>
                                <span class="help-block">
                                <strong>请输入有效的电话号码</strong>
                                </span>
                                </p>
                            @endif
                            @if ($errors->has('password'))
                                <p>
                                <span class="help-block">
                                <strong>请输入6-20位的有效密码，并保证两次输入密码相同</strong>
                                </span>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            $('#myModalRegisterErrors').modal()
        });
    </script>
@endif