@extends('layout')

@section('content')
    <div id="wrapper">

        <div id="banner"></div>
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>Integer sit amet aliquet</h2>
                    <span class="byline">Phasellus nec erat sit amet nibh pellentesque congue</span> </div>
                <p>This is <strong>GrassyGreen</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
                <p>Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget, tempus et, tellus. Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Aenean lectus lorem, imperdiet at, ultrices eget, ornare et, wisi. Pellentesque adipiscing purus ac magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.  Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. </p>
            </div>
            <div id="sidebar">
                <div class="box2">
                    <div class="title">
                        <h2>Integer gravida</h2>
                    </div>
                    @foreach($articles as $article)
                    <ul class="style2">
                        <li>
                            <h3><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h3>
                            <p><a href="#">{{ $article->excerpt }}</a></p>
                        </li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



@endsection
