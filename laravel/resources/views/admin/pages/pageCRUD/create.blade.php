@extends('layouts.auth');

@section('scripts')
    <script>
        window.addEventListener('load', () => {
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
        })
    </script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                Nieuwe pagina maken
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('dashboard.page.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Place title here" name="title">
                    </div>
                    <div class="form-group">
                        <label for="active">activate/deactivate page</label>
                        <select multiple class="form-control" id="active" name="active">
                            <option value="1">Pagina zichtbaar</option>
                            <option value="0">Pagina onzichtbaar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="intro">intro</label>
                        <textarea class="form-control" id="intro" rows="3" name="intro"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="content">Example textarea</label>
                        <textarea id="editor" name="content"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="layout">layout</label>
                        <input type="text" class="form-control" id="layout" placeholder="enter layout here" name="layout">
                    </div>

                    <button type="submit" class="btn btn-success">
                        Maak pagina
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
