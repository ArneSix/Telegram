@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{route('dashboard.article.create')}}" class="btn btn-primary">Artikel toevoegen</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Titel</th>
                        <th>content</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td><img class="w-25" src="{{ asset("storage/$article->image") }}" alt=""></td>
                            <td>{{$article->title}}</td>
                            <td>{{ Str::limit($article->content, 20) }}</td>
                            <td><a href="{{ route('dashboard.article.edit', $article->id) }}" class="btn btn-success">edit</a></td>
                            <td>
                                <form action="{{ route('dashboard.article.delete', $article->id)  }}" method="post">
                                    @csrf

                                    {{method_field('DELETE')}}
                                    <input type="hidden" name="page_id" value="{{$article->id}}">
                                    <button class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
