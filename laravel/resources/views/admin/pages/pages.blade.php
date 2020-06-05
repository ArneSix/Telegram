@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{route('dashboard.page.create')}}" class="btn btn-primary">Pagina toevoegen</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Titel</th>
                        <th>Intro</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pages as $page)
                        <tr>
                            <td>{{$page->title}}</td>
                            <td>{{ Str::limit($page->intro, 20) }}</td>
                            <td><a href="{{ route('dashboard.page.edit', $page->id) }}" class="btn btn-success">edit</a></td>
                            <td>
                                <form action="{{ route('dashboard.page.delete', $page->id)  }}" method="post">
                                    @csrf

                                    {{method_field('DELETE')}}
                                    <input type="hidden" name="page_id" value="{{$page->id}}">
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
