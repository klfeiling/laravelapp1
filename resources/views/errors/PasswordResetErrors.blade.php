@if($errors->has('password') )
    <!-- 错误警告 -->
    <script src="{{ URL::asset('js/sweetalert.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/sweetalert.css')}}">

    <script>

        swal({
            title: "Warning",
            text:"原密码输入错误或新密码两次输入有误，请重新输入！" ,
            type: "warning",
            confirmButtonText: "OK"
        });

    </script>
@endif

