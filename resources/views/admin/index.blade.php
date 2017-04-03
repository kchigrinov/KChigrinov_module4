<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin panel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class = "col-xs-12 col-md-2">
    <ul class="nav" style = "background: #333;">
        <li><a href="/admin/categories">Категории</a></li>
        <li><a href="/admin/news/create">Новости</a></li>
        <li><a href="/admin/welcome/comments">Комментарии</a></li>
        <li><a href="/admin/approved-comments/check">Комментарии ожидающие одобрения</a></li>
        <li><a href="/admin/advertising/create">Новый рекламный блок</a></li>
        <li><a href="/admin/welcome/styles">Стилизация сайта</a></li>
    </ul>
</div>
<div class = "col-xs-12 col-md-10">
@yield('categories')
@yield('style')
@yield('adveresting')
@yield('approved-comments')
@yield('news')
@yield('comments')
</div>

</body>
</html>