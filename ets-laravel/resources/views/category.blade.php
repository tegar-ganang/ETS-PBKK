@extends('template')

@section('container')
    <h1>Pasien : {{ $category }}</h1>
    <hr/>
    @foreach($articles as $article)
        <article class="mb-5 border-bottom pb-3">
            <h3>
                <a href="/article/{{ $article->slug }}" class="text-decoration-none">
                {{ $article->title }}
                </a>                    
            </h3>
            <h6>By: <a href="/authors/{{ $article->author->username }}" class="text-decoration-none"> {{ $article->author->username }} </a></h6>
            <p>{{ $article->excerpt }}</p>
        </article>
    @endforeach
    <a href="/article" class="text-decoration-none d-block mt-3">Back</a>
@endsection