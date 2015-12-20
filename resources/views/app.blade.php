<!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    @include('item.meta')
    <title>@yield('title')APP</title>
    <link rel="stylesheet" href="/css/app.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    @include('item.header')
    @yield('body')
    @include('item.footer')

    @section('script.footer')
        <script src="/js/@yield('script', 'app.js')"></script>
    @show
</body>
</html>
