<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layout.style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <header>
        <div class="header-main">
            <ul class="menu">
                <li><a href="{{BASE_URL}}list-category">Quản lý danh mục</a></li>
                <li><a href="{{BASE_URL}}list-product">Quản lý sản phẩm</a></li>
                <li><a href="{{BASE_URL}}list-user">Quản lí người dùng</a></li>
                <li><a href="{{BASE_URL}}list-student">Quảng lí học sinh</a></li>
            </ul>
        </div>
    </header>
    <section class="content">
       @yield('content')
    </section>
    <footer>
        <span>FPT POLYTECNIC</span>
    </footer>
</div>
</body>
</html>