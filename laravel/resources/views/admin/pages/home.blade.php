@extends('layouts.auth')

@section('content')
    <div class="d-flex">
        <aside>
            ds
            <div class="dashboard-home-sidebar">
                <div class="sidebar-icon">
                    <img src="{{ asset("img/home.svg") }}" alt="pages">
                </div>
                <div class="sidebar-icon">
                    <img src="{{ asset("img/pages.svg") }}" alt="pages">
                </div>
                <div class="sidebar-icon">
                    <img src="{{ asset("img/article.svg") }}" alt="article">
                </div>
                <div class="sidebar-icon">
                    <img src="{{ asset("img/donate.svg") }}" alt="donate">
                </div>
                <div class="sidebar-icon">
                    <img src="{{ asset("img/key.svg") }}" alt="key">
                </div>
            </div>
        </aside>
        <div class="dashboard-home-main">
            content
        </div>
    </div>
@endsection
