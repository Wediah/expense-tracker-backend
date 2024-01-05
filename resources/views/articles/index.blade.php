@extends('layout')

@section('content')
    <div>
        @foreach($articles as $article)
            <ul class="style2">
                <li>
                    <h3><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h3>
                    <p><a href="#">{{ $article->excerpt }}</a></p>
                </li>
            </ul>
        @endforeach
    </div>
@endsection
