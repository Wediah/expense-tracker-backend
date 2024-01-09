<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>GrassyGreen</title>
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="description" content="">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,200,500,600,700,800,300" rel="stylesheet">
    <link href="/css/default.css" rel="stylesheet">
    <link href="/css/fonts.css" rel="stylesheet"><!--[if IE 6]>
    <link href="/public/css/default.css" rel="stylesheet"  />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <![endif]-->
</head>
<body>
<div>
    <div id="menu-wrapper">
        <div id="menu" class="container">
            <ul><li class="{{ Request::path() === '/' ? 'current_page_item' : '' }}"><a href="#">Homepage</a></li>
                <li class="{{ Request::path() === 'about' ? 'current_page_item' : '' }}"><a href="/about">About</a></li>
                <li class="{{ Request::path() === 'article' ? 'current_page_item' : '' }}"><a href="/articles">Articles</a></li>
                <li class="{{ Request::path() === 'portfolio' ? 'current_page_item' : '' }}"><a href="#">Portfolio</a></li>
                <li class="{{ Request::path() === 'contact' ? 'current_page_item' : '' }}"><a href="#">Contact</a></li>
            </ul></div>
        <!-- end #menu -->

    </div>

    @yield('header-featured')
</div>
    @yield('content')

<div id="footer-wrapper">
    <div id="footer" class="container">
        <div id="box1">
            <div class="title">
                <h2>Latest Post</h2>
            </div>
            <ul class="style1"><li><a href="#">Semper mod quis eget mi dolore</a></li>
                <li><a href="#">Quam turpis feugiat sit dolor</a></li>
                <li><a href="#">Amet ornare in hendrerit in lectus</a></li>
                <li><a href="#">Consequat etiam lorem phasellus</a></li>
                <li><a href="#">Amet turpis, feugiat et sit amet</a></li>
                <li><a href="#">Semper mod quisturpis nisi</a></li>
            </ul></div>
        <div id="box2">
            <div class="title">
                <h2>Popular Links</h2>
            </div>
            <ul class="style1"><li><a href="#">Semper mod quis eget mi dolore</a></li>
                <li><a href="#">Quam turpis feugiat sit dolor</a></li>
                <li><a href="#">Amet ornare in hendrerit in lectus</a></li>
                <li><a href="#">Consequat etiam lorem phasellus</a></li>
                <li><a href="#">Amet turpis, feugiat et sit amet</a></li>
                <li><a href="#">Semper mod quisturpis nisi</a></li>
            </ul></div>
        <div id="box3">
            <div class="title">
                <h2>Follow Us</h2>
            </div>
            <p>Proin eu wisi suscipit nulla suscipit interdum. Aenean lectus lorem, imperdiet magna.</p>
            <ul class="contact"><li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
                <li><a href="#" class="icon icon-facebook"><span>Facebook</span></a></li>
                <li><a href="#" class="icon icon-dribbble"><span>Dribbble</span></a></li>
                <li><a href="#" class="icon icon-tumblr"><span>Tumblr</span></a></li>
                <li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
            </ul><a href="#" class="button">Read More</a> </div>
    </div>
</div>

</body>
</html>
