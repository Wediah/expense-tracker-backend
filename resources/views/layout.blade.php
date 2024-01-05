<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>GrassyGreen</title>
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="description" content="">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,200,500,600,700,800,300" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet"><!--[if IE 6]>
    <link href="/public/css/default.css" rel="stylesheet"  />
    <![endif]-->
</head>
<body>
<div>
    <div id="menu-wrapper">
        <div id="menu" class="container">
            <ul><li class="{{ Request::path() === '/' ? 'current_page_item' : '' }}"><a href="#">Homepage</a></li>
                <li class="{{ Request::path() === 'about' ? 'current_page_item' : '' }}"><a href="/about">About</a></li>
                <li class="{{ Request::path() === 'blog' ? 'current_page_item' : '' }}"><a href="#">Blog</a></li>
                <li class="{{ Request::path() === 'portfolio' ? 'current_page_item' : '' }}"><a href="#">Portfolio</a></li>
                <li class="{{ Request::path() === 'contact' ? 'current_page_item' : '' }}"><a href="#">Contact</a></li>
            </ul></div>
        <!-- end #menu -->
        <div id="header-wrapper">
            <div id="header" class="container">
                <div id="logo">
                    <h1><a href="#">GrassyGreen</a></h1>

                </div>
            </div>
        </div>
    </div>

    @yield('header-featured')
</div>
    @yield('content')
</body>
</html>
