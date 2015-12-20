<!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    @include('item.meta')
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <meta name="csrf-param" content="_token" />
    <meta name="qn-url" content="{!! env('QN_URL') !!}" />
    <meta name="qn-uptkn" content="{!! env('QN_UPTKN') !!}" />
    <meta name="qn-edtkn" content="{!! env('QN_EDTKN') !!}" />
    <title>ADMIN</title>
    <link rel="stylesheet" href="/css/admin.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    @section('wrapper')
        @if (Session::has('message'))
            <div class="alert-container">
                <div class="alert alert-info alert-fixed">
                    {{ Session::get('message') }}
                </div>
            </div>
        @endif
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/admin">ADMIN</a>
                </div>

                <ul class="nav navbar-top-links navbar-right">
                    <li><a href="/" target="_blank">访问网站</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            {{ Auth::check() ? Auth::user()->name : '游客' }} <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            {{-- <li><a href="/admin/changepwd"><i class="fa fa-lock fa-fw"></i> 修改密码</a></li> --}}
                            <li><a href="/auth/logout"><i class="fa fa-sign-out fa-fw"></i> 退出</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li><a {{ Request::is('admin/article*') ? 'class="active"' : '' }} href="/admin/article"><i class="fa fa-newspaper-o fa-fw"></i> 新闻管理</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="page-wrapper">
                @yield('body')
            </div>
        </div>
    @show
    <script src="/js/admin.js"></script>
</body>
</html>
