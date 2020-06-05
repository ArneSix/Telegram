@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Donation
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$donation->name}}</h5>
                <p class="card-text">{{$donation->message}}</p>
                <p class="card-text">{{$donation->amount}}$</p>
            </div>
        </div>
    </div>
@endsection
