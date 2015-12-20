<!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    @include('item.meta')
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:100">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <title>404</title>


    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        a {
            text-decoration: none
        }
        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 72px;
            margin-bottom: 0px;
        }
        .subtitle {
            font-size: 28px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="title">404</div>
            <div class="subtitle">Oops!! Page not found</div>
            <a href="/" class="btn btn-success">返回首页</a>
        </div>
    </div>
</body>
</html>
