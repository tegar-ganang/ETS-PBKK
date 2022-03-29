@extends('template')

@section('container')
    <h1>Halaman Rekam Medis</h1>
    <h5>Dokter: {{ $name }} | {{ $email }}</h5>
    <hr/>
    @foreach($articles as $article)
        <article class="mb-5 border-bottom pb-4">
            <h3>
                <a href="/article/{{ $article->slug }}" class="text-decoration-none">
                {{ $article->title }}
                </a>                    
            </h3>
            <h6>Pasien: <a href="/authors/{{ $article->author->username }}" class="text-decoration-none">{{ $article->author->username }}</a>
            in 
                <a href="/categories/{{ $article->category->slug }}" class="text-decoration-none"> {{ $article->category->name  }} </a>
            </h6>    
        <p>{{ $article->excerpt }}</p>
        <a href="/article/{{ $article->slug }}" class="text-decoration-none">Read more...</a> 
        </article>
    @endforeach
    <a href="/dashboard" class="text-decoration-none">Back</a>
@endsection