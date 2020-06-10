@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <div class="row home-section-intro my-5">
            <div class="col-md-6">
                <img class="home-section-intro-img image-contain" src="{{asset('img/phone.svg')}}" alt="">
            </div>
            <div class="col-md-6 d-flex justify-content-center flex-column">
                <h2>@lang('home.hero-title')</h2>
                <p>@lang('home.hero-text')</p>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-12 text-center">
                <img src="{{asset('img/scroll.svg')}}" alt="">
            </div>
        </div>
    </div>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-md-12 home-section-divider">
                <p>@lang('home.features-title')</p>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4"><img src="{{asset('img/encryption.svg')}}" alt=""></div>
            <div class="col-md-4"><img src="{{asset('img/storage.svg')}}" alt=""></div>
            <div class="col-md-4"><img src="{{asset('img/secure.svg')}}" alt=""></div>
        </div>
        <div class="row my-5 height-350">
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <h2>@lang('home.about-title')</h2>
                <p>@lang('home.about-text')</p>
                <a class="btn-learn-more" href="">@lang('home.about-btn')</a>
            </div>
            <div class="col-md-6">
                <img class="image-contain" src="{{asset('img/police.svg')}}" alt="">
            </div>
        </div>
    </div>
    <div class="home-section-articles">
        <div class="container my-5 py-5">
            <div class="row">
                <div class="col-md-12 text-center home-section-divider">
                    <p>@lang('home.articles-title')</p>
                </div>
                @foreach($articles as $article)
                        <div class="col-md-6">
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
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="{{route('articles')}}" class="btn-read-more">read more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 donations">
                <p class="section-donation-title">@lang('home.donations-title')</p>
                @foreach($donations as $donation)
                    <div class="donation-row">
                        <div class="donation-info">
                            <h5>{{$donation->name}}</h5>
                            <p>{{Str::limit($donation->message, 20)}}</p>
                            <p>{{$donation->amount}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-6">
                <p class="section-contact-title" id="contact">@lang('home.contact-title')</p>
                <form class="form" method='post' action="{{route('mail')}}">
                    @CSRF
                    <div class="form-group">
                        <label for="email">@lang('home.contact-email')</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email please">
                    </div>
                    <div class="form-group">
                        <label for="subject">@lang('home.contact-subject')</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject please">
                    </div>
                    <div class="form-group">
                        <label for="message">@lang('home.contact-message')</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit">@lang('home.contact-btn')</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 my-5 newsletter">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <p class="section-contact-title">Subscribe to our newsletter</p>
                <form class="form" action="{{route('subscribe')}}" method="post">
                    @CSRF
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email please">
                    </div>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
