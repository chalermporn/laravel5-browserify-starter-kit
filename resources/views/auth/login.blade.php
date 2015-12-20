@extends('admin')

@section('wrapper')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">登陆</h3>
                    </div>
                    <div class="panel-body">
                        {!! BootForm::open()->action('/auth/login') !!}
                            {!! BootForm::email('Email', 'email')->value(old('email')) !!}
                            {!! BootForm::password('密码', 'password') !!}
                            {!! BootForm::checkbox('下次自动登录', 'remember') !!}
                            {!! BootForm::submit('登陆')->class('btn btn-primary btn-block')->data('disable-with',"登陆中 ...") !!}
                        {!! BootForm::close() !!}
                    </div>
                </div>
                <div class="text-muted text-center small">请使用 IE9+, Chrome, Firefox 访问本站。</div>
            </div>
        </div>
    </div>
@stop
