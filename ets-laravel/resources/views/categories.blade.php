@extends('template')

@section('container')
    <h1>Pasien : </h1>

    @foreach($categories as $category)
        <ul>
            <li>
                <h5>
                    <a href="/categories/{{ $category->slug }}">{{ $category->name }}
                    </a>                    
                </h5>
            </li>
        </ul>
    @endforeach
    <a href="/article" class="text-decoration-none d-block mt-3">Back</a>
@endsection