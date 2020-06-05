@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                Nieuw artikel maken
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('dashboard.article.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Place title here" name="title">
                    </div>
                    <div class="form-group">
                        <label for="content">artikel content</label>
                        <textarea id="content" lass="form-control" name="content"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Please upload your article image</label>
                        <input type="file" name="image" id="image">
                    </div>

                    <button type="submit" class="btn btn-success">
                        Maak artikel
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
