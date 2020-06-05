@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="d-flex flex-wrap">
            @foreach($donations as $donation)
                <div class="card m-1 flex-grow-1">
                    <div class="card-body">
                        <h5 class="card-title">{{$donation->name}}</h5>
                        <p class="card-text">{{$donation->message}}</p>
                        <p class="card-text">{{$donation->amount}} $</p>
                        <a href="{{route("dashboard.donation.show", $donation->id)}}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
