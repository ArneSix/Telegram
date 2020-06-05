@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <div class="row home-section-intro my-5">
            <div class="col-md-6">
                <img class="home-section-intro-img image-contain" src="{{asset('img/phone.svg')}}" alt="">
            </div>
            <div class="col-md-6 d-flex justify-content-center flex-column">
                <h2>Introducing telegram</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias aliquid architecto atque autem, consequatur, dignissimos, eaque est harum hic itaque laborum maiores minima nesciunt quasi quis sint suscipit voluptas.</p>
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
                <p>Telegram's features</p>
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
                <h2>What makes Telegram special?</h2>
                <p>Telegram uses a heavy end-to-end encryption algorithm to keep your data safe from potential hackers. id mauris non, condimentum sollicitudin libero. Phasellus ac nisl ac orci convallis venenatis. Aliquam erat volutpat. Aliquam odio tortor, pharetra ac tellus a, feugiat consequat augue. Proin euismod imperdiet elit ut efficitur. Pellentesque hendrerit nisl ut erat placerat.</p>
                <a class="btn-learn-more" href="">Learn more</a>
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
                    <p>Read our most popular articles</p>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h4>title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h4>title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="" class="btn-read-more">read more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 donations">
                <p class="section-donation-title">Recent donations</p>
                <div class="donation-row">
                    <div class="donation-image">
                        <img src="" alt="">
                    </div>
                    <div class="donation-info">
                        <h5>Name</h5>
                        <p>Message</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <p class="section-contact-title">Contact us</p>
                <form class="form" action="">
                    @CSRF
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email please">
                    </div>
                    <div class="form-group">
                        <label for="subject">subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject please">
                    </div>
                    <div class="form-group">
                        <label for="message">message</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <p class="section-contact-title">Subscribe to our newsletter</p>
                <form class="form" action="">
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
