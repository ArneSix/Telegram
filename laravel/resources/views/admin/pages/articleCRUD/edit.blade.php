@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                Artikel bewerken
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('dashboard.article.update', $article->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PATCH')}}

                    <input type="hidden" name="id" value="{{$article->id}}">

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" value="{{$article->title}}" class="form-control" id="title" placeholder="Place title here" name="title">
                    </div>

                    <div class="form-group">
                        <label for="image">Please upload your article image</label>
                        <input type="file" name="image" id="image">
                    </div>

                    <div class="form-group">
                        <label for="content">content</label>
                        <textarea class="form-control" id="intro" rows="3" name="content">
                            {{$article->content}}
                        </textarea>
                    </div>

                    <button type="submit" class="btn btn-success">
                        Update artikel
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
