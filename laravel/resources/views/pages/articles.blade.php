@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-wrap">
        @foreach($articles as $article)
            <div class="col-md-3">
                <a href="{{ route('article', $article->id) }}">
                    <div class="card">
                        <img class="card-img-top" src="{{$article->image}}" alt="Card image cap">
                        <div class="card-body">
                            <h4>{{$article->title}}</h4>
                            <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
